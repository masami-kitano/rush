import { StoreSlider, StoreSliderSub } from './component/storeSlider'
import { AutoSlider } from './component/autoSlider'
import { FadeInList } from './component/fadeInList'
import { FadeIn } from './component/fadeIn'
import { SmoothScrolling } from './component/smoothScrolling'

// css
import '../scss/styles.scss';

document.addEventListener('DOMContentLoaded', () => {
  StoreSlider();
  StoreSliderSub();
  AutoSlider();
  FadeInList();
  // FadeIn();
  // SmoothScrolling();
});
