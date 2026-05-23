<!DOCTYPE html>
<html lang="fr">
<?php include __DIR__ . '/../includes/head.php'; ?>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>
        <section class="hero" aria-labelledby="thank-you-title">
            <div class="hero-content">
                <h1 id="thank-you-title">Inscription enregistrée</h1>
                <p class="subtitle">Votre demande a bien été prise en compte. Vous recevrez bientôt une confirmation par e-mail.</p>
                <div class="action-grid">
                    <a class="btn-cta" href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Vernissage+Immersif+-+Resonances+du+Vivant&dates=20260619T170000/20260619T230000&ctz=Europe%2FParis&details=Invitation+au+vernissage+immersif+de+Resonances+du+Vivant.&location=Galerie+de+Grandcour%2C+Rue+du+Reinz+11%2C+1543+Grandcour" target="_blank" rel="noopener">Ajouter à Google Calendar</a>
                    <a class="btn-cta" href="../includes/download-ics.php">Télécharger l’invitation (.ics)</a>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <style>
        .action-grid {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            justify-content: center;
            margin-top: 2rem;
        }
        .action-grid .btn-cta {
            min-width: 260px;
            border-color: var(--gold);
            color: var(--gold);
            background: transparent;
        }
        .action-grid .btn-cta:hover,
        .action-grid .btn-cta:focus-visible {
            background: var(--gold);
            color: var(--bg);
        }
        @media (min-width: 640px) {
            .action-grid {
                flex-direction: row;
            }
        }
    </style>
</body>
</html>
<video 
  class="hero-background-video" 
  autoplay 
  muted 
  loop 
  playsinline
  aria-hidden="true"
>
  <source src="assets/videos/ambiance-exposition-loopable.webm" type="video/webm">
  <source src="assets/videos/ambiance-exposition-loopable.mp4" type="video/mp4">
</video><video 
  class="hero-background-video" 
  autoplay 
  muted 
  loop 
  playsinline
  aria-hidden="true"
>
  <source src="assets/videos/ambiance-exposition-loopable.webm" type="video/webm">
  <source src="assets/videos/ambiance-exposition-loopable.mp4" type="video/mp4">
</video><div class="video-container video-youtube">
  <iframe 
    width="100%" 
    height="auto" 
    src="https://www.youtube.com/embed/VIDEO_ID" 
    title="Sonja Fasel - L'Emotion" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen
    loading="lazy"
  ></iframe>
</div><div class="video-container">
  <video 
    controls 
    preload="metadata" 
    playsinline
    poster="assets/images/alison-rikunali-video-poster.webp"
  >
    <source src="assets/videos/alison-rikunali-l-invisible.mp4" type="video/mp4">
    Votre navigateur ne supporte pas la balise video HTML5.
  </video>
</div><div class="video-container">
  <video 
    controls 
    preload="metadata" 
    playsinline
    poster="assets/images/alain-mouret-le-trait-poster.webp"
  >
    <source src="assets/videos/alain-mouret-le-trait.webm" type="video/webm">
    <source src="assets/videos/alain-mouret-le-trait.mp4" type="video/mp4">
    Votre navigateur ne supporte pas la balise video HTML5.
  </video>
</div>.video-container {
  position: relative;
  width: 100%;
  max-width: 880px;
  margin: 0 auto;
  aspect-ratio: 16 / 9;
}

.video-container video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  background: #050505;
  border-radius: 1.5rem;
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.video-youtube {
  aspect-ratio: 16 / 9;
}

.video-youtube iframe {
  width: 100%;
  height: 100%;
  border-radius: 1.5rem;
  border: 1px solid rgba(255, 255, 255, 0.08);
  display: block;
}

.hero-background-video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: -1;
  opacity: 0.35;
}assets/
  videos/
    alain-mouret-le-trait.webm
    alain-mouret-le-trait.mp4
    alison-rikunali-l-invisible.mp4
    ambiance-exposition-loopable.webm
    ambiance-exposition-loopable.mp4
  images/
    alain-mouret-le-trait-poster.avif
    alison-rikunali-l-invisible-poster.webp