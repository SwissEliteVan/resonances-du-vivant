<?php
include __DIR__ . '/../includes/csrf-token.php';
include __DIR__ . '/../includes/form-config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Méthode non autorisée.');
}

$csrfToken = $_POST['csrf_token'] ?? '';
if (!csrf_token_validate($csrfToken)) {
    http_response_code(400);
    exit('Jeton CSRF invalide.');
}

$fullName = trim((string) ($_POST['full_name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$attendees = trim((string) ($_POST['attendees'] ?? ''));

$fullName = strip_tags($fullName);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$attendees = filter_var($attendees, FILTER_SANITIZE_NUMBER_INT);

$errors = [];
if ($fullName === '') {
    $errors[] = 'Le nom complet est requis.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'L’adresse e-mail est invalide.';
}
if ($attendees === '' || filter_var($attendees, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) === false) {
    $errors[] = 'Le nombre de personnes attendues doit être un entier positif.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo implode('<br>', array_map('htmlspecialchars', $errors, array_fill(0, count($errors), ENT_QUOTES)));
    exit;
}

$subject = 'Inscription vernissage immersif';
$message = "Nouvelle inscription au vernissage immersif\n\n";
$message .= "Nom complet : {$fullName}\n";
$message .= "Adresse e-mail : {$email}\n";
$message .= "Nombre de personnes attendues : {$attendees}\n\n";
$message .= "Événement : Vernissage Immersif - Resonances du Vivant\n";
$message .= "Date : 19 juin 2026, 17h00 - 23h00\n";
$message .= "Lieu : Galerie de Grandcour, Rue du Reinz 11, 1543 Grandcour\n";

$headers = [
    'From: ' . CONTACT_FROM_NAME . ' <' . CONTACT_FROM_EMAIL . '>',
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
];

$sent = contact_send_mail(CONTACT_RECIPIENT, $subject, $message, $headers);
if (!$sent) {
    http_response_code(500);
    exit('Impossible d’envoyer l’e-mail. Veuillez réessayer plus tard.');
}

header('Location: thank-you.php');
exit;
