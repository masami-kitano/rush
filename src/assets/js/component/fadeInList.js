/**
 * フェードインリストアニメーション
 */

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export function FadeInList() {
  const lists = document.querySelectorAll('.js-fadeInList'); // 複数のリストを取得
  gsap.registerPlugin(ScrollTrigger);

  lists.forEach((list) => {
    const items = Array.from(list.querySelectorAll('.js-fadeInList__item')); // リスト内のアイテムを取得
    const shuffledItems = items.sort(() => Math.random() - 0.5); // アイテムをランダムに並び替え
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: list, // 各リストをトリガーに設定
        start: "top 80%",
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
