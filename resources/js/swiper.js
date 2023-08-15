import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

document.querySelectorAll('.swiper').forEach((el) => {
    const container = el.closest('.swiper-container') || {};

    new Swiper(el, {
        slidesPerView: container.getAttribute('data-slides-per-view') || 1,
        loop: container.getAttribute('data-loop') || false,
        autoHeight: container.getAttribute('data-auto-height') || false,
        allowTouchMove: container.getAttribute('data-allow-touch-move') || false,
        autoplay: container.getAttribute('data-autoplay') || false,
        navigation: {
            prevEl: container.getAttribute('data-swiper-button-prev') || ".swiper-button-prev",
            nextEl: container.getAttribute('data-swiper-button-next') || ".swiper-button-next",
        },
        pagination: {
            el: container.getAttribute('data-swiper-pagination') || ".swiper-pagination",
            clickable: true,
        },
        modules: [
            Navigation,
            Pagination,
            Autoplay
        ]
    });
});
