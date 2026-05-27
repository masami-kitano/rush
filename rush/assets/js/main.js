/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/js/component/autoSlider.js":
/*!***********************************************!*\
  !*** ./src/assets/js/component/autoSlider.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   AutoSlider: () => (/* binding */ AutoSlider)
/* harmony export */ });
/* harmony import */ var _splidejs_splide__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @splidejs/splide */ "./node_modules/@splidejs/splide/dist/js/splide.esm.js");
/* harmony import */ var _splidejs_splide_extension_auto_scroll__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @splidejs/splide-extension-auto-scroll */ "./node_modules/@splidejs/splide-extension-auto-scroll/dist/js/splide-extension-auto-scroll.esm.js");


function AutoSlider() {
  const splideElement = document.querySelector('.js-autoSlider');
  if (splideElement) {
    initializeSlider(splideElement);
  }
}
function initializeSlider(element) {
  new _splidejs_splide__WEBPACK_IMPORTED_MODULE_0__["default"](element, {
    type: 'loop',
    arrows: false,
    rewind: true,
    pagination: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    drag: false,
    autoWidth: true,
    gap: 0,
    autoScroll: {
      pauseOnHover: false,
      pauseOnFocus: false,
      speed: 0.5
    }
  }).mount({
    AutoScroll: _splidejs_splide_extension_auto_scroll__WEBPACK_IMPORTED_MODULE_1__.AutoScroll
  });
}

/***/ }),

/***/ "./src/assets/js/component/fadeIn.js":
/*!*******************************************!*\
  !*** ./src/assets/js/component/fadeIn.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

/* unused harmony export FadeIn */
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! gsap/ScrollTrigger */ "./node_modules/gsap/ScrollTrigger.js");
/**
 * フェードインアニメーション
 */



function FadeIn() {
  const contents = document.querySelectorAll('.js-fadeIn');
  gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger);
  gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.utils.toArray(contents).forEach(container => {
    gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.from(container, {
      autoAlpha: 0,
      duration: 1,
      /* アニメーションの時間 */
      ease: 'power2.out',
      scrollTrigger: {
        trigger: container,
        start: "top 80%" // 画面の上端がトリガーの80%の位置に達したらアニメーション開始
        // markers: true,
      }
    });
  });
}

/***/ }),

/***/ "./src/assets/js/component/fadeInList.js":
/*!***********************************************!*\
  !*** ./src/assets/js/component/fadeInList.js ***!
  \***********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   FadeInList: () => (/* binding */ FadeInList)
/* harmony export */ });
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* harmony import */ var gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! gsap/ScrollTrigger */ "./node_modules/gsap/ScrollTrigger.js");
/**
 * フェードインリストアニメーション
 */



function FadeInList() {
  const lists = document.querySelectorAll('.js-fadeInList'); // 複数のリストを取得
  gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.registerPlugin(gsap_ScrollTrigger__WEBPACK_IMPORTED_MODULE_1__.ScrollTrigger);
  lists.forEach(list => {
    const items = Array.from(list.querySelectorAll('.js-fadeInList__item')); // リスト内のアイテムを取得
    const shuffledItems = items.sort(() => Math.random() - 0.5); // アイテムをランダムに並び替え
    const tl = gsap__WEBPACK_IMPORTED_MODULE_0__.gsap.timeline({
      scrollTrigger: {
        trigger: list,
        // 各リストをトリガーに設定
        start: "top 80%"
        // markers: true, // 必要に応じて削除
      }
    });
    shuffledItems.forEach((item, index) => {
      tl.from(item, {
        y: "15%",
        autoAlpha: 0,
        duration: 0.5,
        ease: 'power2.out'
      }, index * 0.3); // 遅延を追加
    });
  });
}

/***/ }),

/***/ "./src/assets/js/component/smoothScrolling.js":
/*!****************************************************!*\
  !*** ./src/assets/js/component/smoothScrolling.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

/* unused harmony export SmoothScrolling */
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! smooth-scroll */ "./node_modules/smooth-scroll/dist/smooth-scroll.polyfills.min.js");
/* harmony import */ var smooth_scroll__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(smooth_scroll__WEBPACK_IMPORTED_MODULE_0__);


/**
 * スムーススクロール
 */
function SmoothScrolling() {
  const scroll = new (smooth_scroll__WEBPACK_IMPORTED_MODULE_0___default())('a[href*="#"]', {
    speed: 800,
    speedAsDuration: true,
    ignore: '[data-scroll-ignore]'
  });
}

/***/ }),

/***/ "./src/assets/js/component/storeSlider.js":
/*!************************************************!*\
  !*** ./src/assets/js/component/storeSlider.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   StoreSlider: () => (/* binding */ StoreSlider),
/* harmony export */   StoreSliderSub: () => (/* binding */ StoreSliderSub)
/* harmony export */ });
/**
 * storeスライダー
 */
function StoreSlider() {
  const sliders = document.querySelectorAll('.js-storeSlider');
  if (!sliders.length) return;
  sliders.forEach(slider => {
    const listItems = slider.querySelectorAll('.js-storeSlider__item');
    if (!listItems.length) return; // listItemsが空の場合は処理を中断

    let activeIndex = 0;

    // 初期状態で最初のliにis-activeクラスを追加
    listItems[activeIndex].classList.add('is-active');
    listItems[activeIndex].setAttribute('aria-hidden', 'false');
    listItems.forEach((item, index) => {
      if (index !== activeIndex) {
        item.setAttribute('aria-hidden', 'true');
      }
      item.setAttribute('role', 'tabpanel');
    });
    setInterval(() => {
      // 現在のis-activeクラスを削除
      listItems[activeIndex].classList.remove('is-active');
      listItems[activeIndex].setAttribute('aria-hidden', 'true');

      // 次のインデックスに移動（最後なら最初に戻る）
      activeIndex = (activeIndex + 1) % listItems.length;

      // 新しいis-activeクラスを追加
      listItems[activeIndex].classList.add('is-active');
      listItems[activeIndex].setAttribute('aria-hidden', 'false');
    }, 5000);
  });
}

