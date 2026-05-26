/**
 * フェードインアニメーション
 */

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export function FadeIn() {
  const contents = document.querySelectorAll('.js-fadeIn');
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray(contents).forEach(container => {
    gsap.from(container, {
      autoAlpha: 0,
      duration: 1, /* アニメーションの時間 */
      ease: 'power2.out',
      scrollTrigger: {
        trigger: container,
        start: "top 80%", // 画面の上端がトリガーの80%の位置に達したらアニメーション開始
        // markers: true,
      }
    });
  });
}