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

eval("//here is a general function to check selector exists and to invoke on choose viewport(mobile: - mobile and tablet devices/ laptop - PC / all - to invoke on all devices)\r\nconst toInvoke = function (callback, view = 'all', selector) {\r\n    if (document.querySelector(selector) !== null || document.querySelector(selector) !== undefined) {\r\n        if (view === 'mobile' && window.innerWidth <= 1280) {\r\n            return setTimeout(() => {\r\n                callback()\r\n            })\r\n        }\r\n        if (view === 'laptop' && (window.innerWidth > 1280)) {\r\n            return setTimeout(() => {\r\n                callback()\r\n            })\r\n        }\r\n        if (view === 'all') {\r\n            return setTimeout(() => {\r\n                callback()\r\n            })\r\n        }\r\n    }\r\n}\r\n\r\n\r\ntoInvoke(() => {\r\n    new Swiper('#swiper', {\r\n        loop: true,\r\n        slidesPerView: 5,\r\n        spaceBetween: 30,\r\n        centeredSlides: true,\r\n        navigation: {\r\n            nextEl: '.slider__arrows__next',\r\n            prevEl: '.slider__arrows__prev',\r\n        },\r\n    });\r\n}, 'all', '#swiper')\r\n\n\n//# sourceURL=webpack://webpack-dk/./app/theme/assets/js/main.js?");

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