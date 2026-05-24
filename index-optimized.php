<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta fondamentales -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO et partage social -->
    <?php include __DIR__ . '/includes/meta.php'; ?>
    
    <!-- Ressources externes avec preconnect pour optimisation -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    
    <!-- Fonts Google -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Manifest et robots pour PWA et SEO -->
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="icon" type="image/svg+xml" href="assets/icons/favicon.svg">
    <link rel="icon" type="image/png" href="assets/icons/favicon.png">
    <link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Analytics avec consentement -->
    <?php include __DIR__ . '/includes/analytics.php'; ?>
    
    <!-- Thème et couleurs -->
    <meta name="theme-color" content="#C9A961">
</head>
<body>
    <?php include __DIR__ . "/includes/header.php"; ?>

    <main class="page-shell">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy">
                <p class="eyebrow">Exposition immersive</p>
                <h1 id="hero-title">RÉSONANCES DU VIVANT</h1>
                <p class="hero-subtitle">Du monde tangible à l'invisible</p>
                <div class="hero-details">
                    <p><strong>Exposition :</strong> Du 19 juin au 5 juillet 2026</p>
                    <p><strong>Lieu :</strong> Galerie de Grandcour, Rue du Reinz 11, 1543 Grandcour</p>
                    <p><strong>Vernissage Immersif :</strong> Vendredi 19 juin dès 17h00</p>
                </div>
                <div class="hero-actions">
                    <a class="button button-outline" href="https://www.google.com/maps/search/?api=1&query=Galerie+de+Grandcour+Rue+du+Reinz+11+Grandcour" target="_blank" rel="noopener">Itinéraire</a>
                    <a class="button button-solid" href="mailto:contact@resonancesduvivant.ch">Contact</a>
                </div>
            </div>
        </section>

        <section class="grid-section" aria-labelledby="artists-title">
            <h2 id="artists-title">Les escales du voyage</h2>
            <div class="artist-grid">
                <article class="artist-card">
                    <picture>
                        <source srcset="assets/images/alison-rikunali-portrait-exposition-400.avif 400w, assets/images/alison-rikunali-portrait-exposition-600.avif 600w, assets/images/alison-rikunali-portrait-exposition-800.avif 800w" sizes="(max-width: 600px) 400px, (max-width: 1024px) 600px, 800px" type="image/avif">
                        <img src="assets/images/alison-rikunali-portrait-exposition-600.avif" alt="Alain Mouret - Artiste graphique et dessinateur, thème Le Trait" width="600" height="600" loading="lazy" decoding="async">
                    </picture>
                    <div class="artist-copy">
                        <h3>Alain Mouret</h3>
                        <p class="artist-theme">Le Trait</p>
                        <p class="artist-bio">Artiste graphique et dessinateur, Alain Mouret explore la poésie du minimalisme et la force du geste. Son travail se concentre sur l'essence épurée de la ligne, transformant le trait en langage universel. Ses œuvres interrogent la présence et l'absence, l'espace et le silence.</p>
                    </div>
                </article>
                <article class="artist-card">
                    <picture>
                        <source srcset="assets/images/sonja-fasel-portrait-exposition-400.avif 400w, assets/images/sonja-fasel-portrait-exposition-600.avif 600w, assets/images/sonja-fasel-portrait-exposition-800.avif 800w" sizes="(max-width: 600px) 400px, (max-width: 1024px) 600px, 800px" type="image/avif">
                        <img src="assets/images/sonja-fasel-portrait-exposition-600.avif" alt="Sonja Fasel - Thérapeute en arts expressifs et artiste visuelle, thème L'Émotion" width="600" height="600" loading="lazy" decoding="async">
                    </picture>
                    <div class="artist-copy">
                        <h3>Sonja Fasel</h3>
                        <p class="artist-theme">L'Émotion</p>
                        <p class="artist-bio">Thérapeute en arts expressifs et artiste visuelle, Sonja Fasel crée un univers poétique où la couleur devient langage émotionnel. Ses palettes vibrantes et ses compositions dynamiques invitent le spectateur à un voyage intérieur, une exploration des sentiments et des résonances de l'âme.</p>
                    </div>
                </article>
                <article class="artist-card">
                    <picture>
                        <source srcset="assets/images/alison-rikunali-portrait-exposition-400.avif 400w, assets/images/alison-rikunali-portrait-exposition-600.avif 600w, assets/images/alison-rikunali-portrait-exposition-800.avif 800w" sizes="(max-width: 600px) 400px, (max-width: 1024px) 600px, 800px" type="image/avif">
                        <img src="assets/images/alison-rikunali-portrait-exposition-600.avif" alt="Alison Rikunali - Thérapeute, géobiologue et guérisseuse chamanique, thème L'Invisible" width="600" height="600" loading="lazy" decoding="async">
                    </picture>
                    <div class="artist-copy">
                        <h3>Alison Rikunali</h3>
                        <p class="artist-theme">L'Invisible</p>
                        <p class="artist-bio">Thérapeute, géobiologue et guérisseuse chamanique basée à La Tour-de-Peilz, Alison Vurpillat Portmann (Rikunali) conçoit son art comme un véritable acte d'artivisme. Plongez dans sa clairière éphémère où ses Toiles Vibratoires s'illuminent sous la lumière noire, révélant les trames énergétiques de la forêt, les animaux totems et les esprits. Une œuvre de résistance spirituelle et écologique.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="timeline-section" aria-labelledby="timeline-title">
            <h2 id="timeline-title">Le Vernissage Immersif</h2>
            <div class="timeline-list">
                <article class="timeline-step">
                    <h3>Accueil et Carnets de Voyage</h3>
                    <p>Le galeriste et maître des lieux, Ueli Affolter, vous ouvre les portes de la galerie et vous invite à découvrir les carnets qui accompagnent chaque œuvre.</p>
                </article>
                <article class="timeline-step">
                    <h3>La Poésie des Couleurs</h3>
                    <p>Expérience sensorielle et lecture poétique animée par Sonja Fasel qui met en lumière la profondeur et la nuance de chaque palette.</p>
                </article>
                <article class="timeline-step">
                    <h3>Le Passage vers l'Invisible</h3>
                    <p>La lumière se tamise. Au son du hochet chamanique, Alison Rikunali vous guide vers une présence subtile et une immersion plus intime.</p>
                </article>
                <article class="timeline-step timeline-closing">
                    <h3>Clôture</h3>
                    <p>Pour clôturer cette présentation, un apéritif vous sera chaleureusement proposé.</p>
                </article>
            </div>
        </section>

        <section class="gallery-section" aria-labelledby="gallery-title">
            <h2 id="gallery-title">La galerie de Grandcour</h2>
            <div class="gallery-container">
                <div class="gallery-content">
                    <p class="gallery-text">Située à la Rue du Reinz 11 (CH-1543 Grandcour), la Galerie de Grandcour est l'écrin de cette exposition. Fidèle à sa philosophie d'ancrage et de mise en valeur des traces de l'histoire, le maître des lieux Ueli Affolter vous y accueille pour une expérience artistique immersive.</p>
                    <a class="button button-outline" href="https://www.galerie-grandcour.ch/" target="_blank" rel="noopener">Visiter le site de la Galerie</a>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section" aria-labelledby="contact-title">
            <h2 id="contact-title">Contact</h2>
            <p>Pour toute demande de collaboration ou d&apos;information sur l&apos;événement.</p>
            <div class="contact-info">
                <p><strong>Téléphone :</strong> <a href="tel:+41788238950">078 823 89 50</a></p>
                <p><strong>Email :</strong> <a href="mailto:contact@resonancesduvivant.ch">contact@resonancesduvivant.ch</a></p>
                <p><strong>Site :</strong> <a href="https://www.resonancesduvivant.ch" target="_blank" rel="noopener">www.resonancesduvivant.ch</a></p>
            </div>
        </section>
    </main>

    <?php include __DIR__ . "/includes/consent-banner.php"; ?>
    <?php include __DIR__ . "/includes/footer.php"; ?>
</body>
</html>
