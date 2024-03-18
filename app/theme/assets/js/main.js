//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ laptop - PC / all - to invoke on all devices)
const toInvoke = function (callback, view = 'all', selector) {
    if (document.querySelector(selector) !== null || document.querySelector(selector) !== undefined) {
        if (view === 'mobile' && window.innerWidth <= 1280) {
                callback()
        }
        if (view === 'laptop' && (window.innerWidth > 1280)) {
                callback()
        }
        if (view === 'all') {
                callback()
        }
    }
}

// services slider on Main page
toInvoke(() => {
    const sliderThumbnail = new Swiper('.home__page #slider-thumbnail', {
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
    new Swiper('.home__page #services_slider', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.home__page #services_slider .slider__arrows__next',
            prevEl: '.home__page #services_slider .slider__arrows__prev',
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
}, 'all', '.home__page #services_slider')


// text slider on Main page
toInvoke(() => {
    new Swiper('.home__page #text_slider', {
        slidesPerView: 1.2,
        spaceBetween: 30,
        navigation: {
            nextEl: '.home__page #text_slider .slider__arrows__next',
            prevEl: '.home__page #text_slider .slider__arrows__prev',
        },
    });
}, 'all', '.home__page #text_slider')

// opinions slider on Main page
toInvoke(() => {
    new Swiper('.home__page #opinions__slider', {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 40,
        navigation: {
            nextEl: '.home__page #opinions__slider .slider__arrows__next',
            prevEl: '.home__page #opinions__slider .slider__arrows__prev',
        },
        breakpoints: {
            1250: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        }
    });
}, 'all', '.home__page #opinions__slider')


//Quiz slide on home page
toInvoke(() => {

    const toInitSlider = function () {
        new Swiper('.home__page #quiz__slider', {
            slidesPerView: 1,
            navigation: {
                nextEl: '.home__page #quiz__slider .slider__arrows__next',
                prevEl: '.home__page #quiz__slider .slider__arrows__prev',
            },
        });
    }
    toInitSlider()


    //slider
    const startQuizBtn = document.querySelector('#startQuiz')
    const main_slideElement = document.querySelector('#main_slide')
    const thanks__informationElement = document.querySelector('#thanks__information')
    const sendQuizFormBtn = document.querySelector('#sendQuizForm')

    startQuizBtn.addEventListener('click',()=>{
        main_slideElement.classList.add('__hide')
    })

    sendQuizFormBtn.addEventListener('click',()=>{
        thanks__informationElement.classList.add('__show')
    })


}, 'all', '.home__page #quiz__slider')



// video slider component
toInvoke(() => {
    new Swiper('#video_slider', {
        loop: true,
        slidesPerView: 5,
        centeredSlides: true,
        navigation: {
            nextEl: '#video_slider .slider__arrows__next',
            prevEl: '#video_slider .slider__arrows__prev',
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










// slider on PROJECT post pages
// toInvoke(() => {
//     new Swiper('#swiper', {
//         loop: true,
//         slidesPerView: 5,
//         spaceBetween: 30,
//         centeredSlides: true,
//         navigation: {
//             nextEl: '.slider__arrows__next',
//             prevEl: '.slider__arrows__prev',
//         },
//     });
// }, 'all', '#swiper')