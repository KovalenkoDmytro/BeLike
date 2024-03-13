//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ laptop - PC / all - to invoke on all devices)
const toInvoke = function (callback, view = 'all', selector) {
    if (document.querySelector(selector) !== null || document.querySelector(selector) !== undefined) {
        if (view === 'mobile' && window.innerWidth <= 1280) {
            return setTimeout(() => {
                callback()
            })
        }
        if (view === 'laptop' && (window.innerWidth > 1280)) {
            return setTimeout(() => {
                callback()
            })
        }
        if (view === 'all') {
            return setTimeout(() => {
                callback()
            })
        }
    }
}


// slider on PROJECT post pages
toInvoke(() => {
    new Swiper('#swiper', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 30,
        centeredSlides: true,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
    });
}, 'all', '#swiper')



// text slider on Main page
toInvoke(() => {
    new Swiper('#text_slider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 40,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
    });
}, 'all', '#text_slider')
