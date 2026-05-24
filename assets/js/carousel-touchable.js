/**
 * Carrousel Tactile avec Auto-Play
 * - Défilement automatique toutes les 4 secondes
 * - Pause au toucher (touchstart)
 * - Pause au survol (mouseenter)
 * - Reprise au mouseleave
 * - Scroll-snap natif pour défilement lisse
 */

document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.artist-carousel');
    
    // Stockage des intervalles par carrousel
    const autoPlayIntervals = new Map();
    let touchTimeouts = new Map();
    
    /**
     * Démarre l'auto-play pour un carrousel
     * @param {Element} carousel - L'élément du carrousel
     */
    function startAutoPlay(carousel) {
        // Arrêter l'intervalle existant s'il y en a un
        if (autoPlayIntervals.has(carousel)) {
            clearInterval(autoPlayIntervals.get(carousel));
        }
        
        // Créer un nouvel intervalle qui fait défiler toutes les 4 secondes
        const interval = setInterval(() => {
            const scrollWidth = carousel.scrollWidth;
            const clientWidth = carousel.clientWidth;
            const currentScroll = carousel.scrollLeft;
            
            // Calculer la largeur d'une slide (100% de la largeur visible)
            const slideWidth = clientWidth;
            
            // Prochaine position
            let nextScroll = currentScroll + slideWidth;
            
            // Si on atteint la fin, revenir au début
            if (nextScroll >= scrollWidth - clientWidth - 10) {
                nextScroll = 0;
            }
            
            // Défiler en douceur
            carousel.scrollTo({
                left: nextScroll,
                behavior: 'smooth'
            });
        }, 4000);
        
        autoPlayIntervals.set(carousel, interval);
    }
    
    /**
     * Arrête l'auto-play pour un carrousel
     * @param {Element} carousel - L'élément du carrousel
     */
    function stopAutoPlay(carousel) {
        if (autoPlayIntervals.has(carousel)) {
            clearInterval(autoPlayIntervals.get(carousel));
            autoPlayIntervals.delete(carousel);
        }
    }
    
    /**
     * Redémarre l'auto-play après un délai
     * @param {Element} carousel - L'élément du carrousel
     * @param {number} delay - Délai avant redémarrage en ms (default: 1000)
     */
    function resetAutoPlayWithDelay(carousel, delay = 1000) {
        stopAutoPlay(carousel);
        
        // Annuler le timeout existant s'il y en a un
        if (touchTimeouts.has(carousel)) {
            clearTimeout(touchTimeouts.get(carousel));
        }
        
        // Attendre le délai avant de redémarrer
        const timeout = setTimeout(() => {
            startAutoPlay(carousel);
            touchTimeouts.delete(carousel);
        }, delay);
        
        touchTimeouts.set(carousel, timeout);
    }
    
    // Initialiser chaque carrousel
    carousels.forEach(carousel => {
        // Démarrer l'auto-play initial
        startAutoPlay(carousel);
        
        // ===== PAUSE AU TOUCHER (tactile) =====
        carousel.addEventListener('touchstart', function() {
            stopAutoPlay(this);
        }, { passive: true });
        
        // Reprendre après interaction tactile
        carousel.addEventListener('touchend', function() {
            resetAutoPlayWithDelay(this, 1000);
        }, { passive: true });
        
        // ===== PAUSE AU SURVOL (souris) =====
        carousel.addEventListener('mouseenter', function() {
            stopAutoPlay(this);
        });
        
        carousel.addEventListener('mouseleave', function() {
            resetAutoPlayWithDelay(this, 500);
        });
        
        // ===== PAUSE LORS DU SCROLL MANUEL =====
        let scrollTimeout;
        carousel.addEventListener('scroll', function() {
            // Arrêter l'auto-play pendant que l'utilisateur scroll
            stopAutoPlay(this);
            
            // Réinitialiser le timeout précédent
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            
            // Attendre la fin du scroll pour redémarrer
            scrollTimeout = setTimeout(() => {
                startAutoPlay(carousel);
            }, 2000);
        }, { passive: true });
    });
    
    // ===== GESTION DU REDIMENSIONNEMENT =====
    window.addEventListener('resize', debounce(function() {
        carousels.forEach(carousel => {
            // Réinitialiser l'auto-play après redimensionnement
            resetAutoPlayWithDelay(carousel, 500);
        });
    }, 500));
});

/**
 * Fonction utilitaire debounce
 * @param {Function} func - Fonction à exécuter
 * @param {number} wait - Délai d'attente en ms
 * @returns {Function} Fonction debounced
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
