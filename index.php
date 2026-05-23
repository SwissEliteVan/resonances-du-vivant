<!DOCTYPE html>
<html lang="fr">
<?php include __DIR__ . '/includes/head.php'; ?>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>

    <main>
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-content">
                <p class="eyebrow">Exposition immersive</p>
                <h1 id="hero-title">RÉSONANCES DU VIVANT</h1>
                <p class="subtitle">Du monde tangible à l'invisible</p>
                <p class="date">Vernissage Immersif - Vendredi 19 juin 2026</p>
                <a class="btn-cta" href="mailto:contact@resonancesduvivant.ch" aria-label="Noter la date">Noter la date</a>
            </div>
        </section>

        <section id="experience" class="experience" aria-labelledby="experience-title">
            <div class="section-inner">
                <h2 id="experience-title">L'Expérience</h2>
                <p>Une soirée qui commence dans la lumière et se termine dans l'obscurité. Laissez-vous porter par les vibrations, les tracés et les émotions d'une expérience sensorielle inédite sous lumière UV.</p>
            </div>
        </section>

        <section id="artistes" class="artistes" aria-labelledby="artistes-title">
            <div class="section-inner">
                <h2 id="artistes-title">Les Artistes</h2>
                <div class="artist-grid">
                    <article class="artist-card">
                        <img src="assets/images/alain-mouret-portrait-exposition.avif" alt="Portrait de l'artiste Alain Mouret, thème Le Trait" width="600" height="600" loading="lazy">
                        <div>
                            <h3>Alain Mouret</h3>
                            <p>Le Trait</p>
                        </div>
                    </article>
                    <article class="artist-card">
                        <img src="assets/images/sonja-fasel-portrait-exposition.avif" alt="Portrait de l'artiste Sonja Fasel, thème L'Émotion" width="600" height="600" loading="lazy">
                        <div>
                            <h3>Sonja Fasel</h3>
                            <p>L'Émotion</p>
                        </div>
                    </article>
                    <article class="artist-card">
                        <img src="assets/images/alison-rikunali-portrait-exposition.avif" alt="Portrait de l'artiste Alison Rikunali, thème L'Invisible" width="600" height="600" loading="lazy">
                        <div>
                            <h3>Alison Rikunali</h3>
                            <p>L'Invisible</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="contact" class="contact" aria-labelledby="contact-title">
            <div class="section-inner">
                <h2 id="contact-title">Contact</h2>
                <p>Pour toute demande, remplissez le formulaire sécurisé ci-dessous. Nous reprenons contact rapidement.</p>
                <?php include __DIR__ . '/forms/contact-form.php'; ?>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <?php include __DIR__ . '/includes/consent-banner.php'; ?>
</body>
</html>
