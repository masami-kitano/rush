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
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-01-pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-01-pc.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-02-pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-02-pc.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-03-pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-03-pc.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
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
            <section class="c-section pt-[11.875rem] tablet:pt-[7.5rem] max-w-[80rem] mx-auto">
              <div class="c-section__inner c-recruit">
                <h2 class="c-title" lang="en">採用情報</h2>
                <div class="c-title__sub">rush recruiting</div>
                <p class="c-recruit__lead">サウナ屋になりたいなら<br>この指、とまらないか？</p>
                <div class="relative">
                  <p class="c-recruit__text">
                    図面を引くだけでも、木を組むだけでも、<br>
                    タイルを貼るだけでも完成しない。<br>
                    <br>
                    熱の流れを考える人がいて、湿度を読む人がいて、<br>
                    現場を動かす人がいて、最後の1mmを納める人がいる。<br>
                    <br>
                    その全部がひとつにつながって、<br>
                    ようやく“本物”と思える空間が生まれる。<br>
                    <br>
                    設計屋、内装屋、設備屋、タイル屋。<br>
                    <br>
                    気づけば、いろんな肩書きの人間が集まって、<br>
                    なんでもやるチームになってた。<br>
                    <br>
                    RUSHは、どこからどう見ても、サウナ屋。<br>
                    文化を継承し、つくる会社です。
                  </p>
                  <img class="absolute -top-[0.25rem] left-[12rem] w-[11.25rem]" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-04.png" alt="Sauna Pro Team RUSH" width="180" height="180" decoding="async" loading="eager">
                  <img class="absolute -top-[0.25rem] left-[56rem] w-[8.75rem]" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-05.png" alt="Sauna Pro Team RUSH" width="140" height="140" decoding="async" loading="eager">
                  <img class="absolute top-[15rem] left-[5rem] w-[8.75rem]" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-06.png" alt="Sauna Pro Team RUSH" width="140" height="140" decoding="async" loading="eager">
                  <img class="absolute top-[12rem] left-[64rem] w-[12rem]" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-07.png" alt="Sauna Pro Team RUSH" width="190" height="190" decoding="async" loading="eager">
                </div>
              </div>
            </section>
            <section class="c-section relative pb-[6.25rem] max-w-[80rem] mx-auto">
              <div class="absolute top-[-10rem] -translate-x-1/2 rotate-[-7deg] w-full tablet:top-[-10rem] z-10">
                <ul class="c-autoSlider">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_red.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_red.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_red.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_red.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                </ul>
              </div>
              <ul class="c-recruitCards">
                <li class="c-recruitCards__item">
                  <h3 class="c-recruitCards__title">職人</h3>

                  <p class="c-recruitCards__sub">
                    大工 / 電気 / タイル / 左官 / 塗装
                  </p>

                  <p class="c-recruitCards__text">
                    RUSHおもしろそうだな、自分の技術も使えるかな。
                    <br>
                    仕事あとにサウナ入れたらいいよな。
                  </p>
                  <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">詳しく見る</a>
                  
                </li>
                <li class="c-recruitCards__item">
                  <h3 class="c-recruitCards__title">現場管理</h3>

                  <p class="c-recruitCards__sub">
                    積算経験者優遇
                  </p>

                  <p class="c-recruitCards__text">
                    はちゃめちゃそうだけど、おもしろいやつらをまとめる司令塔になるのもいいかもな。
                  </p>
                  <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">詳しく見る</a>
                  
                </li>
                <li class="c-recruitCards__item">
                  <h3 class="c-recruitCards__title">設計・デザイン</h3>

                  <p class="c-recruitCards__sub">
                    実施図面経験者
                  </p>

                  <p class="c-recruitCards__text">
                    かっこいいだけじゃなくて、ちゃんと成立させる。
                    <br>
                    考え抜いたものを、熱くつくりたい。
                  </p>
                  <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">詳しく見る</a>
                  
                </li>
              </ul>
              <div class="relative">
                <p class="c-entry__subtitle">
                  なんかいいかもと感じたら、まずは、会いに来てほしい。
                </p>
                <p class="c-entry__text">
                  今もRUSHは成長中なので、 どんどんおもしろくなっていく。<br> 
                  唯一無二の会社であり、仲間です。
                </p>
                <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">応募フォームを見る</a>
                <img class="absolute top-[0.25rem] left-[8.25rem] w-[12rem]" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-08.png" alt="Sauna Pro Team RUSH" width="180" height="180" decoding="async" loading="eager">
                <img class="absolute top-[1.5625rem] left-[62.25rem] w-[10rem]" src="<?= THEME_FILE_URI ?>/assets/images/recruit/recruit-09.png" alt="Sauna Pro Team RUSH" width="140" height="140" decoding="async" loading="eager">
              </div>
            </section>
            <section class="c-section">
              <div class="c-section__inner bg-beige px-[5.938rem] tablet:px-[6.25rem]">
                <div class="relative z-10 w-[35rem] bg-white mx-auto pt-[3.75rem] pb-[4.375rem] px-[3.125rem] b-beige rounded-[5.688rem] tablet:grid tablet:grid-cols-[17.5rem,auto] tablet:gap-x-[5.313rem] tablet:items-center tablet:w-full tablet:py-[2.5rem] tablet:px-[6.25rem]">
                  <div>
                    <h2 class="c-title _pcLeft_" lang="en">サウナ施工 協力会社 募集中</h2>
                    <div class="c-title__sub _pcLeft_">partners wanted</div>
                  </div>
                  <p class="mt-[1.875rem] text-center leading-[2] text-[1.375rem] tablet:row-span-2 tablet:mt-0 tablet:text-left tablet:text-[0.813rem]">RUSHでは事業の拡大に伴い、<br class="tablet:hidden">共にサウナの施工を担っていただける<br class="tablet:hidden">協力会社を募集しています。<br class="tablet:hidden">新たなパートナーとして、<br class="tablet:hidden">これまでRUSHの培ってきた<br class="tablet:hidden">サウナ施工のノウハウを共有しながら<br class="tablet:hidden">一緒にお客様に最高のサウナを<br class="tablet:hidden">お届けしませんか？<br>ぜひ、お気軽にお問合せください！</p>
                  <a class="c-button c-button _brown_ mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="https://form.run/@form-all" target="_blank" rel="noreferrer">応募する</a>
                </div>
              </div>
            </section>
            <section class="c-section mt-[-5.938rem] tablet:mt-[-5.625rem]">
              <div class="absolute top-[10.5rem] left-[50%] -translate-x-1/2 rotate-[-7deg] z-10 w-full tablet:top-[10.688rem] tablet:rotate-[-5deg]">
                <ul class="c-autoSlider">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_beige.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_beige.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_beige.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_beige.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                </ul>
              </div>
              <div class="c-section__inner">
                <div class="bg-black pt-[17.813rem] pb-[6.25rem] tablet:pt-[14.75rem] tablet:pb-[3.75rem]">
                        <h2 class="c-title _beige_" lang="en">RUSHへ問合せる</h2>
                        <div class="c-title__sub _beige_">contact</div>
                  <p class="c-text _beige_ text-center mt-[1.875rem] tablet:mt-[1.875rem]">サウナのことはSauna Pro Team RUSHへ！<br>施工に関すること・製品についての疑問・<br class="tablet:hidden">プロジェクトのアイデア、<br>その他どんな些細なご質問やご相談も大歓迎です。<br>全力でサポートしますので、<br class="tablet:hidden">ぜひお気軽にお問合せください。</p>
                  <ul class="grid gap-[2.5rem] justify-center mt-[3.125rem] tablet:grid-cols-4 tablet:w-[67.5rem] tablet:mx-auto tablet:mt-[1.875rem]">
                    <li>
                            <a class="c-button c-button _beige_" href="https://form.run/@form-all" target="_blank" rel="noreferrer">サウナデザイン・施工について</a>
                    </li>
                    <li>
                            <a class="c-button c-button _beige_" href="https://form.run/@form-all" target="_blank" rel="noreferrer">サウナストーブについて</a>
                    </li>
                    <li>
                            <a class="c-button c-button _beige_" href="https://form.run/@form-all" target="_blank" rel="noreferrer">メンテナンスについて</a>
                    </li>
                    <li>
                            <a class="c-button c-button _beige_" href="https://form.run/@form-all" target="_blank" rel="noreferrer">その他どんなことでも</a>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            
    </main>
<?php
  endwhile;
endif; wp_reset_postdata();
?>

<?php
get_footer();
