require('./bootstrap');
// if you're using a bundler, first import:
const Headroom = require("headroom.js");

console.log('!!!!!!!!!!!!!');
console.log('!!!!!!!!!!!!!');
console.log('!!!!!!!!!!!!!');
console.log('!!!!!!!!!!!!!');
console.log('!!!!!!!!!!!!!');
const header = document.querySelector('header');
const headroom = new Headroom(header);
// initialise
headroom.init();


const menuButton = document.querySelector('#menu-button');
const closeBtn = document.querySelector('.offcanvas-close');
const overlay = document.querySelector('.offcanvas-overlay');
const menu = document.querySelector('#mobile_menu');

const contents = document.querySelectorAll('.top-slider__content');

function toggleMenu() {
    overlay.classList.toggle('opened')
    menu.classList.toggle('opened')
}

var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },
})

function onSlideChange(e) {
    console.log({QQQQ: contents[e.realIndex]});
    document.querySelector('.top-slider__content_active').classList.remove('top-slider__content_active');
    contents[e.realIndex].classList.add('top-slider__content_active');
}
contents[0].classList.add('top-slider__content_active');
mySwiper.on('slideChange', onSlideChange);

menuButton.addEventListener('click', toggleMenu)
closeBtn.addEventListener('click', toggleMenu)
