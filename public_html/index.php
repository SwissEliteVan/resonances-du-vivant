<?php
/**
 * INDEX.PHP - Point d'entrée principal du site
 * Résonances du Vivant - Exposition d'art immersif
 * Galerie de Grandcour, juin-juillet 2026
 */
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>
    <!-- Section Héros -->
    <header class="hero">
        <div class="hero-content">
            <h1>RÉSONANCES DU VIVANT</h1>
            <p class="subtitle"><em>Du monde tangible à l'invisible</em></p>
            <p class="date">Vernissage Immersif - Vendredi 19 juin 2026</p>
            <a href="mailto:contact@resonancesduvivant.ch" class="btn-cta" aria-label="Noter la date de l'exposition">Noter la date</a>
        </div>
    </header>

    <!-- Section L'Expérience -->
    <section class="experience" aria-labelledby="experience-title">
        <h2 id="experience-title" class="sr-only">L'Expérience</h2>
        <p>Une soirée qui commence dans la lumière et se termine dans l'obscurité. Laissez-vous porter par les vibrations, les tracés et les émotions d'une expérience sensorielle inédite sous lumière UV.</p>
    </section>

    <!-- Section Les Artistes -->
    <section class="artistes" aria-labelledby="artistes-title">
        <h2 id="artistes-title" class="sr-only">Les Artistes</h2>
        <div class="grid">
            <article class="artiste-card">
                <img src="assets/images/alain-mouret-portrait-exposition.avif" 
                     alt="Portrait de l'artiste contemporain Alain Mouret, thème Le Trait" 
                     loading="lazy" width="400" height="400">
                <h3>Alain Mouret</h3>
                <p class="theme">Le Trait</p>
            </article>
            <article class="artiste-card">
                <img src="assets/images/sonja-fasel-portrait-exposition.avif" 
                     alt="Portrait de l'artiste contemporaine Sonja Fasel, thème L'Émotion" 
                     loading="lazy" width="400" height="400">
                <h3>Sonja Fasel</h3>
                <p class="theme">L'Émotion</p>
            </article>
            <article class="artiste-card">
                <img src="assets/images/alison-rikunali-portrait-exposition.avif" 
                     alt="Portrait de l'artiste contemporaine Alison Rikunali, thème L'Invisible" 
                     loading="lazy" width="400" height="400">
                <h3>Alison Rikunali</h3>
                <p class="theme">L'Invisible</p>
            </article>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/consent-banner.php'; ?>
</body>
</html>