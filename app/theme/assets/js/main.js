//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ laptop - PC / all - to invoke on all devices)
const toInvoke = function (callback, view = 'all', selector) {
    if (document.querySelector(selector) !== null) {
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
        initialSlide:1,
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
        speed:1000,
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
                slideCountNumber.innerHTML = `${slider.realIndex + 1}/${slider.slides.length} `;
            },
        },
    });
}, 'all', '.home__page #services_slider')

// text slider on Main page
toInvoke(() => {
    if(window.innerWidth < 768){
        new Swiper('.home__page #steps', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.home__page #steps .slider__arrows__next',
                prevEl: '.home__page #steps .slider__arrows__prev',
            },
        });
    }

}, 'mobile', '.home__page #steps')

// opinions slider on Main page
toInvoke(() => {
    new Swiper('.home__page #opinions__slider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        speed:1000,
        autoplay: {
            delay: 4000,
        },
        navigation: {
            nextEl: '.home__page #opinions__slider .slider__arrows__next',
            prevEl: '.home__page #opinions__slider .slider__arrows__prev',
        },
        breakpoints: {
            1250: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
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
    const contactForm = document.querySelector('#quiz__slider .swiper-slide.__lastStep .slide__form .wpcf7-form')

    const thanks__informationElement = document.querySelector('#thanks__information')

    startQuizBtn.addEventListener('click',()=>{
        main_slideElement.classList.add('__hide')
    })

    contactForm.addEventListener( 'wpcf7mailsent', function( event ) {
        thanks__informationElement.classList.add('__show')
    }, false );
}, 'all', '.home__page #quiz__slider')

// video slider component
toInvoke(() => {
    new Swiper('#video_slider', {
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,
        speed:1000,
        autoplay: {
            delay: 4000,
        },
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
        breakpoints: {
            768: {
                slidesPerView: 5,
            },
        }
    });
}, 'all', '#video_slider')
// slider on PROJECT post pages
toInvoke(() => {
    new Swiper('.projectSinglePost__page #swiper', {
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,
        navigation: {
            nextEl: '.projectSinglePost__page .slider__arrows__next',
            prevEl: '.projectSinglePost__page .slider__arrows__prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 5,
            },
        }
    });
}, 'all', '.projectSinglePost__page #swiper')

//scrolling header on Project post pages

toInvoke(() => {
    const header = document.querySelector('#header__post');
    console.log(header)
    window.addEventListener('scroll', ()=>{
        if(window.scrollY > 160){
            header.classList.add('__scrolling')
        }else {
            header.classList.remove('__scrolling')
        }
    })


}, 'all', '.single  #header__post')



toInvoke(() => {
    const thumbnails = document.querySelectorAll('#thumbnails')

    thumbnails.forEach(element =>{
        new Swiper(element, {
            slidesPerView: 1,
            spaceBetween: 20,
            navigation: {
                nextEl: '.slider__arrows .slider__arrows__next',
                prevEl: '.slider__arrows .slider__arrows__prev',
            },
            breakpoints: {
                1250: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                450: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
            }
        });
    })
}, 'all', '.service__page  #thumbnails')


toInvoke(() => {
    const inputs = document.querySelectorAll('.answers input')
    const form = document.querySelector('#quiz__slider .wpcf7-form.init')

    inputs.forEach((element) => {
        form.appendChild(element)
    });


    // add and show active lable
    const answers = document.querySelectorAll('.question__wrapper .answers li label')
    const removeActive = (elements)=>{
        elements.forEach(element=>{
            if(element.classList.contains('--active')){
                element.classList.remove('--active')
            }
        })
    }

    answers.forEach(answer => {
        answer.addEventListener('click', function () {
            const parentElements = this.closest('.answers')
            removeActive(parentElements.querySelectorAll('li label'))
            this.classList.add('--active')
        })
    })
}, 'all', '.home__page  #quiz__slider')

// number counter for achievements
toInvoke(() => {


    const toRunCounter = ()=>{
        const counters = document.querySelectorAll(".counter");
        counters.forEach((counter) => {
            counter.innerText = "0";
            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const increment = target / 50;
                if (count < target) {
                    counter.innerText = `${Math.ceil(count + increment)}`;
                    setTimeout(updateCounter, 100);
                } else counter.innerText = target;
            };
            updateCounter();
        })
    }


    const observer = new IntersectionObserver(toRunCounter, { threshold: 1 })

    observer.observe(document.querySelector(".home__page  .achievements"))



}, 'all', '.home__page  .achievements .counter')