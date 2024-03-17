/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./app/theme/assets/js/main.js":
/*!*************************************!*\
  !*** ./app/theme/assets/js/main.js ***!
  \*************************************/
/***/ (() => {

eval("//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ laptop - PC / all - to invoke on all devices)\r\nconst toInvoke = function (callback, view = 'all', selector) {\r\n    if (document.querySelector(selector) !== null || document.querySelector(selector) !== undefined) {\r\n        if (view === 'mobile' && window.innerWidth <= 1280) {\r\n            return setTimeout(() => {\r\n                callback()\r\n            })\r\n        }\r\n        if (view === 'laptop' && (window.innerWidth > 1280)) {\r\n            return setTimeout(() => {\r\n                callback()\r\n            })\r\n        }\r\n        if (view === 'all') {\r\n            return setTimeout(() => {\r\n                callback()\r\n            })\r\n        }\r\n    }\r\n}\r\n\r\n\r\n// slider on PROJECT post pages\r\ntoInvoke(() => {\r\n    new Swiper('#swiper', {\r\n        loop: true,\r\n        slidesPerView: 5,\r\n        spaceBetween: 30,\r\n        centeredSlides: true,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n    });\r\n}, 'all', '#swiper')\r\n\r\n\r\n\r\n// text slider on Main page\r\ntoInvoke(() => {\r\n    new Swiper('#quiz__slider', {\r\n        slidesPerView: 1,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n    });\r\n}, 'all', '#quiz__slider')\r\n\r\n\r\n// opinions slider on Main page\r\ntoInvoke(() => {\r\n    new Swiper('#opinions__slider', {\r\n        loop: true,\r\n        slidesPerView: 2,\r\n        spaceBetween: 30,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n        breakpoints: {\r\n            1250: {\r\n                slidesPerView: 3,\r\n                spaceBetween: 40,\r\n            },\r\n        }\r\n    });\r\n}, 'all', '#opinions__slider')\r\n\r\n// quiz slider on Main page\r\ntoInvoke(() => {\r\n    new Swiper('#opinions__slider', {\r\n        loop: true,\r\n        slidesPerView: 3,\r\n        spaceBetween: 40,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n    });\r\n}, 'all', '#opinions__slider')\r\n\r\n\r\n// video slider\r\ntoInvoke(() => {\r\n    new Swiper('#video_slider', {\r\n        loop: true,\r\n        slidesPerView: 5,\r\n        spaceBetween: 40,\r\n        centeredSlides: true,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n        on: {\r\n            transitionStart: function(){\r\n                const videos = document.querySelectorAll('#video_slider video');\r\n\r\n                Array.prototype.forEach.call(videos, function(video){\r\n                    video.pause();\r\n                });\r\n            },\r\n\r\n            transitionEnd: function(){\r\n                const activeSlide = this.slides.find(slide=> slide.classList.contains('swiper-slide-active'))\r\n                const video = activeSlide.querySelector('video')\r\n                video.play();\r\n\r\n            },\r\n        },\r\n    });\r\n}, 'all', '#video_slider')\r\n\r\n\r\n// services slider on Main page\r\ntoInvoke(() => {\r\n    // let reachedLoop = false\r\n    const sliderThumbnail = new Swiper('#slider-thumbnail', {\r\n        slidesPerView: 3,\r\n        freeMode: true,\r\n        watchSlidesVisibility: true,\r\n        watchSlidesProgress: true,\r\n        spaceBetween: 12,\r\n        breakpoints: {\r\n            1250: {\r\n                spaceBetween: 24,\r\n            },\r\n        }\r\n    });\r\n\r\n    const slideCountNumber = document.querySelector('#numberSlides');\r\n    new Swiper('#services_slider', {\r\n        loop: true,\r\n        slidesPerView: 1,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n        pagination: {\r\n            el: '#swiper-pagination',\r\n            type: 'progressbar',\r\n        },\r\n        thumbs: {\r\n            swiper: sliderThumbnail\r\n        },\r\n        on: {\r\n            slideChange: function (slider) {\r\n                if((slider.realIndex + 1) < 10){\r\n                    slideCountNumber.innerHTML = `0${(slider.realIndex + 1)}`;\r\n                }\r\n                else {\r\n                    slideCountNumber.innerHTML = (slider.realIndex + 1);\r\n                }\r\n            },\r\n        },\r\n    });\r\n\r\n\r\n}, 'all', '#services_slider')\n\n//# sourceURL=webpack://webpack-dk/./app/theme/assets/js/main.js?");

/***/ }),

/***/ "./app/theme/assets/scss/main.scss":
/*!*****************************************!*\
  !*** ./app/theme/assets/scss/main.scss ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://webpack-dk/./app/theme/assets/scss/main.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./app/theme/assets/js/main.js"](0, {}, __webpack_require__);
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./app/theme/assets/scss/main.scss"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;