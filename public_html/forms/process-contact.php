<?php
/**
 * PROCESS-CONTACT.PHP - Traitement du formulaire de contact sécurisé
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require_once __DIR__ . '/../includes/form-config.php';
require_once __DIR__ . '/../includes/csrf-token.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php#contact');
    exit;
}

$honeypot = trim($_POST['website'] ?? '');
if ($honeypot !== '') {
    header('Location: ../index.php#contact');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? 'Contact site');
$message = trim($_POST['message'] ?? '');
$accept = isset($_POST['accept']) ? 1 : 0;
$token = $_POST['csrf_token'] ?? '';

$errors = [];

if (!csrf_token_validate($token)) {
    $errors['general'] = 'Votre session a expiré. Veuillez rafraîchir la page et réessayer.';
}

if ($name === '') {
    $errors['name'] = 'Le nom est requis.';
} elseif (mb_strlen($name) > 100) {
    $errors['name'] = 'Le nom est trop long.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Veuillez saisir une adresse e-mail valide.';
} elseif (mb_strlen($email) > 150) {
    $errors['email'] = 'L’adresse e-mail est trop longue.';
}

if ($message === '') {
    $errors['message'] = 'Le message est requis.';
} elseif (mb_strlen($message) < 10) {
    $errors['message'] = 'Le message doit contenir au moins 10 caractères.';
} elseif (mb_strlen($message) > 2000) {
    $errors['message'] = 'Le message est trop long.';
}

if (!$accept) {
    $errors['accept'] = 'Vous devez accepter le traitement des données pour envoyer le message.';
}

$_SESSION['contact_old'] = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'subject' => $subject,
    'message' => $message,
    'accept' => $accept,
];

if (!empty($errors)) {
    $_SESSION['contact_errors'] = $errors;
    header('Location: ../index.php#contact');
    exit;
}

$cleanName = strip_tags($name);
$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$cleanPhone = strip_tags($phone);
$cleanSubject = strip_tags($subject);
$cleanMessage = strip_tags($message);

$recipient = CONTACT_RECIPIENT;
$mailSubject = CONTACT_SUBJECT_PREFIX . $cleanSubject;
$mailBody = "Nouveau message depuis le site Résonances du Vivant\r\n\r\n";
$mailBody .= "Nom : {$cleanName}\r\n";
$mailBody .= "E-mail : {$cleanEmail}\r\n";
if ($cleanPhone !== '') {
    $mailBody .= "Téléphone : {$cleanPhone}\r\n";
}
$mailBody .= "Sujet : {$cleanSubject}\r\n\r\n";
$mailBody .= "Message :\r\n{$cleanMessage}\r\n";

$headers = [
    'From: ' . CONTACT_FROM_NAME . ' <' . CONTACT_FROM_EMAIL . '>',
    'Reply-To: ' . $cleanName . ' <' . $cleanEmail . '>',
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8'
];

$mailSent = contact_send_mail($recipient, $mailSubject, $mailBody, $headers);

if (!$mailSent) {
    $_SESSION['contact_errors'] = ['general' => 'Impossible d’envoyer votre message pour le moment. Veuillez réessayer plus tard.'];
    header('Location: ../index.php#contact');
    exit;
}

unset($_SESSION['contact_old']);
header('Location: thank-you.php');
exit;