/**
 * storeサブスライダー
 */
function StoreSliderSub() {
  const slidersSub = document.querySelectorAll('.js-storeSliderSub');
  if (!slidersSub.length) return;
  slidersSub.forEach(sliderSub => {
    const subItems = sliderSub.querySelectorAll('.js-storeSliderSub__item');
    const delays = [0, 2000, 3000, 1000]; // 指定された遅延時間（ミリ秒）

    subItems.forEach((subItem, index) => {
      const images = subItem.querySelectorAll('img');
      if (!images.length) return; // imagesが空の場合は処理を中断

      let activeSubIndex = 0;

      // 初期状態で最初のimgにis-activeクラスを追加
      images[activeSubIndex].classList.add('is-active');
      setTimeout(() => {
        setInterval(() => {
          // 現在のis-activeクラスを削除
          images[activeSubIndex].classList.remove('is-active');

          // 次のインデックスに移動（最後なら最初に戻る）
          activeSubIndex = (activeSubIndex + 1) % images.length;

          // 新しいis-activeクラスを追加
          images[activeSubIndex].classList.add('is-active');
        }, 5000);
      }, delays[index % delays.length]); // 指定された遅延時間を使用
    });
  });
}

/***/ }),

/***/ "./src/assets/js/main.js":
/*!*******************************!*\
  !*** ./src/assets/js/main.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __unused_webpack___webpack_exports__, __webpack_require__) => {

/* harmony import */ var _component_storeSlider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./component/storeSlider */ "./src/assets/js/component/storeSlider.js");
/* harmony import */ var _component_autoSlider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./component/autoSlider */ "./src/assets/js/component/autoSlider.js");
/* harmony import */ var _component_fadeInList__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./component/fadeInList */ "./src/assets/js/component/fadeInList.js");
/* harmony import */ var _component_fadeIn__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./component/fadeIn */ "./src/assets/js/component/fadeIn.js");
/* harmony import */ var _component_smoothScrolling__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./component/smoothScrolling */ "./src/assets/js/component/smoothScrolling.js");
/* harmony import */ var _scss_styles_scss__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../scss/styles.scss */ "./src/assets/scss/styles.scss");






// css

document.addEventListener('DOMContentLoaded', () => {
  (0,_component_storeSlider__WEBPACK_IMPORTED_MODULE_0__.StoreSlider)();
  (0,_component_storeSlider__WEBPACK_IMPORTED_MODULE_0__.StoreSliderSub)();
  (0,_component_autoSlider__WEBPACK_IMPORTED_MODULE_1__.AutoSlider)();
  (0,_component_fadeInList__WEBPACK_IMPORTED_MODULE_2__.FadeInList)();
  // FadeIn();
  // SmoothScrolling();
});

/***/ }),

/***/ "./src/assets/scss/styles.scss":
/*!*************************************!*\
  !*** ./src/assets/scss/styles.scss ***!
  \*************************************/
