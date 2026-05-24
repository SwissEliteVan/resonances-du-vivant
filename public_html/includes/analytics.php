<?php
/**
 * ANALYTICS.PHP - Google Analytics 4 avec blocage strict par défaut
 */
?>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}

  function loadGoogleAnalytics() {
    if (document.querySelector('script[src*="googletagmanager.com/gtag/js?id=G-NFZ664P2HF"]')) {
      return;
    }
    var script = document.createElement('script');
    script.async = true;
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-NFZ664P2HF';
    script.onload = function() {
      gtag('js', new Date());
      gtag('config', 'G-NFZ664P2HF', {
        page_path: window.location.pathname,
        anonymize_ip: true,
        send_page_view: true
      });
    };
    document.head.appendChild(script);
  }

  function setAnalyticsConsent(value) {
    localStorage.setItem('analytics_consent', value);
    if (value === 'granted') {
      loadGoogleAnalytics();
    }
  }

  function initializeAnalyticsConsent() {
    var consent = localStorage.getItem('analytics_consent');
    if (consent === 'granted') {
      loadGoogleAnalytics();
    }
  }

  window.setAnalyticsConsent = setAnalyticsConsent;
  window.initializeAnalyticsConsent = initializeAnalyticsConsent;

  initializeAnalyticsConsent();
</script>
