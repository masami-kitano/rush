/**
 * storeスライダー
 */
export function StoreSlider() {
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
export function StoreSliderSub() {
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
