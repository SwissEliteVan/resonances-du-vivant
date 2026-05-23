<?php
/**
 * ANALYTICS.PHP - Google Analytics 4 avec mode de consentement
 */
?>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('consent', 'default', {
    'analytics_storage': 'denied'
  });
  gtag('js', new Date());
  gtag('config', 'G-NFZ664P2HF', {
    page_path: window.location.pathname,
    anonymize_ip: true
  });
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NFZ664P2HF"></script>
