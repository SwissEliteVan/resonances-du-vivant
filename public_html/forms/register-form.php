<?php
include __DIR__ . '/../includes/csrf-token.php';
$csrfToken = csrf_token_generate();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include __DIR__ . '/../includes/head.php'; ?>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>
        <section class="section" aria-labelledby="register-title">
            <div class="section-inner">
                <h1 id="register-title">Inscription au vernissage immersif</h1>
                <p class="subtitle">Réservez votre présence pour le vernissage du 19 juin 2026 à la Galerie de Grandcour.</p>
                <form class="form-card" action="process-register.php" method="post" novalidate>
                    <div class="form-group">
                        <label for="full_name">Nom complet</label>
                        <input id="full_name" name="full_name" type="text" required autocomplete="name" placeholder="Votre nom complet" />
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse e-mail</label>
                        <input id="email" name="email" type="email" required autocomplete="email" placeholder="votre@email.com" />
                    </div>
                    <div class="form-group">
                        <label for="attendees">Nombre de personnes attendues</label>
                        <input id="attendees" name="attendees" type="number" min="1" required placeholder="1" />
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8'); ?>" />
                    <div class="form-actions">
                        <button class="btn-cta" type="submit">Envoyer l’inscription</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
    <style>
        .form-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1.5rem;
            padding: 2rem;
            max-width: 680px;
            margin: 2rem auto 0;
            box-shadow: 0 35px 90px rgba(0, 0, 0, 0.22);
        }
        .form-group {
            display: grid;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }
        .form-group label {
            font-weight: 600;
            color: var(--gold);
        }
        .form-group input {
            width: 100%;
            border: 1px solid rgba(244, 244, 244, 0.18);
            border-radius: 0.9rem;
            padding: 1rem 1.15rem;
            background: rgba(255, 255, 255, 0.04);
            color: var(--ivory);
            font: inherit;
        }
        .form-group input:focus {
            outline: 2px solid rgba(212, 175, 55, 0.5);
            outline-offset: 2px;
        }
        .form-actions {
            display: flex;
            justify-content: flex-start;
        }
        .form-card p {
            margin: 0 0 1rem;
        }
    </style>
</body>
</html>
