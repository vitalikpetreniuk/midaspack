import "./utils/swiper";

let body = document.querySelector('body');
let blured = document.querySelector('.blured');

let callPopupButtons = document.querySelectorAll('.mp-call-book');
let closePopupButton = document.querySelector('.mp-close');
let mpKyivstar = document.querySelector('.mp-kyivstar');
let burger = document.querySelector('button.mobile-menu');

// JavaScript
var mpLang = document.querySelector('.mp-lang');
var ulElement = document.querySelector('.mp-lang ul');
if (ulElement) {
    var liElements = ulElement.getElementsByTagName('li');
}
var totalWidth = 0;
var currentWidth = 0;

if (liElements && liElements.length) {
    for (var i = 0; i < liElements.length; i++) {
        var elementWidth = liElements[i].offsetWidth;
        totalWidth += elementWidth;
    }
}

totalWidth = totalWidth + 60;

document.querySelector('.mp-lang > span').addEventListener('click', function () {
    if (currentWidth === 0) {
        animateToTotalWidth();
    } else {
        animateToZero();
    }
});
document.addEventListener('click', function (event) {
    var targetElement = event.target;
    if (!mpLang.contains(targetElement)) {
        if (currentWidth !== 0) {
            animateToZero();
        }
    }
});

burger.addEventListener('click', function () {
    body.classList.toggle('mm-open');
});
mpKyivstar.addEventListener('click', function () {
    if (window.innerWidth <= 1100) {
        body.classList.toggle('blured');
        this.classList.toggle('opened');
    }
});
blured.addEventListener('click', function () {
    body.classList.remove('blured');
    body.classList.remove('call-onscreen');
    mpKyivstar.classList.remove('opened');
});

if (callPopupButtons && callPopupButtons.length) {
    callPopupButtons.forEach(item => {
        item.addEventListener('click', function () {
            body.classList.add('call-onscreen');
        });
    })
}

closePopupButton.addEventListener('click', function (event) {
    console.log('clicked');
    body.classList.remove('call-onscreen');
});
if (document.querySelector('.mp-text')) {
    document.querySelector('.mp-text .mp-button').addEventListener('click', function (event) {
        toggleHeight();
    });
}
if (document.querySelector('.product-sizes')) {
    const ulElements = document.querySelectorAll('ul.product-sizes');
    ulElements.forEach(ul => {
        ul.addEventListener('click', function (event) {
            if (event.target.tagName === 'LI') {
                ul.querySelectorAll('li').forEach(li => {
                    li.classList.remove('selected');
                });
                event.target.classList.add('selected');
            }
        });
    });
}
if (document.querySelector('ul.sort')) {
    let sortItems = document.querySelectorAll('.sort li');

    sortItems.forEach(function (item) {
        item.addEventListener('click', function () {
            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
            } else {
                this.classList.add('selected');
            }
        });
    });
}

function animateToZero() {
    currentWidth -= 10; // Adjust the speed of animation here
    ulElement.style.width = currentWidth + "px";
    if (currentWidth > 0) {
        requestAnimationFrame(animateToZero);
    }
}

function animateToTotalWidth() {
    currentWidth += 10; // Adjust the speed of animation here
    ulElement.style.width = currentWidth + "px";
    if (currentWidth < totalWidth) {
        requestAnimationFrame(animateToTotalWidth);
    }
}

function toggleHeight() {
    let outerDiv = document.querySelector('.mp-text .outer-text');
    let innerDiv = document.querySelector('.mp-text .inner-text');
    let toggleButton = document.querySelector('.mp-text .mp-button');

    console.log(outerDiv.style.height);

    if (outerDiv.style.height === '150px' || outerDiv.style.height === '') {
        outerDiv.style.height = innerDiv.clientHeight + 'px';
        outerDiv.classList.add('no-fade');
        toggleButton.textContent = backendvars.text_less;
    } else {
        outerDiv.style.height = '150px';
        outerDiv.classList.remove('no-fade');
        toggleButton.textContent = backendvars.text_more;
    }
}