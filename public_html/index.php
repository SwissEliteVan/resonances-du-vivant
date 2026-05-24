<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include __DIR__ . '/includes/meta.php'; ?>
    <?php include __DIR__ . '/includes/analytics.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include __DIR__ . "/includes/cookie-wall.php"; ?>
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

        <section class="escales-section" aria-labelledby="escales-title">
            <h2 id="escales-title">Les escales du voyage</h2>
            <div class="escales-grid">
                <article class="escale-card">
                    <div class="video-container-16-9">
                        <video
                            controls
                            preload="metadata"
                            playsinline
                            poster="assets/images/alain-mouret-presentation-poster.webp"
                            aria-label="Presentation video d'Alain Mouret - Exploration du trait et minimalisme, en attente de contenu futur">
                            <source src="" type="video/mp4">
                            Contenu video a venir.
                        </video>
                    </div>
                    <div class="escale-content">
                        <h3>Escale 1 : Le Trait</h3>
                        <p class="escale-artist">Alain Mouret</p>
                        <p class="escale-description">L'artiste Alain Mouret explore la maitrise du trait a travers des oeuvres minimalistes, saisissantes et mysterieuses.</p>
                        <div class="escale-actions">
                            <a class="button button-outline" href="#" target="_blank" rel="noopener">Visiter le site</a>
                        </div>
                    </div>
                </article>

                <article class="escale-card">
                    <div class="video-container-16-9">
                        <iframe
                            width="100%"
                            height="100%"
                            src="https://www.youtube.com/embed/ejoV-lZggaw"
                            title="Sonja Fasel - Farben erzahlen lassen (Laisser parler les couleurs)"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="escale-content">
                        <h3>Escale 2 : Le Mouvement et l'Emotion</h3>
                        <p class="escale-artist">Sonja Fasel</p>
                        <p class="escale-description">A travers son concept "Farben erzahlen lassen", Sonja transforme la fluidite des rivieres en une veritable poesie picturale.</p>
                        <div class="escale-actions">
                            <a class="button button-outline" href="#" target="_blank" rel="noopener">Decouvrir sa boutique</a>
                            <a class="button button-outline" href="mailto:contact@resonancesduvivant.ch">Contacter l'artiste</a>
                        </div>
                    </div>
                </article>

                <article class="escale-card">
                    <div class="video-container-16-9">
                        <video
                            controls
                            preload="metadata"
                            playsinline
                            poster="assets/images/alison-rikunali-performance-poster.webp"
                            width="100%"
                            aria-label="Performance artistique d'Alison Rikunali dans sa clairiere ephemere sous lumiere noire">
                            <source src="assets/videos/alison-rikunali-performance.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas la balise video HTML5.
                        </video>
                    </div>
                    <div class="escale-content">
                        <h3>Escale 3 : Le Sanctuaire et l'Invisible</h3>
                        <p class="escale-artist">Alison "Rikunali"</p>
                        <p class="escale-description">Therapeute et chamane, Rikunali propose un artivisme vibrant. Plongez dans sa clairiere ephemere sous la lumiere noire.</p>
                        <div class="escale-actions">
                            <a class="button button-outline" href="https://www.instagram.com/rikunali" target="_blank" rel="noopener">Suivre @Rikunali</a>
                            <a class="button button-outline" href="mailto:contact@resonancesduvivant.ch">Contacter l'artiste</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="artists-carousels-section" aria-labelledby="artists-gallery-title">
            <h2 id="artists-gallery-title">Galerie des Artistes</h2>
            <div class="artists-carousels-grid">
                <article class="artist-carousel-card">
                    <div class="escale-carousel-container">
                        <div class="escale-carousel" data-carousel="carousel-1">
                            <img src="assets/images/alain-mouret-1.jpg" alt="Alain Mouret - Oeuvre 1" loading="lazy">
                            <img src="assets/images/alain-mouret-2.jpg" alt="Alain Mouret - Oeuvre 2" loading="lazy">
                            <img src="assets/images/alain-mouret-3.jpg" alt="Alain Mouret - Oeuvre 3" loading="lazy">
                            <img src="assets/images/alain-mouret-4.jpg" alt="Alain Mouret - Oeuvre 4" loading="lazy">
                            <img src="assets/images/alain-mouret-5.jpg" alt="Alain Mouret - Oeuvre 5" loading="lazy">
                        </div>
                        <button class="carousel-btn carousel-prev" data-carousel="carousel-1" aria-label="Image precedente">◀</button>
                        <button class="carousel-btn carousel-next" data-carousel="carousel-1" aria-label="Image suivante">▶</button>
                    </div>
                    <div class="artist-carousel-info">
                        <h3>Alain Mouret</h3>
                        <p class="artist-theme">Le Trait</p>
                        <p class="artist-bio">L'artiste Alain Mouret explore la maitrise du trait a travers des oeuvres minimalistes, saisissantes et mysterieuses.</p>
                    </div>
                </article>

                <article class="artist-carousel-card">
                    <div class="escale-carousel-container">
                        <div class="escale-carousel" data-carousel="carousel-2">
                            <img src="assets/images/sonja-fasel-1.jpg" alt="Sonja Fasel - Oeuvre 1" loading="lazy">
                            <img src="assets/images/sonja-fasel-2.jpg" alt="Sonja Fasel - Oeuvre 2" loading="lazy">
                            <img src="assets/images/sonja-fasel-3.jpg" alt="Sonja Fasel - Oeuvre 3" loading="lazy">
                            <img src="assets/images/sonja-fasel-4.jpg" alt="Sonja Fasel - Oeuvre 4" loading="lazy">
                            <img src="assets/images/sonja-fasel-5.jpg" alt="Sonja Fasel - Oeuvre 5" loading="lazy">
                        </div>
                        <button class="carousel-btn carousel-prev" data-carousel="carousel-2" aria-label="Image precedente">◀</button>
                        <button class="carousel-btn carousel-next" data-carousel="carousel-2" aria-label="Image suivante">▶</button>
                    </div>
                    <div class="artist-carousel-info">
                        <h3>Sonja Fasel</h3>
                        <p class="artist-theme">Le Mouvement et l'Emotion</p>
                        <p class="artist-bio">A travers son concept "Farben erzahlen lassen", Sonja transforme la fluidite des rivieres en une veritable poesie picturale.</p>
                    </div>
                </article>

                <article class="artist-carousel-card">
                    <div class="escale-carousel-container">
                        <div class="escale-carousel" data-carousel="carousel-3">
                            <img src="assets/images/alison-rikunali-1.jpg" alt="Alison Rikunali - Oeuvre 1" loading="lazy">
                            <img src="assets/images/alison-rikunali-2.jpg" alt="Alison Rikunali - Oeuvre 2" loading="lazy">
                            <img src="assets/images/alison-rikunali-3.jpg" alt="Alison Rikunali - Oeuvre 3" loading="lazy">
                            <img src="assets/images/alison-rikunali-4.jpg" alt="Alison Rikunali - Oeuvre 4" loading="lazy">
                            <img src="assets/images/alison-rikunali-5.jpg" alt="Alison Rikunali - Oeuvre 5" loading="lazy">
                        </div>
                        <button class="carousel-btn carousel-prev" data-carousel="carousel-3" aria-label="Image precedente">◀</button>
                        <button class="carousel-btn carousel-next" data-carousel="carousel-3" aria-label="Image suivante">▶</button>
                    </div>
                    <div class="artist-carousel-info">
                        <h3>Alison Rikunali</h3>
                        <p class="artist-theme">Le Sanctuaire et l'Invisible</p>
                        <p class="artist-bio">Therapeute et chamane, Rikunali propose un artivisme vibrant. Plongez dans sa clairiere ephemere sous la lumiere noire.</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="timeline-section" aria-labelledby="timeline-title">
            <h2 id="timeline-title">LE VERNISSAGE IMMERSIF (Vendredi 19 Juin)</h2>
            <div class="timeline-list">
                <article class="timeline-step">
                    <h3>Accueil et Carnets de Voyage</h3>
                    <p>Le galeriste et maitre des lieux, Ueli Affolter, vous ouvre les portes de la galerie pour cette exposition.</p>
                </article>
                <article class="timeline-step">
                    <h3>La Poesie des Couleurs</h3>
                    <p>Experience sensorielle et lecture poetique animee par Sonja Fasel, pour comprendre comment ses oeuvres chantent et respirent.</p>
                </article>
                <article class="timeline-step">
                    <h3>Le Passage vers l'Invisible</h3>
                    <p>La lumiere se tamise. Au son du hochet chamanique, Alison "Rikunali" vous guide dans sa clairiere ephemere sous la lumiere noire, revelant la magie de ses toiles vibratoires.</p>
                </article>
                <article class="timeline-step timeline-closing">
                    <h3>Cloture</h3>
                    <p>Pour cloturer cette presentation et prolonger nos echanges, un aperitif de bienvenue vous sera chaleureusement propose.</p>
                </article>
            </div>
        </section>

        <section class="gallery-section" aria-labelledby="gallery-title">
            <h2 id="gallery-title">La galerie de Grandcour</h2>
            <div class="gallery-container">
                <div class="gallery-content">
                    <p class="gallery-text">Situee a la Rue du Reinz 11 (CH-1543 Grandcour), la Galerie de Grandcour est l'ecrin de cette exposition. Fidele a sa philosophie d'ancrage et de mise en valeur des traces de l'histoire, le maitre des lieux Ueli Affolter vous y accueille pour une experience artistique immersive.</p>
                    <a class="button button-outline" href="https://www.galerie-grandcour.ch/" target="_blank" rel="noopener">Visiter le site de la Galerie</a>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section" aria-labelledby="contact-title">
            <h2 id="contact-title">Contact</h2>
            <p>Pour toute demande de collaboration ou d&apos;information sur l&apos;événement.</p>
            <p>Telephone : <a href="tel:+41788238950">078 823 89 50</a></p>
            <p>Email : <a href="mailto:contact@resonancesduvivant.ch">contact@resonancesduvivant.ch</a></p>
            <p>Site : <a href="https://www.resonancesduvivant.ch" target="_blank" rel="noopener noreferrer">www.resonancesduvivant.ch</a></p>
        </section>
    </main>

    <?php include __DIR__ . "/includes/consent-banner.php"; ?>
    <?php include __DIR__ . "/includes/footer.php"; ?>
    <script src="assets/js/carousel.js" defer></script>
</body>
</html>
