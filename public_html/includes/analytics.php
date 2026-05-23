<?php
/**
 * ANALYTICS.PHP - Script GA4 et suivi d'audience
 * À configurer avec votre ID Google Analytics 4
 */
?>
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    
    // Configuration par défaut : consentement refusé jusqu'à l'acceptation
    gtag('consent', 'default', {
        'analytics_storage': 'denied',
        'ad_storage': 'denied',
        'ad_user_data': 'denied',
        'ad_personalization': 'denied'
    });

    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', {
        'page_location': location.href,
        'page_title': document.title,
        'anonymize_ip': true
    });
</script>

<!-- Measurement Protocol (optionnel pour suivi serveur) -->
<script>
    // Fonction helper pour tracker les événements personnalisés
    function trackEvent(eventName, eventParams) {
        if (typeof gtag === 'function') {
            gtag('event', eventName, eventParams);
        }
    }

    // Tracker les clics sur CTA
    document.addEventListener('DOMContentLoaded', function() {
        const ctaButtons = document.querySelectorAll('.btn-cta');
        ctaButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                trackEvent('cta_click', {
                    'button_text': this.textContent,
                    'button_url': this.href
                });
            });
        });

        // Tracker la visibilité des sections
        if ('IntersectionObserver' in window) {
            const sections = document.querySelectorAll('section, header');
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        trackEvent('section_view', {
                            'section_id': entry.target.id || entry.target.className,
                            'section_name': entry.target.getAttribute('aria-labelledby')
                        });
                    }
                });
            }, { threshold: 0.25 });
            
            sections.forEach(section => observer.observe(section));
        }
    });
</script>