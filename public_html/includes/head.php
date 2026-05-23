<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include 'meta.php'; ?>
    
    <!-- Préconnexion aux polices Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <style>
        /* Variables CSS et Reset */
        :root {
            --bg-color: #050505;
            --text-or: #d4af37;
            --text-blanc: #f4f4f4;
            --font-titre: 'Playfair Display', serif;
            --font-texte: 'Montserrat', sans-serif;
        }
        body {
            background-color: var(--bg-color);
            color: var(--text-blanc);
            font-family: var(--font-texte);
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1, h2, h3, .serif {
            font-family: var(--font-titre);
            color: var(--text-or);
        }
        /* Section Héros */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at center, #1a1a1a 0%, var(--bg-color) 70%);
            animation: fadeIn 2s ease-in-out;
        }
        .hero h1 { font-size: 3rem; letter-spacing: 2px; margin-bottom: 0.5rem; }
        .hero .subtitle { font-size: 1.2rem; color: var(--text-blanc); margin-bottom: 2rem; }
        .btn-cta {
            display: inline-block;
            margin-top: 2rem;
            padding: 10px 30px;
            border: 1px solid var(--text-or);
            color: var(--text-or);
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .btn-cta:hover { background-color: var(--text-or); color: var(--bg-color); }
        
        /* Layout Grid pour les Artistes */
        .experience { padding: 4rem 2rem; max-width: 800px; margin: auto; line-height: 1.8; }
        .artistes { padding: 4rem 2rem; }
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            max-width: 1000px;
            margin: auto;
        }
        @media (min-width: 768px) {
            .grid { grid-template-columns: repeat(3, 1fr); }
        }
        .artiste-card img {
            width: 100%;
            height: auto;
            aspect-ratio: 1 / 1;
            object-fit: cover;
            background-color: #111; /* Fallback couleur si l'image n'est pas chargée */
        }
        
        /* Animations */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    </style>

    <?php include 'analytics.php'; ?>
</head>