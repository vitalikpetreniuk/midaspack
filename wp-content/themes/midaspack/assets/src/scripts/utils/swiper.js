import Swiper from '../../../../../../plugins/brainwave/assembly/node_modules/swiper';
import Navigation from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/navigation.min.mjs';
import Pagination from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/pagination.min.mjs';

document.addEventListener('DOMContentLoaded', function(){
    const introSlider = document.querySelectorAll('.mp-intro .swiper');
    const productsSlider = document.querySelectorAll('.mp-products .swiper');
    const newsSlider = document.querySelectorAll('.mp-news .swiper');
    const productImages = document.querySelectorAll('.mp-product .swiper');
    if (introSlider.length > 0) {
        const swiper = new Swiper('.mp-intro .swiper', {
            modules: [Pagination],
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
        });
    }
    if (productsSlider.length > 0) {
        const swiper = new Swiper('.mp-products .swiper', {
            modules: [Navigation, Pagination],
            loop: true,
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1100: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },
            pagination: {
                el: '.swiper-pagination',
                // clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });

        document.querySelector('.mp-products .go-prev').addEventListener('click', function () {
            document.querySelector('.mp-products .swiper-button-prev').click();
        });
        document.querySelector('.mp-products .go-next').addEventListener('click', function () {
            document.querySelector('.mp-products .swiper-button-next').click();
        });
    }
    if (newsSlider.length > 0) {
        const swiper = new Swiper('.mp-news .swiper', {
            modules: [Navigation, Pagination],
            loop: true,
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });

        document.querySelector('.mp-news .go-prev').addEventListener('click', function () {
            document.querySelector('.mp-news .swiper-button-prev').click();
        });
        document.querySelector('.mp-news .go-next').addEventListener('click', function () {
            document.querySelector('.mp-news .swiper-button-next').click();
        });
    }
    if (productImages.length > 0) {
        const swiper = new Swiper('.mp-product .swiper', {
            modules: [Navigation, Pagination],
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });

        document.querySelector('.pm-gallery .go-prev').addEventListener('click', function () {
            console.log('click prev');
            document.querySelector('.pm-gallery .swiper-button-prev').click();
        });
        document.querySelector('.pm-gallery .go-next').addEventListener('click', function () {
            console.log('click next');
            document.querySelector('.pm-gallery .swiper-button-next').click();
        });
    }
});