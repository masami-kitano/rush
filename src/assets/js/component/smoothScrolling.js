import SmoothScroll from "smooth-scroll";

/**
 * スムーススクロール
 */
export function SmoothScrolling() {
  const scroll = new SmoothScroll('a[href*="#"]', {
    speed: 800,
    speedAsDuration: true,
    ignore: '[data-scroll-ignore]',
  })
}
