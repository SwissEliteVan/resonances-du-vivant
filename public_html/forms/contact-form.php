<?php
/**
 * CONTACT-FORM.PHP - Formulaire de contact
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once __DIR__ . '/../includes/csrf-token.php';

$errors = $_SESSION['contact_errors'] ?? [];
$old = $_SESSION['contact_old'] ?? [];
unset($_SESSION['contact_errors'], $_SESSION['contact_old']);

$csrfToken = csrf_token_get();
?>
<div class="form-wrapper">
    <?php if (!empty($errors['general'])): ?>
        <p class="form-error"><?php echo htmlspecialchars($errors['general']); ?></p>
    <?php endif; ?>
    <form class="contact-form" method="post" action="forms/process-contact.php" novalidate>
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
        <input type="hidden" name="website" value="">

        <div class="form-field">
            <label for="contact-name">Nom *</label>
            <input id="contact-name" type="text" name="name" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" required maxlength="100">
            <?php if (!empty($errors['name'])): ?>
                <p class="form-error"><?php echo htmlspecialchars($errors['name']); ?></p>
            <?php endif; ?>
        </div>

        <div class="form-field">
            <label for="contact-email">E-mail *</label>
            <input id="contact-email" type="email" name="email" value="<?php echo htmlspecialchars($old['email'] ?? ''); ?>" required maxlength="150">
            <?php if (!empty($errors['email'])): ?>
                <p class="form-error"><?php echo htmlspecialchars($errors['email']); ?></p>
            <?php endif; ?>
        </div>

        <div class="form-field">
            <label for="contact-phone">Téléphone</label>
            <input id="contact-phone" type="tel" name="phone" value="<?php echo htmlspecialchars($old['phone'] ?? ''); ?>" maxlength="30">
        </div>

        <div class="form-field">
            <label for="contact-subject">Sujet</label>
            <input id="contact-subject" type="text" name="subject" value="<?php echo htmlspecialchars($old['subject'] ?? ''); ?>" maxlength="120">
        </div>

        <div class="form-field">
            <label for="contact-message">Message *</label>
            <textarea id="contact-message" name="message" rows="6" required maxlength="2000"><?php echo htmlspecialchars($old['message'] ?? ''); ?></textarea>
            <?php if (!empty($errors['message'])): ?>
                <p class="form-error"><?php echo htmlspecialchars($errors['message']); ?></p>
            <?php endif; ?>
        </div>

        <div class="form-field consent-checkbox">
            <label>
                <input type="checkbox" name="accept" value="1" <?php echo !empty($old['accept']) ? 'checked' : ''; ?> required>
                J'accepte que mes informations soient utilisées pour répondre à ma demande.
            </label>
            <?php if (!empty($errors['accept'])): ?>
                <p class="form-error"><?php echo htmlspecialchars($errors['accept']); ?></p>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn-cta">Envoyer</button>
    </form>
</div>
