#!/usr/bin/env python3
from pathlib import Path
from PIL import Image

PROJECT_ROOT = Path(__file__).resolve().parent
IMAGE_DIR = PROJECT_ROOT / "assets" / "images"

def convert_to_webp_avif(source_path: Path, output_base: str):
    """Convert image to WebP and AVIF formats with video poster dimensions (16:9)."""
    try:
        img = Image.open(source_path)
        img = img.convert("RGB")
        
        # Scale to 16:9 aspect ratio for video poster (1600x900)
        target_width = 1600
        target_height = 900
        img_resized = img.resize((target_width, target_height), Image.LANCZOS)
        
        # Save as WebP
        webp_path = IMAGE_DIR / f"{output_base}.webp"
        img_resized.save(webp_path, "WEBP", quality=85)
        print(f"Created {webp_path.relative_to(PROJECT_ROOT)}")
        
        # Save as AVIF
        avif_path = IMAGE_DIR / f"{output_base}.avif"
        img_resized.save(avif_path, "AVIF", quality=85)
        print(f"Created {avif_path.relative_to(PROJECT_ROOT)}")
        
    except Exception as e:
        print(f"Error processing {source_path}: {e}")

# Generate poster for Alain Mouret
source_alain = IMAGE_DIR / "alain-mouret-1.jpg"
if source_alain.exists():
    convert_to_webp_avif(source_alain, "alain-mouret-presentation-poster")
else:
    print(f"Warning: {source_alain} not found")

# Generate poster for Alison Rikunali
source_alison = IMAGE_DIR / "alison-rikunali-1.jpg"
if source_alison.exists():
    convert_to_webp_avif(source_alison, "alison-rikunali-performance-poster")
else:
    print(f"Warning: {source_alison} not found")

print("Poster generation complete!")
