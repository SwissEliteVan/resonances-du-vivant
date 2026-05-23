<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#050505">
    <title>Résonances du Vivant | Exposition immersive d'art contemporain</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #050505;
            --gold: #d4af37;
            --ivory: #f4f4f4;
            --muted: #9c9c9c;
            --radius: 1.25rem;
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
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at top, rgba(212, 175, 55, 0.08), transparent 30%), radial-gradient(circle at bottom right, rgba(244, 244, 244, 0.04), transparent 25%);
            z-index: -1;
        }

        img {
            display: block;
            max-width: 100%;
            border-radius: var(--radius);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        header.site-header {
            width: 100%;
            padding: 1.25rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-family: var(--font-heading);
            letter-spacing: 0.2em;
            font-size: 0.95rem;
            text-transform: uppercase;
        }

        .brand span {
            color: var(--muted);
            font-size: 0.75rem;
            letter-spacing: 0.3em;
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
            animation: reveal 1s ease both;
        }

        .eyebrow {
            display: inline-block;
            margin-bottom: 1.5rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.3em;
            font-size: 0.85rem;
        }

        h1 {
            font-family: var(--font-heading);
            font-size: clamp(3rem, 6vw, 5.25rem);
            line-height: 0.95;
            margin: 0;
            letter-spacing: 0.1em;
        }

        .subtitle {
            margin: 1.5rem auto 1rem;
            font-size: clamp(1.1rem, 1.8vw, 1.4rem);
            max-width: 720px;
            color: var(--ivory);
        }

        .date {
            margin-bottom: 2rem;
            color: var(--muted);
        }

        .btn-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            border-radius: 999px;
            border: 2px solid var(--gold);
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-weight: 700;
            transition: background 0.25s ease, color 0.25s ease, transform 0.25s ease;
        }

        .btn-cta:hover,
        .btn-cta:focus-visible {
            background: var(--gold);
            color: var(--bg);
            transform: translateY(-3px);
        }

        main {
            padding: 2rem 1.5rem 4rem;
        }

        .section-inner {
            max-width: 1200px;
            margin: 0 auto;
        }

        .experience,
        .artistes,
        .contact {
            padding: 4rem 0;
        }

        .experience h2,
        .artistes h2,
        .contact h2 {
            font-size: clamp(2.2rem, 3vw, 3rem);
            margin-bottom: 1rem;
        }

        .experience p,
        .contact p {
            max-width: 780px;
            color: var(--ivory);
            font-size: clamp(1rem, 1.1vw, 1.15rem);
            margin-top: 1rem;
        }

        .artist-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.75rem;
            margin-top: 2rem;
        }

        .artist-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(212, 175, 55, 0.12);
            border-radius: var(--radius);
            overflow: hidden;
            display: grid;
            gap: 1.25rem;
            padding: 1rem;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .artist-card:hover {
            transform: translateY(-5px);
            border-color: rgba(212, 175, 55, 0.3);
        }

        .artist-card div {
            padding: 0 0.5rem 1rem;
        }

        .artist-card h3 {
            margin: 0 0 0.5rem;
            font-size: 1.25rem;
        }

        .artist-card p {
            margin: 0;
            color: var(--muted);
        }

        .contact-card {
            margin-top: 2rem;
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            padding: 1.35rem 1.5rem;
            border: 1px solid rgba(212, 175, 55, 0.18);
            background: rgba(255, 255, 255, 0.03);
            border-radius: var(--radius);
        }

        .contact-card a {
            color: var(--gold);
            border-bottom: 1px solid transparent;
        }

        .contact-card a:hover,
        .contact-card a:focus-visible {
            border-bottom-color: var(--gold);
        }

        footer.site-footer {
            border-top: 1px solid rgba(212, 175, 55, 0.12);
            padding: 2rem 0 3rem;
        }

        .footer-inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1.5rem;
            max-width: 1200px;
            margin: 0 auto;
            color: var(--muted);
        }

        .footer-inner p {
            margin: 0;
        }

        @keyframes reveal {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 980px) {
            .artist-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 720px) {
            header.site-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .artist-grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 3rem 1rem;
            }

            .contact-card {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>
