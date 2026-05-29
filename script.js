// --- 1. Consentement RGPD / GA4 ---
function checkConsent() {
    const consent = localStorage.getItem('cookie_consent');
    const banner = document.getElementById('cookie-banner');
    
    if (consent === 'accepted') {
        banner.style.display = 'none';
        gtag('consent', 'update', { 'analytics_storage': 'granted' });
    } else if (consent === 'refused') {
        banner.style.display = 'none';
    } else {
        // Première visite : afficher la bannière
        banner.style.display = 'flex';
        banner.style.transform = 'translateY(0)';
    }
}

function acceptCookies() {
    localStorage.setItem('cookie_consent', 'accepted');
    document.getElementById('cookie-banner').style.transform = 'translateY(100%)';
    setTimeout(() => { document.getElementById('cookie-banner').style.display = 'none'; }, 500);
    
    gtag('consent', 'update', { 'analytics_storage': 'granted' });
    gtag('event', 'cookie_accepted', { 'event_category': 'engagement', 'event_label': 'Cookies Acceptés' });
    gtag('event', 'page_view', { 'send_to': 'G-TTYB74MCCQ' });
}

function refuseCookies() {
    localStorage.setItem('cookie_consent', 'refused');
    document.getElementById('cookie-banner').style.transform = 'translateY(100%)';
    setTimeout(() => { document.getElementById('cookie-banner').style.display = 'none'; }, 500);
}

// --- 2. Fonctions de Tracking Spécifiques ---
function trackWhatsAppShare() { 
    gtag('event', 'share_whatsapp', { 'event_category': 'engagement', 'method': 'WhatsApp' }); 
}

function trackPDFDownload() { 
    gtag('event', 'download_pdf', { 'event_category': 'conversion', 'file_name': 'programme.pdf' }); 
}

function trackGalerieClick() { 
    gtag('event', 'view_galerie', { 'event_category': 'navigation', 'event_label': 'Clic nav Galerie' }); 
}

function trackArtistClick(artistId) {
    const events = { 'alain': 'view_artist_alain', 'sonja': 'view_artist_sonja', 'alison': 'view_artist_alison' };
    if(events[artistId]) gtag('event', events[artistId], { 'event_category': 'artist_interaction' });
}

function trackCampaign() {
    const urlParams = new URLSearchParams(window.location.search);
    const utmSource = urlParams.get('utm_source');
    const utmCampaign = urlParams.get('utm_campaign');

    if (utmCampaign === 'expo_resonances_2026' && ['alain_mouret', 'sonja_fasel', 'alison_rikunali'].includes(utmSource)) {
        gtag('event', 'campaign_visit', {
            'event_category': 'acquisition',
            'event_label': utmSource,
            'campaign': utmCampaign
        });
    }
}

// --- 3. Scroll Depth Tracking ---
let scrolled50 = false;
let scrolled90 = false;

window.addEventListener('scroll', () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    let docHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
    let winHeight = window.innerHeight || document.documentElement.clientHeight;
    let scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;

    if (scrollPercent >= 50 && !scrolled50) {
        gtag('event', 'scroll_depth', { 'depth_percentage': '50%' });
        scrolled50 = true;
    }
    if (scrollPercent >= 90 && !scrolled90) {
        gtag('event', 'scroll_depth', { 'depth_percentage': '90%' });
        scrolled90 = true;
    }
});

// --- 4. Carousel Logic ---
document.addEventListener('DOMContentLoaded', () => {
    checkConsent();
    trackCampaign();

    const carousels = document.querySelectorAll('.carousel');
    carousels.forEach(carousel => {
        const track = carousel.querySelector('.carousel-track');
        const slides = Array.from(track.children);
        let currentIndex = 0;
        let intervalTimer;
        const interval = parseInt(carousel.getAttribute('data-interval') || 4000);

        function updateSlidePosition() { 
            track.style.transform = 'translateX(-' + (currentIndex * 100) + '%)'; 
        }
        
        function nextSlide() { 
            currentIndex = (currentIndex + 1) % slides.length; 
            updateSlidePosition(); 
        }
        
        function startAutoPlay() { 
            intervalTimer = setInterval(nextSlide, interval); 
        }
        
        function stopAutoPlay() { 
            clearInterval(intervalTimer); 
        }

        carousel.moveCarousel = (direction) => {
            stopAutoPlay();
            currentIndex = (currentIndex + direction + slides.length) % slides.length;
            updateSlidePosition();
            startAutoPlay();
        };
        startAutoPlay();
    });
});

// --- 5. Mobile Menu Toggle ---
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');
    const navItems = document.querySelectorAll('.nav-link');

    if (mobileMenuBtn && navLinks) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
            
            // Prevent body scroll when menu is open
            if (navLinks.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close menu when a link is clicked
        navItems.forEach(item => {
            item.addEventListener('click', () => {
                mobileMenuBtn.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
});

function moveCarousel(event, btn, direction) {
    event.stopPropagation();
    const carousel = btn.closest('.carousel');
    if(carousel && carousel.moveCarousel) carousel.moveCarousel(direction);
}