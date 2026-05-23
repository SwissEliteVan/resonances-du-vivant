<?php
/**
 * FORM-CONFIG.PHP - Configuration mail pour le formulaire
 */

const CONTACT_RECIPIENT = 'contact@resonancesduvivant.ch';
const CONTACT_FROM_EMAIL = 'no-reply@resonancesduvivant.ch';
const CONTACT_FROM_NAME = 'Résonances du Vivant';
const CONTACT_SUBJECT_PREFIX = '[Contact site] ';

// Remplacez mail() par une fonction tierce si l'envoi natif n'est pas fiable sur Hostinger.
function contact_send_mail(string $recipient, string $subject, string $body, array $headers): bool
{
    return mail($recipient, $subject, $body, implode("\r\n", $headers));
}
