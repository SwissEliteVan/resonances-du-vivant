<?php
/**
 * ANALYTICS.PHP - Google Analytics 4 placeholder
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
