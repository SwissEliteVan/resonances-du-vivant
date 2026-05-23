<?php
// Point d'entrée principal du site
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>
    <!-- Section Héros -->
    <section class="hero">
        <div class="hero-content">
            <h1>RÉSONANCES DU VIVANT</h1>
            <p class="subtitle"><em>Du monde tangible à l'invisible</em></p>
            <p class="date">Vernissage Immersif - Vendredi 19 juin 2026</p>
            <a href="mailto:contact@resonancesduvivant.ch" class="btn-cta">Noter la date</a>
        </div>
    </section>

    <!-- Section L'Expérience -->
    <section class="experience">
        <p>Une soirée qui commence dans la lumière et se termine dans l'obscurité. Laissez-vous porter par les vibrations, les tracés et les émotions d'une expérience sensorielle inédite sous lumière UV.</p>
    </section>

    <!-- Section Les Artistes -->
    <section class="artistes">
        <div class="grid">
            <div class="artiste-card">
                <img src="assets/images/alain-mouret-portrait-exposition.avif" alt="Portrait de l'artiste contemporain Alain Mouret, thème Le Trait" loading="lazy" width="400" height="400">
                <h2>Alain Mouret</h2>
                <p>Le Trait</p>
            </div>
            <div class="artiste-card">
                <img src="assets/images/sonja-fasel-portrait-exposition.avif" alt="Portrait de l'artiste contemporaine Sonja Fasel, thème L'Émotion" loading="lazy" width="400" height="400">
                <h2>Sonja Fasel</h2>
                <p>L'Émotion</p>
            </div>
            <div class="artiste-card">
                <img src="assets/images/alison-rikunali-portrait-exposition.avif" alt="Portrait de l'artiste contemporaine Alison Rikunali, thème L'Invisible" loading="lazy" width="400" height="400">
                <h2>Alison Rikunali</h2>
                <p>L'Invisible</p>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/consent-banner.php'; ?>
</body>
</html>