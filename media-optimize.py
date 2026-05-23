#!/usr/bin/env python3
from pathlib import Path
import re
import sys
import shutil
import subprocess

SOURCE_DIR = Path(r"C:\Users\Administrateur\Pictures\Gallerie Grancour")
PROJECT_ROOT = Path(__file__).resolve().parent
IMAGE_DEST = PROJECT_ROOT / "assets" / "images"
VIDEO_DEST = PROJECT_ROOT / "assets" / "videos"

PORTRAIT_MAP = {
    "alain-mouret": "ueli-affolter-portrait-exposition",
    "sonja-fasel": "sonja-fasel-portrait-exposition",
    "alison-rikunali": "alison-rikunali-portrait-exposition",
}

IMAGE_EXTENSIONS = {".jpg", ".jpeg", ".png", ".webp", ".avif", ".svg"}
VIDEO_EXTENSIONS = {".mp4", ".mov", ".mkv", ".avi", ".webm"}

HERO_BASE = "resonances-du-vivant-hero-exposition-grandcour-2026"
LOGO_BASE = "logo-resonances-du-vivant-or"

HERO_WIDTHS = [1600, 1200, 800]
PORTRAIT_WIDTHS = [800, 600, 400]
AMBiance_MAX_WIDTH = 1200
LOGO_MAX_WIDTH = 320


def ensure_dirs():
    IMAGE_DEST.mkdir(parents=True, exist_ok=True)
    VIDEO_DEST.mkdir(parents=True, exist_ok=True)


def safe_name(text: str) -> str:
    text = text.lower()
    text = re.sub(r"[^a-z0-9]+", "-", text)
    text = re.sub(r"-+", "-", text).strip("-")
    return text


def can_save_avif():
    from PIL import Image
    try:
        Image.new("RGB", (1, 1)).save(IMAGE_DEST / "__avif_test__.avif", format="AVIF")
        Path(IMAGE_DEST / "__avif_test__.avif").unlink()
        return True
    except Exception:
        return False


def process_image(image_path: Path, output_path: Path, target_format: str, resize_width: int = None, crop_square: bool = False):
    from PIL import Image

    img = Image.open(image_path)
    img = img.convert("RGB")

    if crop_square:
        width, height = img.size
        side = min(width, height)
        left = (width - side) // 2
        top = (height - side) // 2
        img = img.crop((left, top, left + side, top + side))

    if resize_width:
        width, height = img.size
        if width != resize_width:
            ratio = resize_width / float(width)
            img = img.resize((resize_width, max(1, int(height * ratio))), Image.LANCZOS)

    output_path.parent.mkdir(parents=True, exist_ok=True)
    output_path = output_path.with_suffix(f".{target_format.lower()}")
    img.save(output_path, format=target_format)
    print(f"Saved {output_path.relative_to(PROJECT_ROOT)}")


def resize_image(image_path: Path, output_path: Path, max_width: int, target_format: str):
    from PIL import Image

    img = Image.open(image_path)
    img = img.convert("RGB")
    width, height = img.size
    if width > max_width:
        ratio = max_width / float(width)
        img = img.resize((max_width, max(1, int(height * ratio))), Image.LANCZOS)
    output_path.parent.mkdir(parents=True, exist_ok=True)
    output_path = output_path.with_suffix(f".{target_format.lower()}")
    img.save(output_path, format=target_format)
    print(f"Saved {output_path.relative_to(PROJECT_ROOT)}")


def choose_hero_image(images):
    candidates = [img for img in images if img.suffix.lower() in IMAGE_EXTENSIONS]
    if not candidates:
        return None

    def score(path):
        try:
            from PIL import Image
            with Image.open(path) as img:
                w, h = img.size
                area = w * h
                landscape = 1 if w >= h else 0
                return (landscape, area)
        except Exception:
            return (0, 0)

    candidates.sort(key=score, reverse=True)
    return candidates[0]


def run_ffmpeg(input_path: Path, output_path: Path):
    if shutil.which("ffmpeg") is None:
        print("ffmpeg not found, skipping video conversion.")
        return False

    msg = subprocess.run(
        [
            "ffmpeg",
            "-y",
            "-i",
            str(input_path),
            "-an",
            "-vf",
            "scale=1280:720:force_original_aspect_ratio=decrease,pad=1280:720:(ow-iw)/2:(oh-ih)/2:black",
            str(output_path)
        ],
        capture_output=True,
        text=True,
    )
    if msg.returncode != 0:
        print("ffmpeg failed:", msg.stderr)
        return False
    print(f"Saved {output_path.relative_to(PROJECT_ROOT)}")
    return True


