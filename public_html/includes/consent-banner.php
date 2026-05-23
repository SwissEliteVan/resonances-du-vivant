<?php
/**
 * CONSENT-BANNER.PHP - Banneau de consentement cookies RGPD/LPD
 * Gère l'acceptation/refus des cookies et du suivi analytique
 */
?>
<!-- Banneau de consentement cookies -->
<div id="consent-banner" class="consent-banner" role="dialog" aria-label="Consentement cookies" aria-hidden="true">
    <div class="consent-container">
        <div class="consent-content">
            <h2>Respect de votre vie privée</h2>
            <p>Ce site utilise Google Analytics pour analyser l'audience et améliorer votre expérience utilisateur. Nous respectons votre confidentialité selon la LPD suisse.</p>
            
            <details class="consent-details">
                <summary>En savoir plus sur les cookies</summary>
                <div class="consent-details-content">
                    <ul>
                        <li><strong>Cookies analytiques :</strong> Nous aident à comprendre comment vous utilisez le site</li>
                        <li><strong>Cookies de session :</strong> Nécessaires au fonctionnement du site</li>
                        <li><strong>Cookies tiers :</strong> Google Analytics pour l'analyse d'audience</li>
                    </ul>
                    <p>Vous pouvez modifier vos préférences ultérieurement en bas de page.</p>
                </div>
            </details>
        </div>

        <div class="consent-buttons">
            <button id="consent-accept" class="btn-consent btn-accept" aria-label="Accepter tous les cookies">
                Accepter
            </button>
            <button id="consent-decline" class="btn-consent btn-decline" aria-label="Refuser les cookies optionnels">
                Refuser
            </button>
            <button id="consent-settings" class="btn-consent btn-settings" aria-label="Personnaliser les paramètres de cookies">
                Paramètres
            </button>
        </div>
    </div>
</div>

<!-- Modal des paramètres de consentement -->
<div id="consent-modal" class="consent-modal" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
    <div class="consent-modal-content">
        <h2 id="modal-title">Préférences de cookies</h2>
        <button id="close-modal" class="close-modal" aria-label="Fermer">×</button>

        <div class="consent-toggle">
            <label>
                <input type="checkbox" id="toggle-necessary" disabled checked>
                <span class="toggle-label">
                    <strong>Cookies Nécessaires</strong> (obligatoires)
                </span>
            </label>
            <p class="toggle-description">Indispensables pour le fonctionnement du site</p>
        </div>

        <div class="consent-toggle">
            <label>
                <input type="checkbox" id="toggle-analytics">
                <span class="toggle-label">
                    <strong>Cookies Analytiques</strong>
                </span>
            </label>
            <p class="toggle-description">Permettent d'analyser l'utilisation du site pour l'améliorer</p>
        </div>

        <div class="consent-toggle">
            <label>
                <input type="checkbox" id="toggle-marketing">
                <span class="toggle-label">
                    <strong>Cookies Marketing</strong>
                </span>
            </label>
            <p class="toggle-description">Utilisés pour la publicité ciblée et le suivi des conversions</p>
        </div>

        <div class="modal-buttons">
            <button id="save-preferences" class="btn-consent btn-accept">
                Enregistrer les préférences
            </button>
        </div>

        <p class="modal-footer">Vous pouvez modifier ces paramètres à tout moment en contactant <a href="mailto:contact@resonancesduvivant.ch">contact@resonancesduvivant.ch</a></p>
    </div>
</div>

<style>
    /* ============ BANNEAU DE CONSENTEMENT ============ */
    .consent-banner {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        background: rgba(5, 5, 5, 0.98);
        color: var(--text-blanc);
        padding: 1.5rem;
        border-top: 2px solid var(--text-or);
        z-index: 9998;
        backdrop-filter: blur(10px);
        box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.5);
    }

    .consent-banner[aria-hidden="true"] {
        display: none;
    }

    .consent-container {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 2rem;
    }

    .consent-content {
        flex: 1;
    }

    .consent-banner h2 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
    }

    .consent-banner p {
        font-size: 0.9rem;
        color: var(--text-gris);
        line-height: 1.5;
    }

    .consent-details {
        margin-top: 0.5rem;
        cursor: pointer;
    }

    .consent-details summary {
        color: var(--text-or);
        text-decoration: underline;
        font-size: 0.85rem;
    }

    .consent-details-content {
        margin-top: 0.5rem;
        padding: 0.5rem 0 0 1rem;
        border-left: 2px solid var(--text-or);
        font-size: 0.85rem;
    }

    .consent-details-content ul {
        list-style: none;
        margin: 0.5rem 0;
    }

    .consent-details-content li {
        margin: 0.25rem 0;
    }

    .consent-buttons {
        display: flex;
        gap: 0.75rem;
        white-space: nowrap;
    }

    /* ============ BOUTONS DE CONSENTEMENT ============ */
    .btn-consent {
        padding: 8px 16px;
        border-radius: 3px;
        font-family: var(--font-texte);
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-accept {
        background: var(--text-or);
        color: var(--bg-color);
    }

    .btn-accept:hover {
        background: #e8c547;
        transform: translateY(-2px);
    }

    .btn-decline {
        background: transparent;
        color: var(--text-or);
        border: 1px solid var(--text-or);
    }

    .btn-decline:hover {
        background: rgba(212, 175, 55, 0.1);
    }

    .btn-settings {
        background: transparent;
        color: var(--text-blanc);
        border: 1px solid var(--text-blanc);
    }

    .btn-settings:hover {
        background: rgba(244, 244, 244, 0.1);
    }

    /* ============ MODAL DE PARAMÈTRES ============ */
    .consent-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        backdrop-filter: blur(5px);
    }

    .consent-modal[aria-hidden="true"] {
        display: none;
    }

    .consent-modal-content {
        background: var(--bg-color);
        border: 2px solid var(--text-or);
        border-radius: 4px;
        padding: 2rem;
        max-width: 500px;
        width: 90%;
        position: relative;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.8);
    }

    .consent-modal h2 {
        margin-bottom: 1.5rem;
    }

    .close-modal {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: none;
        border: none;
        color: var(--text-or);
        font-size: 2rem;
        cursor: pointer;
        padding: 0;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .close-modal:hover {
        color: var(--text-blanc);
    }

    /* ============ TOGGLES DE COOKIES ============ */
    .consent-toggle {
        margin-bottom: 1.5rem;
        padding: 1rem;
        background: rgba(26, 26, 26, 0.5);
        border-radius: 3px;
        border-left: 3px solid var(--text-gris);
    }

    .consent-toggle label {
        display: flex;
        align-items: center;
        cursor: pointer;
        gap: 0.75rem;
        margin-bottom: 0.5rem;
    }

    .consent-toggle input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: var(--text-or);
    }

    .consent-toggle input[type="checkbox"]:disabled {
        cursor: not-allowed;
        opacity: 0.6;
    }

    .toggle-label {
        flex: 1;
    }

    .toggle-description {
        font-size: 0.8rem;
        color: var(--text-gris);
        margin: 0.25rem 0 0 2.25rem;
    }

    .modal-buttons {
        display: flex;
        gap: 1rem;
        margin: 2rem 0 1rem;
    }

    .modal-buttons .btn-consent {
        flex: 1;
    }

    .modal-footer {
        font-size: 0.75rem;
        color: var(--text-gris);
        text-align: center;
    }

    .modal-footer a {
        color: var(--text-or);
        text-decoration: none;
    }

    /* ============ RESPONSIVE ============ */
    @media (max-width: 768px) {
        .consent-container {
            flex-direction: column;
            align-items: stretch;
        }

        .consent-buttons {
            flex-direction: column;
        }

        .btn-consent {
            width: 100%;
        }

        .consent-modal-content {
            padding: 1.5rem;
        }
    }
