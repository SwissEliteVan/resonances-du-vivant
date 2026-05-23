<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ . '/includes/meta.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . "/includes/header.php"; ?>

    <main class="page-shell">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy">
                <p class="eyebrow">Exposition immersive</p>
                <h1 id="hero-title">RESONANCES DU VIVANT</h1>
                <p class="hero-subtitle">Du monde tangible à l'invisible</p>
                <div class="hero-details">
                    <p><strong>Exposition :</strong> Du 19 juin au 5 juillet 2026</p>
                    <p><strong>Lieu :</strong> Galerie de Grandcour, Rue du Reinz 11</p>
                    <p><strong>Vernissage Immersif :</strong> Vendredi 19 juin dès 17h00</p>
                </div>
                <div class="hero-actions">
                    <a class="button button-outline" href="https://www.google.com/maps/search/?api=1&query=Galerie+de+Grandcour+Rue+du+Reinz+11" target="_blank" rel="noopener">Itineraire</a>
                    <a class="button button-solid" href="mailto:contact@resonancesduvivant.ch">Contact</a>
                </div>
            </div>
        </section>

        <section class="grid-section" aria-labelledby="artists-title">
            <h2 id="artists-title">Les escales du voyage</h2>
            <div class="artist-grid">
                <article class="artist-card">
                    <img src="assets/images/alain-mouret-portrait-exposition.avif" alt="Portrait d'Alain Mouret, thème Le Trait" width="600" height="600" loading="lazy">
                    <div class="artist-copy">
                        <h3>Alain Mouret</h3>
                        <p>Le Trait</p>
                    </div>
                </article>
                <article class="artist-card">
                    <img src="assets/images/sonja-fasel-portrait-exposition.avif" alt="Portrait de Sonja Fasel, thème L'Emotion" width="600" height="600" loading="lazy">
                    <div class="artist-copy">
                        <h3>Sonja Fasel</h3>
                        <p>L'Emotion</p>
                    </div>
                </article>
                <article class="artist-card">
                    <img src="assets/images/alison-rikunali-portrait-exposition.avif" alt="Portrait d'Alison Rikunali, thème L'Invisible" width="600" height="600" loading="lazy">
                    <div class="artist-copy">
                        <h3>Alison Rikunali</h3>
                        <p>L'Invisible</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="timeline-section" aria-labelledby="timeline-title">
            <h2 id="timeline-title">Le Vernissage Immersif</h2>
            <div class="timeline-list">
                <article class="timeline-step">
                    <h3>Accueil et Carnets de Voyage</h3>
                    <p>Le galeriste et maître des lieux, Ueli Affolter, vous ouvre les portes de la galerie et vous invite à découvrir les carnets qui accompagnent chaque oeuvre.</p>
                </article>
                <article class="timeline-step">
                    <h3>La Poesie des Couleurs</h3>
                    <p>Experience sensorielle et lecture poetique animee par Sonja Fasel qui met en lumière la profondeur et la nuance de chaque palette.</p>
                </article>
                <article class="timeline-step">
                    <h3>Le Passage vers l'Invisible</h3>
                    <p>La lumiere se tamise. Au son du hochet chamanique, Alison Rikunali vous guide vers une presence subtile et une immersion plus intime.</p>
                </article>
                <article class="timeline-step timeline-closing">
                    <h3>Cloture</h3>
                    <p>Pour cloturer cette presentation, un aperitif vous sera chaleureusement propose.</p>
                </article>
            </div>
        </section>

        <section id="contact" class="contact-section" aria-labelledby="contact-title">
            <h2 id="contact-title">Contact</h2>
            <p>Pour toute demande de collaboration ou d&apos;information sur l&apos;événement.</p>
        </section>
    </main>

    <?php include __DIR__ . "/includes/footer.php"; ?>
</body>
</html>
