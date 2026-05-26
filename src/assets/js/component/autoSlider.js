import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

export function AutoSlider() {
  const splideElement = document.querySelector('.js-autoSlider');
  if (splideElement) {
    initializeSlider(splideElement);
  }
}

function initializeSlider(element) {
  new Splide(element, {
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
      speed: 0.5,
    },
  }).mount({ AutoScroll });
}