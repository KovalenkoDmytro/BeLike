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
    new Swiper('#quiz__slider', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
    });
}, 'all', '#quiz__slider')


// opinions slider on Main page
toInvoke(() => {
    new Swiper('#opinions__slider', {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
    });
}, 'all', '#opinions__slider')

// quiz slider on Main page
toInvoke(() => {
    new Swiper('#opinions__slider', {
        loop: true,
        slidesPerView: 3,
        spaceBetween: 40,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
    });
}, 'all', '#opinions__slider')


// video slider
toInvoke(() => {
    new Swiper('#video_slider', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 40,
        centeredSlides: true,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
        on: {
            transitionStart: function(){
                const videos = document.querySelectorAll('#video_slider video');

                Array.prototype.forEach.call(videos, function(video){
                    video.pause();
                });
            },

            transitionEnd: function(){
                const activeSlide = this.slides.find(slide=> slide.classList.contains('swiper-slide-active'))
                const video = activeSlide.querySelector('video')
                video.play();

            },
        },
    });
}, 'all', '#video_slider')


// services slider on Main page
toInvoke(() => {
    // let reachedLoop = false
    const sliderThumbnail = new Swiper('#slider-thumbnail', {
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        spaceBetween: 12,
        breakpoints: {
            1250: {
                spaceBetween: 24,
            },
        }
    });

    const slideCountNumber = document.querySelector('#numberSlides');
    new Swiper('#services_slider', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.slider__arrows__next',
            prevEl: '.slider__arrows__prev',
        },
        pagination: {
            el: '#swiper-pagination',
            type: 'progressbar',
        },
        thumbs: {
            swiper: sliderThumbnail
        },
        on: {
            slideChange: function (slider) {
                if((slider.realIndex + 1) < 10){
                    slideCountNumber.innerHTML = `0${(slider.realIndex + 1)}`;
                }
                else {
                    slideCountNumber.innerHTML = (slider.realIndex + 1);
                }
            },
        },
    });


}, 'all', '#services_slider')