def main():
    try:
        from PIL import Image
    except ImportError:
        print("Pillow is not installed. Install it with: python -m pip install pillow")
        sys.exit(1)

    if not SOURCE_DIR.exists():
        print(f"Source directory not found: {SOURCE_DIR}")
        sys.exit(1)

    ensure_dirs()
    avif_available = can_save_avif()
    target_format = "AVIF" if avif_available else "WEBP"
    print(f"Target image format: {target_format}")

    source_images = [p for p in SOURCE_DIR.iterdir() if p.is_file() and p.suffix.lower() in IMAGE_EXTENSIONS]
    source_videos = [p for p in SOURCE_DIR.iterdir() if p.is_file() and p.suffix.lower() in VIDEO_EXTENSIONS]

    portrait_files = {
        "alain-mouret": [p for p in source_images if "alain-mouret" in p.name.lower()],
        "sonja-fasel": [p for p in source_images if "sonja-fasel" in p.name.lower()],
        "alison-rikunali": [p for p in source_images if "alison-rikunali" in p.name.lower() or "rikunali" in p.name.lower()],
    }

    hero_file = choose_hero_image([p for p in source_images if "logo" not in p.name.lower() and not any(k in p.name.lower() for k in portrait_files) and p.suffix.lower() != ".svg"])
    if hero_file:
        print(f"Selected hero image: {hero_file.name}")
        for width in HERO_WIDTHS:
            output = IMAGE_DEST / f"{HERO_BASE}-{width}"
            process_image(hero_file, output, target_format, resize_width=width)
    else:
        print("No hero image found.")

    # Portrait processing
    for key, outputs in PORTRAIT_MAP.items():
        if portrait_files[key]:
            source = portrait_files[key][0]
            print(f"Processing portrait {key}: {source.name}")
            for width in PORTRAIT_WIDTHS:
                output = IMAGE_DEST / f"{outputs}-{width}"
                process_image(source, output, target_format, resize_width=width, crop_square=True)
        else:
            print(f"Portrait source missing for {key}")

    # Logo processing
    logo_files = [p for p in source_images if "logo" in p.name.lower()]
    if logo_files:
        logo_source = logo_files[0]
        print(f"Processing logo: {logo_source.name}")
        if logo_source.suffix.lower() == ".svg":
            shutil.copy2(logo_source, IMAGE_DEST / f"{LOGO_BASE}.svg")
            print(f"Copied logo SVG to assets/images/{LOGO_BASE}.svg")
        else:
            output = IMAGE_DEST / f"{LOGO_BASE}"
            process_image(logo_source, output, "WEBP", resize_width=LOGO_MAX_WIDTH)
    else:
        print("Logo source not found.")

    # Ambiance/Oeuvres images
    used = set()
    if hero_file:
        used.add(hero_file)
    for file_list in portrait_files.values():
        if file_list:
            used.add(file_list[0])
    if logo_files:
        used.add(logo_files[0])

    ambiance_candidates = [p for p in source_images if p not in used and p.suffix.lower() != ".svg"]
    seq = 1
    for image_path in sorted(ambiance_candidates, key=lambda p: p.name.lower()):
        stem = image_path.stem
        if "whatsapp" in stem.lower():
            subject = f"ambiance-{seq}"
        else:
            cleaned = safe_name(stem)
            subject = cleaned if cleaned else f"image-{seq}"
        name = f"resonances-du-vivant-{subject}-grandcour"
        output = IMAGE_DEST / name
        resize_image(image_path, output, AMBiance_MAX_WIDTH, target_format)
        seq += 1

    # Video processing
    if source_videos:
        video_source = source_videos[0]
        output_video = VIDEO_DEST / "resonances-du-vivant-ambiance-uv-grandcour-2026.webm"
        if run_ffmpeg(video_source, output_video):
            print(f"Video processed: {video_source.name}")
    else:
        print("No video file found in source folder.")

    print("Media optimization finished.")


if __name__ == "__main__":
    main()
