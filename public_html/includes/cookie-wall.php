<?php
/**
 * COOKIE-WALL.PHP - Strict, Unbypassable Cookie Wall Overlay
 * Completely blocks page access until user accepts cookies
 */
?>
<div id="cookie-wall" class="cookie-wall" aria-modal="true" role="dialog" aria-label="Cookie Acceptance Wall">
    <div class="cookie-wall-overlay"></div>
    <div class="cookie-wall-content">
        <div class="cookie-wall-inner">
            <h2>Politique de Confidentialité & Cookies</h2>
            <p>Ce site utilise des cookies analytiques pour améliorer votre expérience. En continuant à naviguer, vous acceptez notre politique de confidentialité et l'utilisation de cookies analytiques.</p>
            <p class="cookie-wall-legal">Votre consentement nous permet d'analyser l'usage du site et d'optimiser votre expérience utilisateur de manière anonyme et sécurisée.</p>
            <button id="cookie-wall-accept" type="button" class="button-gold">J'accepte</button>
        </div>
    </div>
</div>

<style>
    /* Cookie Wall Overlay - Absolute Blocker */
    .cookie-wall {
        position: fixed;
        inset: 0;
        z-index: 999999;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
        opacity: 1;
        transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .cookie-wall.hidden {
        opacity: 0;
        pointer-events: none;
    }

    .cookie-wall-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.85);
        z-index: -1;
    }

    .cookie-wall-content {
        position: relative;
        z-index: 1;
        max-width: 600px;
        width: min(90vw, 600px);
        animation: slideUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cookie-wall-inner {
        padding: 3rem 2.5rem;
        text-align: center;
        background: linear-gradient(135deg, rgba(20, 20, 20, 0.95), rgba(30, 30, 30, 0.95));
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-radius: 8px;
        backdrop-filter: blur(20px);
    }

    .cookie-wall-inner h2 {
        margin: 0 0 1.5rem;
        font-family: "Playfair Display", serif;
        font-size: clamp(1.8rem, 4vw, 2.5rem);
        letter-spacing: 0.08em;
        color: #f4f4f4;
        font-weight: 600;
    }

    .cookie-wall-inner p {
        margin: 0 0 1rem;
        font-size: 1rem;
        line-height: 1.6;
        color: #f4f4f4;
    }

    .cookie-wall-legal {
        font-size: 0.9rem;
        color: rgba(244, 244, 244, 0.75);
        margin-bottom: 2rem !important;
    }

    .button-gold {
        display: inline-block;
        background: #d4af37;
        color: #050505;
        padding: 0.95rem 2.5rem;
        border: none;
        border-radius: 4px;
        font-family: "Montserrat", sans-serif;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 8px 24px rgba(212, 175, 55, 0.25);
    }

    .button-gold:hover,
    .button-gold:focus-visible {
        background: #e8c547;
        box-shadow: 0 12px 32px rgba(212, 175, 55, 0.4);
        transform: translateY(-2px);
    }

    .button-gold:active {
        transform: translateY(0);
    }

    /* Body overflow hidden when wall is active */
    body.cookie-wall-active {
        overflow: hidden;
    }
</style>

<script>
    (function() {
        'use strict';

        // Empty analytics function - will be called on acceptance
        window.initAnalytics = function() {
            // Placeholder for analytics initialization
            console.log('Analytics initialized');
        };

        function setupCookieWall() {
            var wall = document.getElementById('cookie-wall');
            var acceptButton = document.getElementById('cookie-wall-accept');
            var userConsent = localStorage.getItem('cookie_wall_accepted');

            // If already accepted, hide the wall immediately
            if (userConsent === 'true') {
                wall.classList.add('hidden');
                document.body.classList.remove('cookie-wall-active');
                window.initAnalytics();
                return;
            }

            // Wall is visible - lock scrolling
            document.body.classList.add('cookie-wall-active');

            // Accept button handler
            acceptButton.addEventListener('click', function() {
                // Store acceptance in localStorage with timestamp
                localStorage.setItem('cookie_wall_accepted', 'true');
                localStorage.setItem('cookie_wall_accepted_date', new Date().toISOString());

                // Save cookie as well for server-side detection
                document.cookie = 'cookie_wall_accepted=true; path=/; max-age=' + (365 * 24 * 60 * 60) + '; SameSite=Lax';

                // Hide the wall with smooth transition
                wall.classList.add('hidden');

                // Unlock scrolling
                document.body.classList.remove('cookie-wall-active');

                // Call analytics initialization
                if (typeof window.initAnalytics === 'function') {
                    window.initAnalytics();
                }
            });
        }

        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupCookieWall);
        } else {
            setupCookieWall();
        }
    })();
</script>
