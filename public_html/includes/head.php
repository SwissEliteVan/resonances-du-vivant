<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Tags SEO et Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<!-- Cookie Consent Banner -->
<div id="cookie-consent-banner" style="
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(10, 10, 10, 0.95); /* Noir semi-transparent */
    color: var(--color-off-white);
    padding: 15px 20px;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    font-family: var(--font-body);
    font-size: 0.9em;
    border-top: 1px solid var(--color-gold);
">
    <p style="margin: 0;">
        🍪 Ce site utilise des cookies pour améliorer votre expérience et analyser son trafic. En continuant votre navigation, vous acceptez notre utilisation des cookies.
    </p>
    <button id="accept-cookies" 
            style="
                padding: 10px 20px;
                background-color: var(--color-gold);
                color: var(--color-black-deep);
                border: none;
                cursor: pointer;
                font-weight: 700;
                transition: background-color 0.2s;
            ">
        J'accepte
    </button>
</div>
<script>
    // Script simple pour gérer le consentement
    document.addEventListener('DOMContentLoaded', function() {
        const banner = document.getElementById('cookie-consent-banner');
        const acceptButton = document.getElementById('accept-cookies');

        if (!document.cookie.includes('cookie_consent')) {
            banner.style.display = 'flex';
        }

        acceptButton.addEventListener('click', function() {
            // Définit un cookie de consentement pour 1 an
            document.cookie = "cookie_consent=true; max-age=31536000; path=/";
            banner.style.display = 'none';
            // Ici, vous déclencheriez l'envoi du tag analytics si nécessaire
        });
    });
</script>    <!-- FIN DU CONTENU PRINCIPAL -->
    <div class="container" style="text-align: center; padding-bottom: 50px;">
        <hr style="border-color: rgba(212, 175, 55, 0.2); margin: 30px 0;">
        
        <!-- Contact Info -->
        <h2 style="font-size: 1.8em; margin-bottom: 15px;">Intéressé par l'événement ?</h2>
        <p style="font-size: 1.1em; margin-bottom: 30px;">
            Nous serions ravis d'échanger avec vous sur ce projet artistique.
        </p>
        
        <p style="font-size: 1.2em; color: var(--color-gold); margin-bottom: 20px;">
            Contact : <a href="mailto:contact@resonancesduvivant.com?subject=Demande%20Information%20%7C%20Site%20Web" style="color: var(--color-off-white); text-decoration: none; border-bottom: 1px dotted var(--color-gold);">contact@resonancesduvivant.com</a>
        </p>
        
        <!-- Copyright -->
        <p style="font-size: 0.8em; color: #777;">&copy; <?php echo date('Y'); ?> Résonances du Vivant. Tous droits réservés.</p>
    </div>
    
    <!-- Scripts de gestion du contenu et animation -->
    <script>
        // 1. Animation On Scroll (Simple Intersection Observer fallback)
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Arrête d'observer après apparition
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animated-content').forEach(element => {
            observer.observe(element);
        });
    </script>
</body>
</html><?php 
    // Début du site
    include('includes/head.php'); 
    include('includes/meta.php'); 
?>

