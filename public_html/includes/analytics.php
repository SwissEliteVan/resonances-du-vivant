<div id="cookie-banner" style="position: fixed; bottom: 0; width: 100%; background: #1a1a1a; color: #f4f4f4; padding: 15px; text-align: center; z-index: 1000; border-top: 1px solid #d4af37; display: none;">
    <p style="margin: 0 0 10px; font-family: 'Montserrat', sans-serif; font-size: 0.9rem;">
        Ce site utilise des cookies pour analyser l'audience et améliorer votre expérience. Acceptez-vous leur utilisation ?
    </p>
    <button id="btn-accept" style="background: #d4af37; color: #050505; border: none; padding: 8px 15px; cursor: pointer; margin-right: 10px; font-family: 'Montserrat', sans-serif; font-weight: bold; text-transform: uppercase;">Accepter</button>
    <button id="btn-decline" style="background: transparent; color: #d4af37; border: 1px solid #d4af37; padding: 8px 15px; cursor: pointer; font-family: 'Montserrat', sans-serif; text-transform: uppercase;">Refuser</button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var banner = document.getElementById('cookie-banner');
        
        // Affiche la bannière si aucun choix n'a été fait
        if (!localStorage.getItem('cookie_consent')) {
            banner.style.display = 'block';
        }

        document.getElementById('btn-accept').addEventListener('click', function() {
            localStorage.setItem('cookie_consent', 'granted');
            banner.style.display = 'none';
            // Mise à jour du consentement GA4
            if(typeof gtag === 'function') {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted'
                });
            }
        });

        document.getElementById('btn-decline').addEventListener('click', function() {
            localStorage.setItem('cookie_consent', 'denied');
            banner.style.display = 'none';
        });
    });
</script>