import Swiper from '../../../../../../plugins/brainwave/assembly/node_modules/swiper';
import Autoplay from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/autoplay.min.mjs';
import Navigation from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/navigation.min.mjs';
import Pagination from '../../../../../../plugins/brainwave/assembly/node_modules/swiper/modules/pagination.min.mjs';

document.addEventListener('DOMContentLoaded', function () {
    const introSlider = document.querySelector('.mp-intro .swiper');
    const productsSlider = document.querySelector('.mp-products .swiper');
    const newsSlider = document.querySelector('.mp-news .swiper');
    const newsRecSlider = document.querySelector('.mp-news-recommend .swiper');
    const productImages = document.querySelector('.mp-product .swiper');
    if (introSlider) {
        const swiper = new Swiper(introSlider, {
            modules: [Autoplay, Pagination],
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
        });
    }
    if (productsSlider) {
        const swiper = new Swiper(productsSlider, {
            modules: [Navigation, Pagination],
            loop: false,
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
    if (newsSlider) {
        const swiper = new Swiper(newsSlider, {
            modules: [Navigation, Pagination],
            loop: false,
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
    if (newsRecSlider) {
        const swiper = new Swiper(newsRecSlider, {
            modules: [Navigation, Pagination],
            loop: true,
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1100: {
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

        document.querySelector('.mp-news-recommend .go-prev').addEventListener('click', function () {
            document.querySelector('.mp-news-recommend .swiper-button-prev').click();
        });
        document.querySelector('.mp-news-recommend .go-next').addEventListener('click', function () {
            document.querySelector('.mp-news-recommend .swiper-button-next').click();
        });
    }
    if (productImages) {
        const swiper = new Swiper(productImages, {
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