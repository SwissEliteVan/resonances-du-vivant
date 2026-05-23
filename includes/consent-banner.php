<?php
/**
 * CONSENT-BANNER.PHP - Bannière de consentement Google Analytics
 */
?>
<div id="cookie-consent-banner" class="cookie-consent-banner" aria-live="polite" role="dialog" aria-label="Consentement cookies">
    <div class="cookie-consent-inner">
        <p>Ce site utilise des cookies analytiques uniquement si vous acceptez explicitement. Vous pouvez accepter ou refuser le suivi.</p>
        <div class="cookie-consent-actions">
            <button id="cookie-accept" type="button">Accepter</button>
            <button id="cookie-refuse" type="button">Refuser</button>
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
        backdrop-filter: blur(10px);
        z-index: 9999;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }
    .cookie-consent-banner.hidden {
        transform: translateY(110%);
        opacity: 0;
        pointer-events: none;
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
    .cookie-consent-actions {
        display: flex;
        gap: 0.75rem;
        flex-wrap: wrap;
    }
    .cookie-consent-inner button {
        border: 1px solid var(--ivory);
        background: transparent;
        color: var(--ivory);
        padding: 0.85rem 1.25rem;
        border-radius: 999px;
        cursor: pointer;
        font: inherit;
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
        var acceptButton = document.getElementById('cookie-accept');
        var refuseButton = document.getElementById('cookie-refuse');
        var consent = localStorage.getItem('analytics_consent');

        function hideBanner() {
            banner.classList.add('hidden');
        }

        if (consent === 'granted') {
            hideBanner();
            if (typeof window.initializeAnalyticsConsent === 'function') {
                window.initializeAnalyticsConsent();
            }
            return;
        }

        if (consent === 'denied') {
            hideBanner();
            return;
        }

        acceptButton.addEventListener('click', function() {
            localStorage.setItem('analytics_consent', 'granted');
            if (typeof window.setAnalyticsConsent === 'function') {
                window.setAnalyticsConsent('granted');
            }
            hideBanner();
        });

        refuseButton.addEventListener('click', function() {
            localStorage.setItem('analytics_consent', 'denied');
            if (typeof window.setAnalyticsConsent === 'function') {
                window.setAnalyticsConsent('denied');
            }
            hideBanner();
        });
    });
</script>
