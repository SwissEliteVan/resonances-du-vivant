document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.escale-carousel');
    const carouselBtns = document.querySelectorAll('.carousel-btn');
    let autoPlayIntervals = {};

    // Initialize carousel state
    const carouselStates = {
        'carousel-1': 0,
        'carousel-2': 0,
        'carousel-3': 0
    };

    function updateCarousel(carouselId) {
        const carousel = document.querySelector(`.escale-carousel-container:has([data-carousel="${carouselId}"])`)?.querySelector('.escale-carousel');
        if (!carousel) return;

        const index = carouselStates[carouselId];
        const translateX = -index * 100;
        carousel.style.transform = `translateX(${translateX}%)`;
    }

    function startAutoPlay(carouselId) {
        // Clear existing interval
        if (autoPlayIntervals[carouselId]) {
            clearInterval(autoPlayIntervals[carouselId]);
        }

        // Auto-play every 4 seconds
        autoPlayIntervals[carouselId] = setInterval(() => {
            carouselStates[carouselId] = (carouselStates[carouselId] + 1) % 5;
            updateCarousel(carouselId);
        }, 4000);
    }

    function resetAutoPlay(carouselId) {
        if (autoPlayIntervals[carouselId]) {
            clearInterval(autoPlayIntervals[carouselId]);
        }
        startAutoPlay(carouselId);
    }

    // Initialize auto-play for all carousels
    Object.keys(carouselStates).forEach(carouselId => {
        startAutoPlay(carouselId);
    });

    carouselBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const carouselId = this.getAttribute('data-carousel');
            const isNext = this.classList.contains('carousel-next');

            if (isNext) {
                carouselStates[carouselId] = (carouselStates[carouselId] + 1) % 5;
            } else {
                carouselStates[carouselId] = (carouselStates[carouselId] - 1 + 5) % 5;
            }

            updateCarousel(carouselId);
            resetAutoPlay(carouselId);
        });
    });

    // Keyboard navigation support
    document.addEventListener('keydown', function(e) {
        const focusedBtn = document.activeElement;
        if (focusedBtn.classList.contains('carousel-btn')) {
            if (e.key === 'ArrowLeft') {
                focusedBtn.click();
            } else if (e.key === 'ArrowRight') {
                const carouselId = focusedBtn.getAttribute('data-carousel');
                const isNextBtn = focusedBtn.classList.contains('carousel-next');
                const nextBtn = focusedBtn.parentElement.querySelector(
                    isNextBtn ? '.carousel-prev' : '.carousel-next'
                );
                if (nextBtn) nextBtn.click();
            }
        }
    });

    // Pause auto-play on hover
    document.querySelectorAll('.escale-carousel-container').forEach(container => {
        const carouselId = container.querySelector('[data-carousel]').getAttribute('data-carousel');
        
        container.addEventListener('mouseenter', () => {
            if (autoPlayIntervals[carouselId]) {
                clearInterval(autoPlayIntervals[carouselId]);
            }
        });

        container.addEventListener('mouseleave', () => {
            startAutoPlay(carouselId);
        });
    });
});
