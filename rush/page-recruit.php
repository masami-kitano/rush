<?php
/**
 *
 * front page template
 *
 */
get_header();
?>

<?php
// TOPを固定ページ化した場合
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
?>
    <main class="bg-beige overflow-hidden">
            <section class="c-section pt-[1.875rem]">
              <div class="c-section__inner relative">
                <ul class="js-storeSlider c-slider">
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-01-pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-01-sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-02-pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-02-sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-03-pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-03-sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                </ul>
                <h1 class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2"><img class="w-[17.063rem] tablet:w-[10.25rem]" src="<?= THEME_FILE_URI ?>/assets/images/common/logo_img_1.svg" alt="SAUNA PRO TEAM RUSH 可能性超無限大のサウナ屋" width="164" height="144 " decoding="async" loading="eager"></h1>
                <div class="absolute top-0 left-[50%] -translate-x-1/2 -translate-y-1/2 whitespace-nowrap font-black font-en tracking-[.15em] text-[1.25rem] text-black tablet:text-[1rem]">サウナ専門施工会社｜SAUNA PRO TEAM RUSH</div>
              </div>
              <div class="absolute bottom-[-6.563rem] left-[50%] -translate-x-1/2 rotate-[7deg] z-10 w-full tablet:bottom-[-4.438rem]">
                <ul class="c-autoSlider">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                </ul>
              </div>
            </section>
            <section class="c-section pt-[11.875rem] tablet:pt-[7.5rem]">
              <div class="c-section__inner c-recruit">
                  <h2 class="c-title" lang="en">採用情報</h2>
                  <div class="c-title__sub">rush recruiting</div>
                  <p class="c-recruit__lead">サウナ屋になりたいなら<br>この指、とまらないか？</p>
                  <p class="c-recruit__text">図面を引くだけでも、木を組むだけでも、<br>タイルを貼るだけでも完成しない。<br>熱の流れを考える人がいて、湿度を読む人がいて、<br>現場を動かす人がいて、最後の1mmを納める人がいる。<br>その全部がひとつにつながって、<br>ようやく“本物”と思える空間が生まれる。<br>設計屋、内装屋、設備屋、タイル屋。<br>気づけば、いろんな肩書きの人間が集まって、<br>なんでもやるチームになってた。<br>RUSHは、どこからどう見ても、サウナ屋。<br>文化を継承し、つくる会社です。</p>
              </div>
            </section>
            
    </main>
<?php
  endwhile;
endif; wp_reset_postdata();
?>

<?php
get_footer();
