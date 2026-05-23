<?php
/**
 * ANALYTICS.PHP - Script de suivi Google Analytics 4
 * Remplacez G-XXXXXXXXXX par votre propre ID.
 */
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', {
        page_path: window.location.pathname,
        anonymize_ip: true
    });
</script>
