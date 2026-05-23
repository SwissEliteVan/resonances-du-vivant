<?php
// forms/contact-form.php
require_once 'includes/csrf-token.php';

// Récupération des erreurs et des données saisies stockées en session
$errors = $_SESSION['form_errors'] ?? [];
$data = $_SESSION['form_data'] ?? [];

// Nettoyage de la session après récupération
unset($_SESSION['form_errors'], $_SESSION['form_data']);
?>

<!-- Le style CSS devra être intégré dans le head.php -->
<form action="forms/process-contact.php" method="POST" class="contact-form" id="contact">
    
    <!-- Protection CSRF cachée -->
    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

    <?php if (isset($errors['global'])): ?>
        <p style="color: #ff4d4d; border: 1px solid #ff4d4d; padding: 10px;"><?php echo $errors['global']; ?></p>
    <?php endif; ?>

    <div class="form-group">
        <label for="nom">Nom *</label>
        <input type="text" id="nom" name="nom" required value="<?php echo htmlspecialchars($data['nom'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        <?php if (isset($errors['nom'])) echo "<span style='color:#ff4d4d; font-size:0.8rem;'>{$errors['nom']}</span>"; ?>
    </div>

    <div class="form-group">
        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
        <?php if (isset($errors['email'])) echo "<span style='color:#ff4d4d; font-size:0.8rem;'>{$errors['email']}</span>"; ?>
    </div>

    <div class="form-group">
        <label for="telephone">Téléphone (facultatif)</label>
        <input type="tel" id="telephone" name="telephone" value="<?php echo htmlspecialchars($data['telephone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    </div>

    <div class="form-group">
        <label for="sujet">Sujet (facultatif)</label>
        <input type="text" id="sujet" name="sujet" value="<?php echo htmlspecialchars($data['sujet'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
    </div>

    <div class="form-group">
        <label for="message">Message *</label>
        <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($data['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
        <?php if (isset($errors['message'])) echo "<span style='color:#ff4d4d; font-size:0.8rem;'>{$errors['message']}</span>"; ?>
    </div>

    <div class="form-group checkbox-group">
        <label>
            <input type="checkbox" name="consentement" required <?php echo isset($data['consentement']) ? 'checked' : ''; ?>>
            J'accepte que mes données soient traitées pour répondre à ma demande. *
        </label>
        <?php if (isset($errors['consentement'])) echo "<span style='color:#ff4d4d; font-size:0.8rem;'><br>{$errors['consentement']}</span>"; ?>
    </div>

    <button type="submit" class="btn-cta">Envoyer le message</button>
</form>