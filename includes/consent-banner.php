<?php
/**
 * CONSENT-BANNER.PHP - Banneau de consentement simple pour cookies
 */
?>
<div id="cookie-consent-banner" class="cookie-consent-banner" aria-live="polite">
    <div class="cookie-consent-inner">
        <p>🍪 Ce site utilise des cookies pour améliorer l'expérience et analyser son trafic. En poursuivant votre navigation, vous acceptez notre politique.</p>
        <div class="cookie-actions">
            <button id="cookie-accept" type="button">J'accepte</button>
        </div>
    </div>
</div>
<style>
    .cookie-consent-banner {
        position: fixed;
        inset: auto 0 0;
        width: 100%;
        background: rgba(5, 5, 5, 0.96);
        color: var(--ivory);
        padding: 1rem 1.25rem;
        box-shadow: 0 -12px 45px rgba(0,0,0,0.35);
        z-index: 9999;
        font-size: 0.95rem;
        transform: translateY(0);
        transition: transform 0.3s ease;
    }

    .cookie-consent-banner.hidden {
        transform: translateY(110%);
    }

    .cookie-consent-inner {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }

    .cookie-actions button {
        border: 1px solid var(--ivory);
        background: transparent;
        color: var(--ivory);
        padding: 0.85rem 1.25rem;
        cursor: pointer;
        font: inherit;
        transition: background 0.25s ease, color 0.25s ease;
    }

    .cookie-actions button:hover,
    .cookie-actions button:focus-visible {
        background: var(--ivory);
        color: var(--bg);
    }

    @media (max-width: 640px) {
        .cookie-consent-inner {
            flex-direction: column;
            align-items: stretch;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var banner = document.getElementById('cookie-consent-banner');
        var acceptButton = document.getElementById('cookie-accept');

        if (document.cookie.indexOf('cookie_consent=') !== -1) {
            banner.classList.add('hidden');
            return;
        }

        acceptButton.addEventListener('click', function() {
            document.cookie = 'cookie_consent=true; max-age=' + 60*60*24*365 + '; path=/';
            banner.classList.add('hidden');
        });
    });
</script>
