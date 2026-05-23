<!DOCTYPE html>
<html lang="fr">
<?php include __DIR__ . '/includes/head.php'; ?>
<body>
    <header class="hero">
        <div class="hero-content">
            <span class="eyebrow">Exposition immersive</span>
            <h1>RÉSONANCES DU VIVANT</h1>
            <p class="subtitle">Du monde tangible à l'invisible</p>
            <p class="date">Vernissage Immersif - Vendredi 19 juin 2026</p>
            <a class="btn-cta" href="mailto:contact@resonancesduvivant.ch" aria-label="Noter la date">Noter la date</a>
        </div>
    </header>

    <main>
        <section class="experience" aria-labelledby="experience-title">
            <h2 id="experience-title">L'Expérience</h2>
            <p>Une soirée qui commence dans la lumière et se termine dans l'obscurité. Laissez-vous porter par les vibrations, les tracés et les émotions d'une expérience sensorielle inédite sous lumière UV.</p>
        </section>

        <section class="artistes" aria-labelledby="artistes-title">
            <h2 id="artistes-title">Les Artistes</h2>
            <div class="grid">
                <article class="artiste-card">
                    <div class="artiste-figure" aria-hidden="true"></div>
                    <h3>Alain Mouret</h3>
                    <p class="theme">Le Trait</p>
                </article>
                <article class="artiste-card">
                    <div class="artiste-figure" aria-hidden="true"></div>
                    <h3>Sonja Fasel</h3>
                    <p class="theme">L'Émotion</p>
                </article>
                <article class="artiste-card">
                    <div class="artiste-figure" aria-hidden="true"></div>
                    <h3>Alison Rikunali</h3>
                    <p class="theme">L'Invisible</p>
                </article>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <?php include __DIR__ . '/includes/consent-banner.php'; ?>
</body>
</html>
