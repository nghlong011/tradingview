document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper', {
        // Cấu hình cơ bản
        slidesPerView: 'auto',
        spaceBetween: 32,
        loop: true,
        centeredSlides: true,
        
        // Navigation
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        
        // Responsive breakpoints
        breakpoints: {
            // Mobile
            320: {
                slidesPerView: 1,
                spaceBetween: 16
            },
            // Tablet
            768: {
                slidesPerView: 2,
                spaceBetween: 24
            },
            // Desktop
            1024: {
                slidesPerView: 3,
                spaceBetween: 32
            }
        }
    });
}); 