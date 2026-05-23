<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php include __DIR__ . '/meta.php'; ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #050505;
            --gold: #d4af37;
            --ivory: #f4f4f4;
            --grey: #9b9b9b;
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Montserrat', sans-serif;
        }

        *, *::before, *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--bg);
            color: var(--ivory);
            font-family: var(--font-body);
            line-height: 1.75;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at top, rgba(212, 175, 55, 0.08), transparent 35%), radial-gradient(circle at bottom left, rgba(255, 255, 255, 0.05), transparent 25%);
            pointer-events: none;
            z-index: -1;
        }

        h1, h2, h3 {
            font-family: var(--font-heading);
            color: var(--gold);
            letter-spacing: 0.05em;
            margin: 0;
        }

        h2 {
            font-size: clamp(2rem, 2.5vw, 3rem);
            margin-bottom: 1rem;
        }

        p {
            margin: 0;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem 1.5rem;
            text-align: center;
        }

        .hero-content {
            max-width: 860px;
            width: 100%;
            animation: fadeUp 1s ease both;
        }

        .eyebrow {
            display: inline-flex;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.25em;
            color: var(--grey);
        }

        .subtitle {
            margin: 1.5rem auto 1rem;
            font-size: clamp(1.1rem, 1.8vw, 1.45rem);
            color: var(--ivory);
            max-width: 680px;
        }

        .date {
            margin-bottom: 2.5rem;
            color: var(--grey);
            font-size: 0.95rem;
        }

        .btn-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            border: 2px solid var(--gold);
            background: transparent;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 0.2em;
            text-decoration: none;
            transition: transform 0.25s ease, background-color 0.25s ease, color 0.25s ease;
        }

        .btn-cta:hover,
        .btn-cta:focus-visible {
            background: var(--gold);
            color: var(--bg);
            transform: translateY(-2px);
        }

        main {
            padding: 4rem 1.5rem 6rem;
        }

        .experience,
        .artistes {
            max-width: 1200px;
            margin: 0 auto 4rem;
            animation: fadeUp 0.9s ease both;
        }

        .experience p {
            margin-top: 1rem;
            font-size: clamp(1rem, 1.1vw, 1.2rem);
            max-width: 780px;
            margin-left: auto;
            margin-right: auto;
            color: var(--ivory);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .artiste-card {
            display: grid;
            gap: 1.25rem;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(212, 175, 55, 0.12);
            border-radius: 1.5rem;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .artiste-card:hover {
            transform: translateY(-6px);
            border-color: rgba(212, 175, 55, 0.32);
        }

        .artiste-figure {
            width: 100%;
            aspect-ratio: 1 / 1;
            background: linear-gradient(145deg, rgba(212, 175, 55, 0.15), rgba(244, 244, 244, 0.08));
            border-radius: 1.25rem;
            box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.03);
        }

        .artiste-card h3 {
            font-size: 1.35rem;
        }

        .theme {
            color: var(--grey);
            font-style: italic;
            letter-spacing: 0.02em;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(24px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 3rem 1rem;
            }

            .experience,
            .artistes {
                padding: 3rem 1rem 4rem;
            }

            .btn-cta {
                width: 100%;
                max-width: 320px;
            }
        }
    </style>

    <?php include __DIR__ . '/analytics.php'; ?>
</head>
