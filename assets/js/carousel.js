document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.escale-carousel');
    const carouselBtns = document.querySelectorAll('.carousel-btn');

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
});