<?php 
    // --- Contenu de la Page ---
    ?>

    <!-- SECTION HÉROS (100vh) -->
    <header id="hero" style="height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; background-color: #050505; position: relative; overflow: hidden;">
        <!-- Overlay pour améliorer la lisibilité du texte -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);"></div>
        
        <div class="container animated-content" style="z-index: 10;">
            <h1 style="font-size: 4.5em; margin-bottom: 15px; animation-delay: 0.1s;">RÉSONANCES DU VIVANT</h1>
            <p style="font-size: 1.8em; color: #ccc; margin-bottom: 30px; animation-delay: 0.3s;">Du monde tangible à l'invisible</p>
            
            <p style="font-size: 1.2em; color: var(--color-gold); margin-bottom: 40px; animation-delay: 0.5s;">
                📅 Vernissage Immersif - Vendredi 19 juin 2026
            </p>
            
            <a href="mailto:contact@resonancesduvivant.com?subject=Inscription%20au%20vernissage" 
               class="cta-button animated-content" 
               style="animation-delay: 0.7s;">
                💌 Noter la date
            </a>
        </div>
    </header>

    <!-- SECTION L'EXPÉRIENCE -->
    <section id="experience" class="animated-content" style="padding: 100px 0; background-color: #050505;">
        <div class="container">
            <h2 style="margin-bottom: 30px;">L'Expérience</h2>
            <p style="max-width: 800px; margin: 0 auto; text-align: center; font-size: 1.3em; line-height: 1.8; padding: 20px; border-left: 3px solid var(--color-gold); padding-left: 20px;">
                Une soirée qui commence dans la lumière et se termine dans l'obscurité... Une immersion totale dans la matière, la mémoire et le rêve. Venez explorer les limites de la perception avec nous.
            </p>
        </div>
    </section>

    <!-- SECTION LES ARTISTES -->
    <section id="artists" class="animated-content" style="padding: 80px 0; background-color: #080808;">
        <div class="container">
            <h2 style="margin-bottom: 50px;">Les Artistes</h2>
            
            <div id="artists-grid">
                
                <!-- Alain Mouret -->
                <div class="artist-card animated-content" style="animation-delay: 0.2s;">
                    <div class="artist-image-placeholder" style="background-image: url('assets/images/alain_mouret_placeholder.jpg');"></div>
                    <h3 style="color: var(--color-off-white);">Alain Mouret</h3>
                    <p style="font-style: italic; color: #aaa;">Sculptures et installations sonores.</p>
                </div>
                
                <!-- Sonja Fasel -->
                <div class="artist-card animated-content" style="animation-delay: 0.4s;">
                    <div class="artist-image-placeholder" style="background-image: url('assets/images/sonja_fasel_placeholder.jpg');"></div>
                    <h3 style="color: var(--color-off<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta tags will be included by meta.php later, but we keep the structure open -->
    <title>Résonances du Vivant | Exposition d'Art</title>
    
    <!-- Google Fonts Importation -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Style Minimaliste, Luxueux, Mystérieux -->
    <style>
        /* Variables de couleur */
        :root {
            --color-black-deep: #050505;
            --color-gold: #d4af37;
            --color-off-white: #f4f4f4;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
        }

        body {
            background-color: var(--color-black-deep);
            color: var(--color-off-white);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden; /* Prévention du scroll horizontal */
        }

        h1, h2, h3 {
            font-family: var(--font-heading);
            color: var(--color-gold);
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        /* --- Animations CSS --- */
        /* Fade in général pour les éléments de contenu */
        .animated-content {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        /* Classe ajoutée par JavaScript/PHP pour révéler l'élément */
        .animated-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Style du CTA (Call to Action) */
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: transparent;
            color: var(--color-gold);
            border: 2px solid var(--color-gold);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, transform 0.2s;
            margin-top: 20px;
            font-weight: 700;
        }

        .cta-button:hover {
            background-color: var(--color-gold);
            color: var(--color-black-deep);
            transform: scale(1.05);
        }

        /* Grille des artistes (Utilisation de CSS Grid pour flexibilité) */
        #artists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .artist-card {
            text-align: center;
            padding: 20px;
            background-color: #0a0a0a;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .artist-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
        }

        .artist-image-placeholder {
            width: 100%;
            padding-top: 100%; /* Pour maintenir un ratio 1:1 */
            background-color: #1a1a1a;
            background-image: url('assets/images/placeholder.jpg'); /* Placeholder */
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            h1 { font-size: 2.5em; }
            h2 { font-size: 2em; }
            .cta-button { padding: 10px 20px; }
        }
    </style>
</head>
<body class="animated-content visible">
    <!-- Le contenu principal sera inclus ici --><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta tags will be included by meta.php later, but we keep the structure open -->
    <title>Résonances du Vivant | Exposition d'Art</title>
    
    <!-- Google Fonts Importation -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Style Minimaliste, Luxueux, Mystérieux -->
    <style>
        /* Variables de couleur */
        :root {
            --color-black-deep: #050505;
            --color-gold: #d4af37;
            --color-off-white: #f4f4f4;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
        }

        body {
            background-color: var(--color-black-deep);
            color: var(--color-off-white);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden; /* Prévention du scroll horizontal */
        }

        h1, h2, h3 {
            font-family: var(--font-heading);
            color: var(--color-gold);
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        /* --- Animations CSS --- */
        /* Fade in général pour les éléments de contenu */
        .animated-content {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        /* Classe ajoutée par JavaScript/PHP pour révéler l'élément */
        .animated-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Style du CTA (Call to Action) */
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: transparent;
            color: var(--color-gold);
            border: 2px solid var(--color-gold);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, transform 0.2s;
            margin-top: 20px;
            font-weight: 700;
        }

        .cta-button:hover {
            background-color: var(--color-gold);
            color: var(--color-black-deep);
            transform: scale(1.05);
        }

        /* Grille des artistes (Utilisation de CSS Grid pour flexibilité) */
        #artists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .artist-card {
            text-align: center;
            padding: 20px;
            background-color: #0a0a0a;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .artist-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
        }

        .artist-image-placeholder {
            width: 100%;
            padding-top: 100%; /* Pour maintenir un ratio 1:1 */
            background-color: #1a1a1a;
            background-image: url('assets/images/placeholder.jpg'); /* Placeholder */
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            h1 { font-size: 2.5em; }
            h2 { font-size: 2em; }
            .cta-button { padding: 10px 20px; }
        }
    </style>
