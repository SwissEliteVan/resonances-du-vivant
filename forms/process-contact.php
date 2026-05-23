<?php
// forms/process-contact.php
session_start();

require_once '../includes/form-config.php';
require_once '../includes/csrf-token.php';

// Redirection si l'accès n'est pas en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../index.php");
    exit;
}

$errors = [];

// 1. Vérification du Jeton CSRF
if (!isset($_POST['csrf_token']) || !verify_csrf_token($_POST['csrf_token'])) {
    $errors['global'] = "Erreur de sécurité (CSRF). Veuillez rafraîchir la page et réessayer.";
}

// 2. Récupération et nettoyage des données (Sanitization)
$nom = trim(filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$telephone = trim(filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$sujet = trim(filter_input(INPUT_POST, 'sujet', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$consentement = isset($_POST['consentement']);

// 3. Validation
if (empty($nom)) {
    $errors['nom'] = "Le nom est obligatoire.";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Une adresse e-mail valide est requise.";
}
if (empty($message)) {
    $errors['message'] = "Le message ne peut pas être vide.";
}
if (!$consentement) {
    $errors['consentement'] = "Vous devez accepter le traitement de vos données.";
}

// 4. Traitement final
if (empty($errors)) {
    // Préparation de l'e-mail pour le serveur Hostinger
    $to = CONTACT_EMAIL;
    $mail_subject = CONTACT_SUBJECT_PREFIX . ($sujet ? $sujet : 'Nouveau message');
    
    $body = "Nouveau message depuis le site Résonances du Vivant :\n\n";
    $body .= "Nom : $nom\n";
    $body .= "E-mail : $email\n";
    $body .= "Téléphone : $telephone\n";
    $body .= "Sujet : $sujet\n\n";
    $body .= "Message :\n$message\n";

    $headers = "From: " . CONTACT_EMAIL . "\r\n"; // Il est préférable d'envoyer depuis le même domaine sur Hostinger pour éviter les spams
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi natif PHP
    if (mail($to, $mail_subject, $body, $headers)) {
        // Succès : on vide les jetons et redirige vers la page de remerciement
        unset($_SESSION['csrf_token']);
        header("Location: thank-you.php");
        exit;
    } else {
        $errors['global'] = "Une erreur serveur est survenue lors de l'envoi de l'e-mail. Veuillez réessayer plus tard.";
    }
}

// 5. Gestion de l'échec : on renvoie les erreurs et les données en session
$_SESSION['form_errors'] = $errors;
$_SESSION['form_data'] = $_POST;
header("Location: ../index.php#contact");
exit;
?>