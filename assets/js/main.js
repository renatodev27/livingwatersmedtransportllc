let swiperServices = document.querySelector('.slide-content-services')
let swiperClients = document.querySelector('.slide-content-clients')

function defineBreakpoints(slides) {
    const breakpoints = new Array;
    let availableBreakpoints = [0, 520, 950]

    for (let i = 0; i < slides; i++) {

        breakpoints.push(availableBreakpoints[i])
    }

    return breakpoints;
}

function drawSwiper(slideContent, slides) {
    let breakPoints = defineBreakpoints(slides)
    let breakPoint = {}

    breakPoints.map( (slide, index) => {
        breakPoint[slide] = {
            slidesPerView: index + 1
        };
    })

    let data = {
        slidesPerView: slides,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: breakPoint
    }

    new Swiper(slideContent, data);
}

drawSwiper(swiperServices, 3);
drawSwiper(swiperClients, 2);

function begin() {
    base_url = document.getElementById('home-btn');
    url = base_url.getAttribute('home');
    window.location.href = `${url}/contact`;
}