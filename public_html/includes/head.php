<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#050505">
    <?php include __DIR__ . '/meta.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #050505;
            --gold: #d4af37;
            --ivory: #f4f4f4;
            --grey: #9c9c9c;
            --shadow: 0 35px 90px rgba(0, 0, 0, 0.28);
            --radius: 1.5rem;
            --max-width: 1200px;
            --transition: 0.3s ease;
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
            font-family: 'Montserrat', sans-serif;
            background: radial-gradient(circle at top, rgba(212, 175, 55, 0.08), transparent 20%), var(--bg);
            color: var(--ivory);
            line-height: 1.7;
        }
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at 50% 20%, rgba(244, 244, 244, 0.05), transparent 30%), radial-gradient(circle at 20% 80%, rgba(212, 175, 55, 0.06), transparent 18%);
            pointer-events: none;
        }
        img {
            display: block;
            width: 100%;
            height: auto;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        .site-header {
            width: 100%;
            padding: 1.25rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(5, 5, 5, 0.92);
            backdrop-filter: blur(10px);
        }
        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 0.95rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }
        .brand span {
            display: block;
            font-size: 0.72rem;
            letter-spacing: 0.28em;
            color: var(--grey);
        }
        .site-nav {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        .site-nav a {
            color: var(--ivory);
            font-size: 0.95rem;
            transition: color var(--transition);
        }
        .site-nav a:hover,
        .site-nav a:focus-visible {
            color: var(--gold);
        }
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem 1.5rem;
            position: relative;
        }
        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, rgba(212, 175, 55, 0.12), transparent 35%);
            pointer-events: none;
        }
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 860px;
            width: 100%;
            animation: fadeUp 1s ease both;
        }
        .eyebrow {
            display: inline-flex;
            margin-bottom: 1.4rem;
            letter-spacing: 0.35em;
            text-transform: uppercase;
            font-size: 0.82rem;
            color: var(--grey);
        }
        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 7vw, 5.5rem);
            margin: 0;
            letter-spacing: 0.12em;
            line-height: 0.95;
        }
        .subtitle {
            margin: 1.75rem auto 1rem;
            font-style: italic;
            font-size: clamp(1.1rem, 1.8vw, 1.45rem);
            max-width: 700px;
            color: var(--ivory);
        }
        .date {
            color: var(--grey);
            margin-bottom: 2.2rem;
            font-size: 0.95rem;
        }
        .btn-cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2.2rem;
            border: 2px solid var(--gold);
            border-radius: 999px;
            background: transparent;
            color: var(--gold);
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-weight: 700;
            transition: background var(--transition), color var(--transition), transform var(--transition);
        }
        .btn-cta:hover,
        .btn-cta:focus-visible {
            background: var(--gold);
            color: var(--bg);
            transform: translateY(-3px);
        }
        main {
            width: min(95%, var(--max-width));
            margin: 0 auto;
        }
        .section {
            padding: 4.5rem 0;
        }
        .section-inner {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 1.25rem;
        }
        .section h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.2rem, 3vw, 3.4rem);
            margin: 0 auto 1rem;
            max-width: 14ch;
            text-align: center;
        }
        .section p {
            margin: 0 auto;
            max-width: 780px;
            color: var(--ivory);
            font-size: clamp(1rem, 1.1vw, 1.2rem);
            text-align: center;
        }
        .artist-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.75rem;
            margin-top: 2.5rem;
        }
        .artist-card {
            display: grid;
            gap: 1rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform var(--transition), border-color var(--transition);
        }
        .artist-card:hover {
            transform: translateY(-6px);
            border-color: rgba(212, 175, 55, 0.3);
        }
        .artist-card img {
            width: 100%;
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }
        .artist-card h3 {
            margin: 0;
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
        }
        .artist-card p {
            margin: 0;
            color: var(--grey);
        }
        .form-wrapper {
            margin-top: 2rem;
        }
        .contact-form {
            display: grid;
            gap: 1rem;
            margin-top: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow);
        }
        .form-field {
            display: grid;
            gap: 0.5rem;
        }
        .form-field label {
            font-weight: 600;
            color: var(--ivory);
        }
        .form-field input,
        .form-field textarea {
            width: 100%;
            padding: 0.95rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 0.9rem;
            background: rgba(10, 10, 10, 0.92);
            color: var(--ivory);
            font: inherit;
            resize: vertical;
        }
        .form-field input:focus,
        .form-field textarea:focus {
            outline: none;
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.12);
        }
        .consent-checkbox {
            align-items: flex-start;
        }
        .consent-checkbox label {
            display: inline-flex;
            gap: 0.75rem;
            align-items: center;
            font-weight: 400;
            color: var(--ivory);
        }
        .consent-checkbox input {
            width: 1rem;
            height: 1rem;
        }
        .form-error {
            margin: 0;
            color: #ffb3b3;
            font-size: 0.95rem;
        }
        .form-message {
            color: var(--gold);
            font-weight: 600;
            margin: 0;
        }
        footer {
            padding: 3rem 0 2rem;
            text-align: center;
            color: var(--grey);
            font-size: 0.92rem;
            line-height: 1.8;
        }
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(32px);
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
            .site-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
        @media (max-width: 720px) {
            .artist-grid {
                grid-template-columns: 1fr;
            }
            .hero {
                padding: 3rem 1rem;
            }
            .section {
                padding: 3rem 0;
            }
            .contact-form {
                padding: 1.5rem;
            }
        }
    </style>
    <?php include __DIR__ . '/analytics.php'; ?>
</head>
