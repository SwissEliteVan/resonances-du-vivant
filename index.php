<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résonances du Vivant</title>
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
                <h1 id="hero-title">Résonances du Vivant</h1>
                <p class="hero-text">Une expérience artistique contemporaine sous lumière UV, avec des installations sensorielles et une scénographie élégante.</p>
                <a class="button" href="#contact">Contact</a>
            </div>
        </section>

        <section class="grid-section" aria-labelledby="artists-title">
            <h2 id="artists-title">Les artistes</h2>
            <div class="artist-grid">
                <div class="artist-card">
                    <h3>Alain Mouret</h3>
                    <p>Le Trait</p>
                </div>
                <div class="artist-card">
                    <h3>Sonja Fasel</h3>
                    <p>L&apos;Émotion</p>
                </div>
                <div class="artist-card">
                    <h3>Alison Rikunali</h3>
                    <p>L&apos;Invisible</p>
                </div>
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
