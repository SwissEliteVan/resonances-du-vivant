<?php
/**
 * CSRF-TOKEN.PHP - Gestion de jetons CSRF simples
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function csrf_token_generate(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_token_get(): string
{
    return $_SESSION['csrf_token'] ?? csrf_token_generate();
}

function csrf_token_validate(string $token): bool
{
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    $valid = hash_equals($_SESSION['csrf_token'], $token);
    if ($valid) {
        unset($_SESSION['csrf_token']);
    }
    return $valid;
}
