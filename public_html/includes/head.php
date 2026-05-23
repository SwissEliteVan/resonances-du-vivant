<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
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
            line-height: 1.8;
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