/***/ (() => {

// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/global */
/******/ 	(() => {
/******/ 		__webpack_require__.g = (function() {
/******/ 			if (typeof globalThis === 'object') return globalThis;
/******/ 			try {
/******/ 				return this || new Function('return this')();
/******/ 			} catch (e) {
/******/ 				if (typeof window === 'object') return window;
/******/ 			}
/******/ 		})();
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktemplate"] = self["webpackChunktemplate"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["vendor"], () => (__webpack_require__("./src/assets/js/main.js")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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RUE7VUFDQTtVQUNBOztVQUVBO1VBQ0E7Ozs7O1dDekJBO1dBQ0E7V0FDQTtXQUNBO1dBQ0EsK0JBQStCLHdDQUF3QztXQUN2RTtXQUNBO1dBQ0E7V0FDQTtXQUNBLGlCQUFpQixxQkFBcUI7V0FDdEM7V0FDQTtXQUNBLGtCQUFrQixxQkFBcUI7V0FDdkM7V0FDQTtXQUNBLEtBQUs7V0FDTDtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7Ozs7O1dDM0JBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQSxpQ0FBaUMsV0FBVztXQUM1QztXQUNBOzs7OztXQ1BBO1dBQ0E7V0FDQTtXQUNBO1dBQ0EseUNBQXlDLHdDQUF3QztXQUNqRjtXQUNBO1dBQ0E7Ozs7O1dDUEE7V0FDQTtXQUNBO1dBQ0E7V0FDQSxHQUFHO1dBQ0g7V0FDQTtXQUNBLENBQUM7Ozs7O1dDUEQ7Ozs7O1dDQUE7O1dBRUE7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBOztXQUVBOztXQUVBOztXQUVBOztXQUVBOztXQUVBOztXQUVBOztXQUVBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBLE1BQU0scUJBQXFCO1dBQzNCO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7V0FDQTtXQUNBO1dBQ0E7O1dBRUE7V0FDQTtXQUNBOzs7OztVRWhEQTtVQUNBO1VBQ0E7VUFDQTtVQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vdGVtcGxhdGUvLi9zcmMvYXNzZXRzL2pzL2NvbXBvbmVudC9hdXRvU2xpZGVyLmpzIiwid2VicGFjazovL3RlbXBsYXRlLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvZmFkZUluLmpzIiwid2VicGFjazovL3RlbXBsYXRlLy4vc3JjL2Fzc2V0cy9qcy9jb21wb25lbnQvZmFkZUluTGlzdC5qcyIsIndlYnBhY2s6Ly90ZW1wbGF0ZS8uL3NyYy9hc3NldHMvanMvY29tcG9uZW50L3Ntb290aFNjcm9sbGluZy5qcyIsIndlYnBhY2s6Ly90ZW1wbGF0ZS8uL3NyYy9hc3NldHMvanMvY29tcG9uZW50L3N0b3JlU2xpZGVyLmpzIiwid2VicGFjazovL3RlbXBsYXRlLy4vc3JjL2Fzc2V0cy9qcy9tYWluLmpzIiwid2VicGFjazovL3RlbXBsYXRlLy4vc3JjL2Fzc2V0cy9zY3NzL3N0eWxlcy5zY3NzP2Y1ZTAiLCJ3ZWJwYWNrOi8vdGVtcGxhdGUvd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vdGVtcGxhdGUvd2VicGFjay9ydW50aW1lL2NodW5rIGxvYWRlZCIsIndlYnBhY2s6Ly90ZW1wbGF0ZS93ZWJwYWNrL3J1bnRpbWUvY29tcGF0IGdldCBkZWZhdWx0IGV4cG9ydCIsIndlYnBhY2s6Ly90ZW1wbGF0ZS93ZWJwYWNrL3J1bnRpbWUvZGVmaW5lIHByb3BlcnR5IGdldHRlcnMiLCJ3ZWJwYWNrOi8vdGVtcGxhdGUvd2VicGFjay9ydW50aW1lL2dsb2JhbCIsIndlYnBhY2s6Ly90ZW1wbGF0ZS93ZWJwYWNrL3J1bnRpbWUvaGFzT3duUHJvcGVydHkgc2hvcnRoYW5kIiwid2VicGFjazovL3RlbXBsYXRlL3dlYnBhY2svcnVudGltZS9qc29ucCBjaHVuayBsb2FkaW5nIiwid2VicGFjazovL3RlbXBsYXRlL3dlYnBhY2svYmVmb3JlLXN0YXJ0dXAiLCJ3ZWJwYWNrOi8vdGVtcGxhdGUvd2VicGFjay9zdGFydHVwIiwid2VicGFjazovL3RlbXBsYXRlL3dlYnBhY2svYWZ0ZXItc3RhcnR1cCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgU3BsaWRlIGZyb20gJ0BzcGxpZGVqcy9zcGxpZGUnO1xuaW1wb3J0IHsgQXV0b1Njcm9sbCB9IGZyb20gJ0BzcGxpZGVqcy9zcGxpZGUtZXh0ZW5zaW9uLWF1dG8tc2Nyb2xsJztcblxuZXhwb3J0IGZ1bmN0aW9uIEF1dG9TbGlkZXIoKSB7XG4gIGNvbnN0IHNwbGlkZUVsZW1lbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuanMtYXV0b1NsaWRlcicpO1xuICBpZiAoc3BsaWRlRWxlbWVudCkge1xuICAgIGluaXRpYWxpemVTbGlkZXIoc3BsaWRlRWxlbWVudCk7XG4gIH1cbn1cblxuZnVuY3Rpb24gaW5pdGlhbGl6ZVNsaWRlcihlbGVtZW50KSB7XG4gIG5ldyBTcGxpZGUoZWxlbWVudCwge1xuICAgIHR5cGU6ICdsb29wJyxcbiAgICBhcnJvd3M6IGZhbHNlLFxuICAgIHJld2luZDogdHJ1ZSxcbiAgICBwYWdpbmF0aW9uOiBmYWxzZSxcbiAgICBwYXVzZU9uSG92ZXI6IGZhbHNlLFxuICAgIHBhdXNlT25Gb2N1czogZmFsc2UsXG4gICAgZHJhZzogZmFsc2UsXG4gICAgYXV0b1dpZHRoOiB0cnVlLFxuICAgIGdhcDogMCxcbiAgICBhdXRvU2Nyb2xsOiB7XG4gICAgICBwYXVzZU9uSG92ZXI6IGZhbHNlLFxuICAgICAgcGF1c2VPbkZvY3VzOiBmYWxzZSxcbiAgICAgIHNwZWVkOiAwLjUsXG4gICAgfSxcbiAgfSkubW91bnQoeyBBdXRvU2Nyb2xsIH0pO1xufSIsIi8qKlxuICog44OV44Kn44O844OJ44Kk44Oz44Ki44OL44Oh44O844K344On44OzXG4gKi9cblxuaW1wb3J0IHsgZ3NhcCB9IGZyb20gXCJnc2FwXCI7XG5pbXBvcnQgeyBTY3JvbGxUcmlnZ2VyIH0gZnJvbSBcImdzYXAvU2Nyb2xsVHJpZ2dlclwiO1xuXG5leHBvcnQgZnVuY3Rpb24gRmFkZUluKCkge1xuICBjb25zdCBjb250ZW50cyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5qcy1mYWRlSW4nKTtcbiAgZ3NhcC5yZWdpc3RlclBsdWdpbihTY3JvbGxUcmlnZ2VyKTtcblxuICBnc2FwLnV0aWxzLnRvQXJyYXkoY29udGVudHMpLmZvckVhY2goY29udGFpbmVyID0+IHtcbiAgICBnc2FwLmZyb20oY29udGFpbmVyLCB7XG4gICAgICBhdXRvQWxwaGE6IDAsXG4gICAgICBkdXJhdGlvbjogMSwgLyog44Ki44OL44Oh44O844K344On44Oz44Gu5pmC6ZaTICovXG4gICAgICBlYXNlOiAncG93ZXIyLm91dCcsXG4gICAgICBzY3JvbGxUcmlnZ2VyOiB7XG4gICAgICAgIHRyaWdnZXI6IGNvbnRhaW5lcixcbiAgICAgICAgc3RhcnQ6IFwidG9wIDgwJVwiLCAvLyDnlLvpnaLjga7kuIrnq6/jgYzjg4jjg6rjgqzjg7zjga44MCXjga7kvY3nva7jgavpgZTjgZfjgZ/jgonjgqLjg4vjg6Hjg7zjgrfjg6fjg7Pplovlp4tcbiAgICAgICAgLy8gbWFya2VyczogdHJ1ZSxcbiAgICAgIH1cbiAgICB9KTtcbiAgfSk7XG59IiwiLyoqXG4gKiDjg5Xjgqfjg7zjg4njgqTjg7Pjg6rjgrnjg4jjgqLjg4vjg6Hjg7zjgrfjg6fjg7NcbiAqL1xuXG5pbXBvcnQgeyBnc2FwIH0gZnJvbSBcImdzYXBcIjtcbmltcG9ydCB7IFNjcm9sbFRyaWdnZXIgfSBmcm9tIFwiZ3NhcC9TY3JvbGxUcmlnZ2VyXCI7XG5cbmV4cG9ydCBmdW5jdGlvbiBGYWRlSW5MaXN0KCkge1xuICBjb25zdCBsaXN0cyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5qcy1mYWRlSW5MaXN0Jyk7IC8vIOikh+aVsOOBruODquOCueODiOOCkuWPluW+l1xuICBnc2FwLnJlZ2lzdGVyUGx1Z2luKFNjcm9sbFRyaWdnZXIpO1xuXG4gIGxpc3RzLmZvckVhY2goKGxpc3QpID0+IHtcbiAgICBjb25zdCBpdGVtcyA9IEFycmF5LmZyb20obGlzdC5xdWVyeVNlbGVjdG9yQWxsKCcuanMtZmFkZUluTGlzdF9faXRlbScpKTsgLy8g44Oq44K544OI5YaF44Gu44Ki44Kk44OG44Og44KS5Y+W5b6XXG4gICAgY29uc3Qgc2h1ZmZsZWRJdGVtcyA9IGl0ZW1zLnNvcnQoKCkgPT4gTWF0aC5yYW5kb20oKSAtIDAuNSk7IC8vIOOCouOCpOODhuODoOOCkuODqeODs+ODgOODoOOBq+S4puOBs+abv+OBiFxuICAgIGNvbnN0IHRsID0gZ3NhcC50aW1lbGluZSh7XG4gICAgICBzY3JvbGxUcmlnZ2VyOiB7XG4gICAgICAgIHRyaWdnZXI6IGxpc3QsIC8vIOWQhOODquOCueODiOOCkuODiOODquOCrOODvOOBq+ioreWumlxuICAgICAgICBzdGFydDogXCJ0b3AgODAlXCIsXG4gICAgICAgIC8vIG1hcmtlcnM6IHRydWUsIC8vIOW/heimgeOBq+W/nOOBmOOBpuWJiumZpFxuICAgICAgfVxuICAgIH0pO1xuXG4gICAgc2h1ZmZsZWRJdGVtcy5mb3JFYWNoKChpdGVtLCBpbmRleCkgPT4ge1xuICAgICAgdGwuZnJvbShpdGVtLCB7XG4gICAgICAgIHk6IFwiMTUlXCIsXG4gICAgICAgIGF1dG9BbHBoYTogMCxcbiAgICAgICAgZHVyYXRpb246IDAuNSxcbiAgICAgICAgZWFzZTogJ3Bvd2VyMi5vdXQnXG4gICAgICB9LCBpbmRleCAqIDAuMyk7IC8vIOmBheW7tuOCkui/veWKoFxuICAgIH0pO1xuICB9KTtcbn1cbiIsImltcG9ydCBTbW9vdGhTY3JvbGwgZnJvbSBcInNtb290aC1zY3JvbGxcIjtcblxuLyoqXG4gKiDjgrnjg6Djg7zjgrnjgrnjgq/jg63jg7zjg6tcbiAqL1xuZXhwb3J0IGZ1bmN0aW9uIFNtb290aFNjcm9sbGluZygpIHtcbiAgY29uc3Qgc2Nyb2xsID0gbmV3IFNtb290aFNjcm9sbCgnYVtocmVmKj1cIiNcIl0nLCB7XG4gICAgc3BlZWQ6IDgwMCxcbiAgICBzcGVlZEFzRHVyYXRpb246IHRydWUsXG4gICAgaWdub3JlOiAnW2RhdGEtc2Nyb2xsLWlnbm9yZV0nLFxuICB9KVxufVxuIiwiLyoqXG4gKiBzdG9yZeOCueODqeOCpOODgOODvFxuICovXG5leHBvcnQgZnVuY3Rpb24gU3RvcmVTbGlkZXIoKSB7XG4gIGNvbnN0IHNsaWRlcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuanMtc3RvcmVTbGlkZXInKTtcbiAgaWYgKCFzbGlkZXJzLmxlbmd0aCkgcmV0dXJuO1xuXG4gIHNsaWRlcnMuZm9yRWFjaChzbGlkZXIgPT4ge1xuICAgIGNvbnN0IGxpc3RJdGVtcyA9IHNsaWRlci5xdWVyeVNlbGVjdG9yQWxsKCcuanMtc3RvcmVTbGlkZXJfX2l0ZW0nKTtcbiAgICBpZiAoIWxpc3RJdGVtcy5sZW5ndGgpIHJldHVybjsgLy8gbGlzdEl0ZW1z44GM56m644Gu5aC05ZCI44Gv5Yem55CG44KS5Lit5patXG5cbiAgICBsZXQgYWN0aXZlSW5kZXggPSAwO1xuXG4gICAgLy8g5Yid5pyf54q25oWL44Gn5pyA5Yid44GubGnjgatpcy1hY3RpdmXjgq/jg6njgrnjgpLov73liqBcbiAgICBsaXN0SXRlbXNbYWN0aXZlSW5kZXhdLmNsYXNzTGlzdC5hZGQoJ2lzLWFjdGl2ZScpO1xuICAgIGxpc3RJdGVtc1thY3RpdmVJbmRleF0uc2V0QXR0cmlidXRlKCdhcmlhLWhpZGRlbicsICdmYWxzZScpO1xuXG4gICAgbGlzdEl0ZW1zLmZvckVhY2goKGl0ZW0sIGluZGV4KSA9PiB7XG4gICAgICBpZiAoaW5kZXggIT09IGFjdGl2ZUluZGV4KSB7XG4gICAgICAgIGl0ZW0uc2V0QXR0cmlidXRlKCdhcmlhLWhpZGRlbicsICd0cnVlJyk7XG4gICAgICB9XG4gICAgICBpdGVtLnNldEF0dHJpYnV0ZSgncm9sZScsICd0YWJwYW5lbCcpO1xuICAgIH0pO1xuXG4gICAgc2V0SW50ZXJ2YWwoKCkgPT4ge1xuICAgICAgLy8g54++5Zyo44GuaXMtYWN0aXZl44Kv44Op44K544KS5YmK6ZmkXG4gICAgICBsaXN0SXRlbXNbYWN0aXZlSW5kZXhdLmNsYXNzTGlzdC5yZW1vdmUoJ2lzLWFjdGl2ZScpO1xuICAgICAgbGlzdEl0ZW1zW2FjdGl2ZUluZGV4XS5zZXRBdHRyaWJ1dGUoJ2FyaWEtaGlkZGVuJywgJ3RydWUnKTtcblxuICAgICAgLy8g5qyh44Gu44Kk44Oz44OH44OD44Kv44K544Gr56e75YuV77yI5pyA5b6M44Gq44KJ5pyA5Yid44Gr5oi744KL77yJXG4gICAgICBhY3RpdmVJbmRleCA9IChhY3RpdmVJbmRleCArIDEpICUgbGlzdEl0ZW1zLmxlbmd0aDtcblxuICAgICAgLy8g5paw44GX44GEaXMtYWN0aXZl44Kv44Op44K544KS6L+95YqgXG4gICAgICBsaXN0SXRlbXNbYWN0aXZlSW5kZXhdLmNsYXNzTGlzdC5hZGQoJ2lzLWFjdGl2ZScpO1xuICAgICAgbGlzdEl0ZW1zW2FjdGl2ZUluZGV4XS5zZXRBdHRyaWJ1dGUoJ2FyaWEtaGlkZGVuJywgJ2ZhbHNlJyk7XG4gICAgfSwgNTAwMCk7XG4gIH0pO1xufVxuXG4vKipcbiAqIHN0b3Jl44K144OW44K544Op44Kk44OA44O8XG4gKi9cbmV4cG9ydCBmdW5jdGlvbiBTdG9yZVNsaWRlclN1YigpIHtcbiAgY29uc3Qgc2xpZGVyc1N1YiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5qcy1zdG9yZVNsaWRlclN1YicpO1xuICBpZiAoIXNsaWRlcnNTdWIubGVuZ3RoKSByZXR1cm47XG5cbiAgc2xpZGVyc1N1Yi5mb3JFYWNoKHNsaWRlclN1YiA9PiB7XG4gICAgY29uc3Qgc3ViSXRlbXMgPSBzbGlkZXJTdWIucXVlcnlTZWxlY3RvckFsbCgnLmpzLXN0b3JlU2xpZGVyU3ViX19pdGVtJyk7XG4gICAgY29uc3QgZGVsYXlzID0gWzAsIDIwMDAsIDMwMDAsIDEwMDBdOyAvLyDmjIflrprjgZXjgozjgZ/pgYXlu7bmmYLplpPvvIjjg5/jg6rnp5LvvIlcblxuICAgIHN1Ykl0ZW1zLmZvckVhY2goKHN1Ykl0ZW0sIGluZGV4KSA9PiB7XG4gICAgICBjb25zdCBpbWFnZXMgPSBzdWJJdGVtLnF1ZXJ5U2VsZWN0b3JBbGwoJ2ltZycpO1xuICAgICAgaWYgKCFpbWFnZXMubGVuZ3RoKSByZXR1cm47IC8vIGltYWdlc+OBjOepuuOBruWgtOWQiOOBr+WHpueQhuOCkuS4reaWrVxuXG4gICAgICBsZXQgYWN0aXZlU3ViSW5kZXggPSAwO1xuXG4gICAgICAvLyDliJ3mnJ/nirbmhYvjgafmnIDliJ3jga5pbWfjgatpcy1hY3RpdmXjgq/jg6njgrnjgpLov73liqBcbiAgICAgIGltYWdlc1thY3RpdmVTdWJJbmRleF0uY2xhc3NMaXN0LmFkZCgnaXMtYWN0aXZlJyk7XG5cbiAgICAgIHNldFRpbWVvdXQoKCkgPT4ge1xuICAgICAgICBzZXRJbnRlcnZhbCgoKSA9PiB7XG4gICAgICAgICAgLy8g54++5Zyo44GuaXMtYWN0aXZl44Kv44Op44K544KS5YmK6ZmkXG4gICAgICAgICAgaW1hZ2VzW2FjdGl2ZVN1YkluZGV4XS5jbGFzc0xpc3QucmVtb3ZlKCdpcy1hY3RpdmUnKTtcblxuICAgICAgICAgIC8vIOasoeOBruOCpOODs+ODh+ODg+OCr+OCueOBq+enu+WLle+8iOacgOW+jOOBquOCieacgOWIneOBq+aIu+OCi++8iVxuICAgICAgICAgIGFjdGl2ZVN1YkluZGV4ID0gKGFjdGl2ZVN1YkluZGV4ICsgMSkgJSBpbWFnZXMubGVuZ3RoO1xuXG4gICAgICAgICAgLy8g5paw44GX44GEaXMtYWN0aXZl44Kv44Op44K544KS6L+95YqgXG4gICAgICAgICAgaW1hZ2VzW2FjdGl2ZVN1YkluZGV4XS5jbGFzc0xpc3QuYWRkKCdpcy1hY3RpdmUnKTtcbiAgICAgICAgfSwgNTAwMCk7XG4gICAgICB9LCBkZWxheXNbaW5kZXggJSBkZWxheXMubGVuZ3RoXSk7IC8vIOaMh+WumuOBleOCjOOBn+mBheW7tuaZgumWk+OCkuS9v+eUqFxuICAgIH0pO1xuICB9KTtcbn1cbiIsImltcG9ydCB7IFN0b3JlU2xpZGVyLCBTdG9yZVNsaWRlclN1YiB9IGZyb20gJy4vY29tcG9uZW50L3N0b3JlU2xpZGVyJ1xuaW1wb3J0IHsgQXV0b1NsaWRlciB9IGZyb20gJy4vY29tcG9uZW50L2F1dG9TbGlkZXInXG5pbXBvcnQgeyBGYWRlSW5MaXN0IH0gZnJvbSAnLi9jb21wb25lbnQvZmFkZUluTGlzdCdcbmltcG9ydCB7IEZhZGVJbiB9IGZyb20gJy4vY29tcG9uZW50L2ZhZGVJbidcbmltcG9ydCB7IFNtb290aFNjcm9sbGluZyB9IGZyb20gJy4vY29tcG9uZW50L3Ntb290aFNjcm9sbGluZydcblxuLy8gY3NzXG5pbXBvcnQgJy4uL3Njc3Mvc3R5bGVzLnNjc3MnO1xuXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgKCkgPT4ge1xuICBTdG9yZVNsaWRlcigpO1xuICBTdG9yZVNsaWRlclN1YigpO1xuICBBdXRvU2xpZGVyKCk7XG4gIEZhZGVJbkxpc3QoKTtcbiAgLy8gRmFkZUluKCk7XG4gIC8vIFNtb290aFNjcm9sbGluZygpO1xufSk7XG4iLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBUaGUgbW9kdWxlIGNhY2hlXG52YXIgX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fID0ge307XG5cbi8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG5mdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuXHR2YXIgY2FjaGVkTW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXTtcblx0aWYgKGNhY2hlZE1vZHVsZSAhPT0gdW5kZWZpbmVkKSB7XG5cdFx0cmV0dXJuIGNhY2hlZE1vZHVsZS5leHBvcnRzO1xuXHR9XG5cdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG5cdHZhciBtb2R1bGUgPSBfX3dlYnBhY2tfbW9kdWxlX2NhY2hlX19bbW9kdWxlSWRdID0ge1xuXHRcdC8vIG5vIG1vZHVsZS5pZCBuZWVkZWRcblx0XHQvLyBubyBtb2R1bGUubG9hZGVkIG5lZWRlZFxuXHRcdGV4cG9ydHM6IHt9XG5cdH07XG5cblx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG5cdF9fd2VicGFja19tb2R1bGVzX19bbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG5cdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG5cdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbn1cblxuLy8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbl9fd2VicGFja19yZXF1aXJlX18ubSA9IF9fd2VicGFja19tb2R1bGVzX187XG5cbiIsInZhciBkZWZlcnJlZCA9IFtdO1xuX193ZWJwYWNrX3JlcXVpcmVfXy5PID0gKHJlc3VsdCwgY2h1bmtJZHMsIGZuLCBwcmlvcml0eSkgPT4ge1xuXHRpZihjaHVua0lkcykge1xuXHRcdHByaW9yaXR5ID0gcHJpb3JpdHkgfHwgMDtcblx0XHRmb3IodmFyIGkgPSBkZWZlcnJlZC5sZW5ndGg7IGkgPiAwICYmIGRlZmVycmVkW2kgLSAxXVsyXSA+IHByaW9yaXR5OyBpLS0pIGRlZmVycmVkW2ldID0gZGVmZXJyZWRbaSAtIDFdO1xuXHRcdGRlZmVycmVkW2ldID0gW2NodW5rSWRzLCBmbiwgcHJpb3JpdHldO1xuXHRcdHJldHVybjtcblx0fVxuXHR2YXIgbm90RnVsZmlsbGVkID0gSW5maW5pdHk7XG5cdGZvciAodmFyIGkgPSAwOyBpIDwgZGVmZXJyZWQubGVuZ3RoOyBpKyspIHtcblx0XHR2YXIgW2NodW5rSWRzLCBmbiwgcHJpb3JpdHldID0gZGVmZXJyZWRbaV07XG5cdFx0dmFyIGZ1bGZpbGxlZCA9IHRydWU7XG5cdFx0Zm9yICh2YXIgaiA9IDA7IGogPCBjaHVua0lkcy5sZW5ndGg7IGorKykge1xuXHRcdFx0aWYgKChwcmlvcml0eSAmIDEgPT09IDAgfHwgbm90RnVsZmlsbGVkID49IHByaW9yaXR5KSAmJiBPYmplY3Qua2V5cyhfX3dlYnBhY2tfcmVxdWlyZV9fLk8pLmV2ZXJ5KChrZXkpID0+IChfX3dlYnBhY2tfcmVxdWlyZV9fLk9ba2V5XShjaHVua0lkc1tqXSkpKSkge1xuXHRcdFx0XHRjaHVua0lkcy5zcGxpY2Uoai0tLCAxKTtcblx0XHRcdH0gZWxzZSB7XG5cdFx0XHRcdGZ1bGZpbGxlZCA9IGZhbHNlO1xuXHRcdFx0XHRpZihwcmlvcml0eSA8IG5vdEZ1bGZpbGxlZCkgbm90RnVsZmlsbGVkID0gcHJpb3JpdHk7XG5cdFx0XHR9XG5cdFx0fVxuXHRcdGlmKGZ1bGZpbGxlZCkge1xuXHRcdFx0ZGVmZXJyZWQuc3BsaWNlKGktLSwgMSlcblx0XHRcdHZhciByID0gZm4oKTtcblx0XHRcdGlmIChyICE9PSB1bmRlZmluZWQpIHJlc3VsdCA9IHI7XG5cdFx0fVxuXHR9XG5cdHJldHVybiByZXN1bHQ7XG59OyIsIi8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG5fX3dlYnBhY2tfcmVxdWlyZV9fLm4gPSAobW9kdWxlKSA9PiB7XG5cdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuXHRcdCgpID0+IChtb2R1bGVbJ2RlZmF1bHQnXSkgOlxuXHRcdCgpID0+IChtb2R1bGUpO1xuXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmQoZ2V0dGVyLCB7IGE6IGdldHRlciB9KTtcblx0cmV0dXJuIGdldHRlcjtcbn07IiwiLy8gZGVmaW5lIGdldHRlciBmdW5jdGlvbnMgZm9yIGhhcm1vbnkgZXhwb3J0c1xuX193ZWJwYWNrX3JlcXVpcmVfXy5kID0gKGV4cG9ydHMsIGRlZmluaXRpb24pID0+IHtcblx0Zm9yKHZhciBrZXkgaW4gZGVmaW5pdGlvbikge1xuXHRcdGlmKF9fd2VicGFja19yZXF1aXJlX18ubyhkZWZpbml0aW9uLCBrZXkpICYmICFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywga2V5KSkge1xuXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIGtleSwgeyBlbnVtZXJhYmxlOiB0cnVlLCBnZXQ6IGRlZmluaXRpb25ba2V5XSB9KTtcblx0XHR9XG5cdH1cbn07IiwiX193ZWJwYWNrX3JlcXVpcmVfXy5nID0gKGZ1bmN0aW9uKCkge1xuXHRpZiAodHlwZW9mIGdsb2JhbFRoaXMgPT09ICdvYmplY3QnKSByZXR1cm4gZ2xvYmFsVGhpcztcblx0dHJ5IHtcblx0XHRyZXR1cm4gdGhpcyB8fCBuZXcgRnVuY3Rpb24oJ3JldHVybiB0aGlzJykoKTtcblx0fSBjYXRjaCAoZSkge1xuXHRcdGlmICh0eXBlb2Ygd2luZG93ID09PSAnb2JqZWN0JykgcmV0dXJuIHdpbmRvdztcblx0fVxufSkoKTsiLCJfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSAob2JqLCBwcm9wKSA9PiAoT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iaiwgcHJvcCkpIiwiLy8gbm8gYmFzZVVSSVxuXG4vLyBvYmplY3QgdG8gc3RvcmUgbG9hZGVkIGFuZCBsb2FkaW5nIGNodW5rc1xuLy8gdW5kZWZpbmVkID0gY2h1bmsgbm90IGxvYWRlZCwgbnVsbCA9IGNodW5rIHByZWxvYWRlZC9wcmVmZXRjaGVkXG4vLyBbcmVzb2x2ZSwgcmVqZWN0LCBQcm9taXNlXSA9IGNodW5rIGxvYWRpbmcsIDAgPSBjaHVuayBsb2FkZWRcbnZhciBpbnN0YWxsZWRDaHVua3MgPSB7XG5cdFwibWFpblwiOiAwXG59O1xuXG4vLyBubyBjaHVuayBvbiBkZW1hbmQgbG9hZGluZ1xuXG4vLyBubyBwcmVmZXRjaGluZ1xuXG4vLyBubyBwcmVsb2FkZWRcblxuLy8gbm8gSE1SXG5cbi8vIG5vIEhNUiBtYW5pZmVzdFxuXG5fX3dlYnBhY2tfcmVxdWlyZV9fLk8uaiA9IChjaHVua0lkKSA9PiAoaW5zdGFsbGVkQ2h1bmtzW2NodW5rSWRdID09PSAwKTtcblxuLy8gaW5zdGFsbCBhIEpTT05QIGNhbGxiYWNrIGZvciBjaHVuayBsb2FkaW5nXG52YXIgd2VicGFja0pzb25wQ2FsbGJhY2sgPSAocGFyZW50Q2h1bmtMb2FkaW5nRnVuY3Rpb24sIGRhdGEpID0+IHtcblx0dmFyIFtjaHVua0lkcywgbW9yZU1vZHVsZXMsIHJ1bnRpbWVdID0gZGF0YTtcblx0Ly8gYWRkIFwibW9yZU1vZHVsZXNcIiB0byB0aGUgbW9kdWxlcyBvYmplY3QsXG5cdC8vIHRoZW4gZmxhZyBhbGwgXCJjaHVua0lkc1wiIGFzIGxvYWRlZCBhbmQgZmlyZSBjYWxsYmFja1xuXHR2YXIgbW9kdWxlSWQsIGNodW5rSWQsIGkgPSAwO1xuXHRpZihjaHVua0lkcy5zb21lKChpZCkgPT4gKGluc3RhbGxlZENodW5rc1tpZF0gIT09IDApKSkge1xuXHRcdGZvcihtb2R1bGVJZCBpbiBtb3JlTW9kdWxlcykge1xuXHRcdFx0aWYoX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1vcmVNb2R1bGVzLCBtb2R1bGVJZCkpIHtcblx0XHRcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tW21vZHVsZUlkXSA9IG1vcmVNb2R1bGVzW21vZHVsZUlkXTtcblx0XHRcdH1cblx0XHR9XG5cdFx0aWYocnVudGltZSkgdmFyIHJlc3VsdCA9IHJ1bnRpbWUoX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cdH1cblx0aWYocGFyZW50Q2h1bmtMb2FkaW5nRnVuY3Rpb24pIHBhcmVudENodW5rTG9hZGluZ0Z1bmN0aW9uKGRhdGEpO1xuXHRmb3IoO2kgPCBjaHVua0lkcy5sZW5ndGg7IGkrKykge1xuXHRcdGNodW5rSWQgPSBjaHVua0lkc1tpXTtcblx0XHRpZihfX3dlYnBhY2tfcmVxdWlyZV9fLm8oaW5zdGFsbGVkQ2h1bmtzLCBjaHVua0lkKSAmJiBpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0pIHtcblx0XHRcdGluc3RhbGxlZENodW5rc1tjaHVua0lkXVswXSgpO1xuXHRcdH1cblx0XHRpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0gPSAwO1xuXHR9XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fLk8ocmVzdWx0KTtcbn1cblxudmFyIGNodW5rTG9hZGluZ0dsb2JhbCA9IHNlbGZbXCJ3ZWJwYWNrQ2h1bmt0ZW1wbGF0ZVwiXSA9IHNlbGZbXCJ3ZWJwYWNrQ2h1bmt0ZW1wbGF0ZVwiXSB8fCBbXTtcbmNodW5rTG9hZGluZ0dsb2JhbC5mb3JFYWNoKHdlYnBhY2tKc29ucENhbGxiYWNrLmJpbmQobnVsbCwgMCkpO1xuY2h1bmtMb2FkaW5nR2xvYmFsLnB1c2ggPSB3ZWJwYWNrSnNvbnBDYWxsYmFjay5iaW5kKG51bGwsIGNodW5rTG9hZGluZ0dsb2JhbC5wdXNoLmJpbmQoY2h1bmtMb2FkaW5nR2xvYmFsKSk7IiwiIiwiLy8gc3RhcnR1cFxuLy8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4vLyBUaGlzIGVudHJ5IG1vZHVsZSBkZXBlbmRzIG9uIG90aGVyIGxvYWRlZCBjaHVua3MgYW5kIGV4ZWN1dGlvbiBuZWVkIHRvIGJlIGRlbGF5ZWRcbnZhciBfX3dlYnBhY2tfZXhwb3J0c19fID0gX193ZWJwYWNrX3JlcXVpcmVfXy5PKHVuZGVmaW5lZCwgW1widmVuZG9yXCJdLCAoKSA9PiAoX193ZWJwYWNrX3JlcXVpcmVfXyhcIi4vc3JjL2Fzc2V0cy9qcy9tYWluLmpzXCIpKSlcbl9fd2VicGFja19leHBvcnRzX18gPSBfX3dlYnBhY2tfcmVxdWlyZV9fLk8oX193ZWJwYWNrX2V4cG9ydHNfXyk7XG4iLCIiXSwibmFtZXMiOlsiU3BsaWRlIiwiQXV0b1Njcm9sbCIsIkF1dG9TbGlkZXIiLCJzcGxpZGVFbGVtZW50IiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiaW5pdGlhbGl6ZVNsaWRlciIsImVsZW1lbnQiLCJ0eXBlIiwiYXJyb3dzIiwicmV3aW5kIiwicGFnaW5hdGlvbiIsInBhdXNlT25Ib3ZlciIsInBhdXNlT25Gb2N1cyIsImRyYWciLCJhdXRvV2lkdGgiLCJnYXAiLCJhdXRvU2Nyb2xsIiwic3BlZWQiLCJtb3VudCIsImdzYXAiLCJTY3JvbGxUcmlnZ2VyIiwiRmFkZUluIiwiY29udGVudHMiLCJxdWVyeVNlbGVjdG9yQWxsIiwicmVnaXN0ZXJQbHVnaW4iLCJ1dGlscyIsInRvQXJyYXkiLCJmb3JFYWNoIiwiY29udGFpbmVyIiwiZnJvbSIsImF1dG9BbHBoYSIsImR1cmF0aW9uIiwiZWFzZSIsInNjcm9sbFRyaWdnZXIiLCJ0cmlnZ2VyIiwic3RhcnQiLCJGYWRlSW5MaXN0IiwibGlzdHMiLCJsaXN0IiwiaXRlbXMiLCJBcnJheSIsInNodWZmbGVkSXRlbXMiLCJzb3J0IiwiTWF0aCIsInJhbmRvbSIsInRsIiwidGltZWxpbmUiLCJpdGVtIiwiaW5kZXgiLCJ5IiwiU21vb3RoU2Nyb2xsIiwiU21vb3RoU2Nyb2xsaW5nIiwic2Nyb2xsIiwic3BlZWRBc0R1cmF0aW9uIiwiaWdub3JlIiwiU3RvcmVTbGlkZXIiLCJzbGlkZXJzIiwibGVuZ3RoIiwic2xpZGVyIiwibGlzdEl0ZW1zIiwiYWN0aXZlSW5kZXgiLCJjbGFzc0xpc3QiLCJhZGQiLCJzZXRBdHRyaWJ1dGUiLCJzZXRJbnRlcnZhbCIsInJlbW92ZSIsIlN0b3JlU2xpZGVyU3ViIiwic2xpZGVyc1N1YiIsInNsaWRlclN1YiIsInN1Ykl0ZW1zIiwiZGVsYXlzIiwic3ViSXRlbSIsImltYWdlcyIsImFjdGl2ZVN1YkluZGV4Iiwic2V0VGltZW91dCIsImFkZEV2ZW50TGlzdGVuZXIiXSwic291cmNlUm9vdCI6IiJ9