</head>
<body class="animated-content visible">
    <!-- Le contenu principal sera inclus ici -->Découvrez Résonances du Vivant, une exposition immersive présentant le travail artistique de Alain Mouret, Sonja Fasel et Alison Rikunali. Vernissage le 19 juin 2026.">
    <meta name="keywords" content="Art contemp    <!-- Analytics Script (Google Analytics Placeholder) -->
    <!-- REMPLACER 'YOUR_MEASUREMENT_ID' par votre ID réel -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR_MEASUREMENT_ID"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'YOUR_MEASUREMENT_ID');
    </script>orain, exposition, Résonances du Vivant, Alain Mouret, Sonja Fasel, Alison Rikunali, vernissage, art immersif">
    <meta name="author" content="Événement Résonances du Vivant">
    <meta name="og:title" content="Résonances du Vivant | Exposition d'Art">
    <meta name="og:description" content="Une soirée qui vous emmènera du monde tangible à l'invisible.">
    <meta name="og:type" content="website">
    <meta content="https://votre-site.com/" property="og:url">
    <meta content="https://votre-site.com/" property="og:site_name">
    <?php include 'meta.php'; ?>
    
    <!-- Preconnect aux ressources externes critiques -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- CSS optimisé -->
    <style>
        /* ============ VARIABLES & RESET ============ */
        :root {
            --bg-color: #050505;
            --text-or: #d4af37;
            --text-blanc: #f4f4f4;
            --text-gris: #999;
            --font-titre: 'Playfair Display', serif;
            --font-texte: 'Montserrat', sans-serif;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-blanc);
            font-family: var(--font-texte);
            font-weight: 300;
            line-height: 1.6;
            text-align: center;
            overflow-x: hidden;
        }

        /* Amélioration de l'accessibilité */
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }

        /* ============ TYPOGRAPHIE ============ */
        h1, h2, h3, .serif {
            font-family: var(--font-titre);
            color: var(--text-or);
            font-weight: 700;
            letter-spacing: 1px;
        }

        h1 {
            font-size: clamp(2rem, 8vw, 3.5rem);
            margin-bottom: 0.5rem;
        }

        h2 {
            font-size: clamp(1.5rem, 5vw, 2.5rem);
            margin-bottom: 1rem;
        }

        h3 {
            font-size: 1.5rem;
            margin: 1rem 0 0.5rem;
        }

        p {
            margin: 0.5rem 0;
        }

        /* ============ SECTION HÉROS ============ */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at center, #1a1a1a 0%, var(--bg-color) 70%);
            padding: 2rem;
            animation: fadeIn 2s ease-in-out;
            position: relative;
        }

        .hero-content {
            z-index: 1;
            max-width: 800px;
        }

        .hero .subtitle {
            font-size: clamp(1rem, 3vw, 1.3rem);
            color: var(--text-blanc);
            margin: 1rem 0 2rem;
            font-style: italic;
        }

        .hero .date {
            font-size: 0.95rem;
            color: var(--text-gris);
            margin-bottom: 2rem;
            letter-spacing: 0.5px;
        }

        /* ============ BOUTONS ============ */
        .btn-cta {
            display: inline-block;
            padding: 12px 32px;
            border: 2px solid var(--text-or);
            color: var(--text-or);
            background: transparent;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-family: var(--font-texte);
            font-size: 0.9rem;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
            border-radius: 2px;
        }

        .btn-cta:hover,
        .btn-cta:focus {
            background-color: var(--text-or);
            color: var(--bg-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(212, 175, 55, 0.2);
            outline: none;
        }

        .btn-cta:active {
            transform: translateY(0);
        }

        /* ============ SECTIONS CONTENU ============ */
        .experience {
            padding: clamp(2rem, 5vw, 4rem);
            max-width: 800px;
            margin: 0 auto;
            line-height:     <!-- Meta Tags SEO et Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez Résonances du Vivant, une exposition immersive présentant le travail artistique de Alain Mouret, Sonja Fasel et Alison Rikunali. Vernissage le 19 juin 2026.">
    <meta name="keywords" content="Art contemporain, exposition, Résonances du Vivant, Alain Mouret, Sonja Fasel, Alison Rikunali, vernissage, art immersif">
    <meta name="author" content="Événement Résonances du Vivant">
    <meta name="og:title" content="Résonances du Vivant | Exposition d'Art">
    <meta name="og:description" content="Une soirée qui vous emmènera du monde tangible à l'invisible.">
    <meta name="og:type" content="website">
    <meta content="https://votre-site.com/" property="og:url">
    <meta content="https://votre-site.com/" property="og:site_name"><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Meta tags will be included by meta.php later, but we keep the structure open -->
    <title>Résonances du Vivant | Exposition d'Art</title>
    
    <!-- Google Fonts Importation -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Style Minimaliste, Luxueux, Mystérieux -->
    <style>
        /* Variables de couleur */
        :root {
            --color-black-deep: #050505;
            --color-gold: #d4af37;
            --color-off-white: #f4f4f4;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
        }

        body {
            background-color: var(--color-black-deep);
            color: var(--color-off-white);
            font-family: var(--font-body);
            line-height: 1.6;
            overflow-x: hidden; /* Prévention du scroll horizontal */
        }

        h1, h2, h3 {
            font-family: var(--font-heading);
            color: var(--color-gold);
            text-align: center;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }

        /* --- Animations CSS --- */
        /* Fade in général pour les éléments de contenu */
        .animated-content {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        
        /* Classe ajoutée par JavaScript/PHP pour révéler l'élément */
        .animated-content.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Style du CTA (Call to Action) */
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: transparent;
            color: var(--color-gold);
            border: 2px solid var(--color-gold);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, transform 0.2s;
            margin-top: 20px;
            font-weight: 700;
        }

        .cta-button:hover {
            background-color: var(--color-gold);
            color: var(--color-black-deep);
            transform: scale(1.05);
        }

        /* Grille des artistes (Utilisation de CSS Grid pour flexibilité) */
        #artists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .artist-card {
            text-align: center;
            padding: 20px;
            background-color: #0a0a0a;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .artist-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
        }

        .artist-image-placeholder {
            width: 100%;
            padding-top: 100%; /* Pour maintenir un ratio 1:1 */
            background-color: #1a1a1a;
            background-image: url('assets/images/placeholder.jpg'); /* Placeholder */
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
            border: 1px solid rgba(212, 175, 55, 0.2);
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            h1 { font-size: 2.5em; }
            h2 { font-size: 2em; }
            .cta-button { padding: 10px 20px; }
        }
    </style>
</head>
<body class="animated-content visible">
    <!-- Le contenu principal sera inclus ici -->1.8;
            font-size: clamp(0.95rem, 2vw, 1.1rem);
        }

        .artistes {
            padding: clamp(2rem, 5vw, 4rem) 2rem;
            background: linear-gradient(180deg, transparent, rgba(26, 26, 26, 0.5));
        }

        /* ============ GRILLE ARTISTES ============ */
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        @media (min-width: 768px) {
            .grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 2rem;
            }
        }

        .artiste-card {
            transition: var(--transition);
            animation: slideUp 0.8s ease-out;
        }

        .artiste-card:hover {
            transform: translateY(-8px);
        }

        .artiste-card img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            background-color: #111;
            border: 1px solid var(--text-gris);
            transition: var(--transition);
            margin-bottom: 1rem;
        }

        .artiste-card:hover img {
            border-color: var(--text-or);
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.15);
        }

        .artiste-card .theme {
            color: var(--text-gris);
            font-style: italic;
            font-size: 0.95rem;
            margin-top: 0.5rem;
        }

        /* ============ ANIMATIONS ============ */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ============ RESPONSIVE & ACCESSIBILITÉ ============ */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
            }
        }

        @media (max-width: 480px) {
            .hero {
                min-height: auto;
                padding: 2rem 1rem;
            }

            .btn-cta {
                padding: 10px 24px;
                font-size: 0.85rem;
            }

            .artiste-card h3 {
                font-size: 1.2rem;
            }
        }

        @media (prefers-color-scheme: light) {
            :root {
                --bg-color: #f9f9f9;
                --text-blanc: #1a1a1a;
                --text-gris: #666;
            }
            
            .hero {
                background: radial-gradient(circle at center, #e8e8e8 0%, var(--bg-color) 70%);
            }
            
            .artistes {
                background: linear-gradient(180deg, transparent, rgba(200, 200, 200, 0.2));
            }
        }
    </style>

    <?php include 'analytics.php'; ?>
</head>