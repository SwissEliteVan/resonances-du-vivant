<?php
/**
 * CONSENT-BANNER.PHP - Bannière de consentement simple
 */
?>
<div id="cookie-consent-banner" class="cookie-consent-banner" aria-live="polite">
    <div class="cookie-consent-inner">
        <p>🍪 Ce site utilise des cookies fonctionnels et analytiques pour améliorer votre expérience. En poursuivant, vous acceptez notre politique.</p>
        <button id="cookie-accept" type="button">J’accepte</button>
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
        backdrop-filter: blur(10px);
        z-index: 9999;
        transition: transform 0.3s ease;
    }
    .cookie-consent-banner.hidden {
        transform: translateY(110%);
    }
    .cookie-consent-inner {
        max-width: var(--max-width);
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .cookie-consent-inner p {
        margin: 0;
        color: var(--ivory);
        font-size: 0.95rem;
    }
    .cookie-consent-inner button {
        border: 1px solid var(--ivory);
        background: transparent;
        color: var(--ivory);
        padding: 0.8rem 1.2rem;
        border-radius: 999px;
        cursor: pointer;
    }
    .cookie-consent-inner button:hover,
    .cookie-consent-inner button:focus-visible {
        background: var(--ivory);
        color: var(--bg);
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var banner = document.getElementById('cookie-consent-banner');
        var accept = document.getElementById('cookie-accept');
        if (document.cookie.indexOf('cookie_consent=') !== -1) {
            banner.classList.add('hidden');
            return;
        }
        accept.addEventListener('click', function() {
            document.cookie = 'cookie_consent=true; max-age=' + 60*60*24*365 + '; path=/';
            banner.classList.add('hidden');
        });
    });
</script>