</style>

<script>
    // Gestion du consentement des cookies
    (function() {
        const CONSENT_KEY = 'consent_preferences';
        const CONSENT_EXPIRY = 365 * 24 * 60 * 60 * 1000; // 1 an

        const elements = {
            banner: document.getElementById('consent-banner'),
            modal: document.getElementById('consent-modal'),
            acceptBtn: document.getElementById('consent-accept'),
            declineBtn: document.getElementById('consent-decline'),
            settingsBtn: document.getElementById('consent-settings'),
            closeModalBtn: document.getElementById('close-modal'),
            savePrefsBtn: document.getElementById('save-preferences'),
            toggleAnalytics: document.getElementById('toggle-analytics'),
            toggleMarketing: document.getElementById('toggle-marketing')
        };

        // Initialisation
        function init() {
            const saved = localStorage.getItem(CONSENT_KEY);
            
            if (!saved) {
                showBanner();
            } else {
                applyConsent(JSON.parse(saved));
            }

            attachEventListeners();
        }

        // Afficher la banneau
        function showBanner() {
            elements.banner.setAttribute('aria-hidden', 'false');
        }

        // Masquer la banneau
        function hideBanner() {
            elements.banner.setAttribute('aria-hidden', 'true');
        }

        // Afficher la modal
        function showModal() {
            elements.modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        // Masquer la modal
        function hideModal() {
            elements.modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        // Sauvegarder les préférences
        function saveConsent(preferences) {
            const data = {
                timestamp: Date.now(),
                preferences: preferences
            };
            localStorage.setItem(CONSENT_KEY, JSON.stringify(data));
            applyConsent(preferences);
            hideBanner();
            hideModal();
        }

        // Appliquer le consentement
        function applyConsent(preferences) {
            if (!preferences) return;

            if (preferences.analytics) {
                enableAnalytics();
            } else {
                denyAnalytics();
            }

            if (preferences.marketing) {
                enableMarketing();
            }
        }

        // Activer Analytics
        function enableAnalytics() {
            if (typeof gtag === 'function') {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted'
                });
            }
        }

        // Refuser Analytics
        function denyAnalytics() {
            if (typeof gtag === 'function') {
                gtag('consent', 'update', {
                    'analytics_storage': 'denied'
                });
            }
        }

        // Marketing
        function enableMarketing() {
            if (typeof gtag === 'function') {
                gtag('consent', 'update', {
                    'ad_storage': 'granted',
                    'ad_user_data': 'granted',
                    'ad_personalization': 'granted'
                });
            }
        }

        // Attacher les événements
        function attachEventListeners() {
            elements.acceptBtn?.addEventListener('click', () => {
                saveConsent({
                    analytics: true,
                    marketing: true
                });
            });

            elements.declineBtn?.addEventListener('click', () => {
                saveConsent({
                    analytics: false,
                    marketing: false
                });
            });

            elements.settingsBtn?.addEventListener('click', showModal);
            elements.closeModalBtn?.addEventListener('click', hideModal);

            elements.savePrefsBtn?.addEventListener('click', () => {
                const preferences = {
                    analytics: elements.toggleAnalytics?.checked || false,
                    marketing: elements.toggleMarketing?.checked || false
                };
                saveConsent(preferences);
            });

            // Fermer la modal en cliquant en dehors
            elements.modal?.addEventListener('click', (e) => {
                if (e.target === elements.modal) {
                    hideModal();
                }
            });

            // Touche Escape pour fermer la modal
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && elements.modal?.getAttribute('aria-hidden') === 'false') {
                    hideModal();
                }
            });
        }

        // Initialiser au chargement DOM
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }
    })();
</script>
