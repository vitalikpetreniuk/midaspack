import "./utils/swiper";

let body = document.body;
let blured = document.querySelector('.blured');

let pulsating = document.querySelector('.pulsating');
let callPopupButton = document.querySelector('.mp-call');
let mobileCall = document.querySelector('.mpm-call');
let callPopupButtonApproach = document.querySelector('.mp-approach .mp-button');
let closePopupButton = document.querySelector('.mp-close');
let mpKyivstar = document.querySelector('.mp-kyivstar');
let burger = document.querySelector('button.mobile-menu');

// JavaScript
let mpLang = document.querySelector('.mp-lang');
let ulElement = document.querySelector('.mp-lang ul');
let liElements
if(ulElement) {
    liElements = ulElement.getElementsByTagName('li');
}
let totalWidth = 0;
let currentWidth = 0;

if(ulElement){
    for (let i = 0; i < liElements.length; i++) {
        let elementWidth = liElements[i].offsetWidth;
        totalWidth += elementWidth;
    }
    totalWidth = totalWidth + 60;
}

if(document.querySelector('.mp-lang > span')) {
    document.querySelector('.mp-lang > span').addEventListener('click', function() {
        if (currentWidth === 0) {
            animateToTotalWidth();
        } else {
            animateToZero();
        }
    });
}
document.addEventListener('click', function(event) {
    let targetElement = event.target;
    if (!mpLang.contains(targetElement)) {
        if (currentWidth !== 0) {
            animateToZero();
        }
    }
});

if(burger) {
    burger.addEventListener('click', function() {
        body.classList.toggle('mm-open');
    });
}
if(mpKyivstar) {
    mpKyivstar.addEventListener('click', function() {
        if (window.innerWidth <=1100) {
            body.classList.toggle('blured');
            this.classList.toggle('opened');
        }
    });
}
if(blured) {
    blured.addEventListener('click', function() {
        body.classList.remove('blured');
        body.classList.remove('call-onscreen');
        mpKyivstar.classList.remove('opened');
    });
}

if(pulsating) {
    pulsating.addEventListener('click', function(event) {
        console.log('pulsating');
        body.classList.add('call-onscreen');
    });
}
if(callPopupButton) {
    callPopupButton.addEventListener('click', function(event) {
        body.classList.add('call-onscreen');
    });
}
if(closePopupButton) {
    closePopupButton.addEventListener('click', function(event) {
        body.classList.remove('call-onscreen');
    });

    document.addEventListener('mouseup', function(e) {
        let container = document.querySelector('.mp-popup > .cont > div');
        if (!container.contains(e.target)) {
            document.body.classList.remove('call-onscreen');
        }
    });
}
if(mobileCall) {
    mobileCall.addEventListener('click', function(event) {
        body.classList.remove('mm-open');
        body.classList.add('call-onscreen');
    });
}

if (callPopupButtonApproach) {
    callPopupButtonApproach.addEventListener('click', function(event) {
        body.classList.add('call-onscreen');
    });
}
if (document.querySelector('.mp-text')) {
    document.querySelector('.mp-text .mp-button').addEventListener('click', function(event) {
        toggleHeight();
    });
}
if (document.querySelector('.product-sizes')) {
    const ulElements = document.querySelectorAll('ul.product-sizes');
    ulElements.forEach(ul => {
        ul.addEventListener('click', function(event) {
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

    sortItems.forEach(function(item) {
        item.addEventListener('click', function() {
            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
            } else {
                this.classList.add('selected');
            }
        });
    });
}
if (document.querySelector('.mp-categories ul')) {
    addRemoveClassOnHover();
}
window.addEventListener('scroll', function() {
    let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    let scrollBorder;
    if (window.innerWidth > 1099) {
        scrollBorder = 31;
    }else{
        scrollBorder = 32;
    }

    if (scrollPosition > scrollBorder) {
        body.classList.add('fixed-header');
        document.querySelector('header').classList.add('fixed-white');
    } else {
        body.classList.remove('fixed-header');
        document.querySelector('header').classList.remove('fixed-white');
    }
});


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
        toggleButton.textContent = 'Менше';
    } else {
        outerDiv.style.height = '150px';
        outerDiv.classList.remove('no-fade');
        toggleButton.textContent = 'Більше';
    }
}
function addRemoveClassOnHover() {
    const listItems = document.querySelectorAll('.mp-categories li');

    listItems.forEach(li => {
        // Add event listener to the tag within each list item
        li.querySelector('a').addEventListener('mouseenter', () => {
            // Add 'hovered' class to the parent list item
            li.classList.add('hovered');
        });

        li.querySelector('a').addEventListener('mouseleave', () => {
            // Remove 'hovered' class from the parent list item
            li.classList.remove('hovered');
        });
    });
}