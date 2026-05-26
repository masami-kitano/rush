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
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_1_pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_1_sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_2_pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_2_sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_3_pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_3_sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                  <li class="js-storeSlider__item c-slider__item">
                    <picture>
                      <source media="(min-width: 768px)" srcset="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_4_pc.webp"><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/mv_img_4_sp.webp" alt="" width="1250" height="650" decoding="async" loading="eager">
                    </picture>
                  </li>
                </ul>
                <h1 class="absolute top-[50%] left-[50%] -translate-x-1/2 -translate-y-1/2"><img class="w-[17.063rem] tablet:w-[10.25rem]" src="<?= THEME_FILE_URI ?>/assets/images/common/logo_img_1.svg" alt="SAUNA PRO TEAM RUSH 可能性超無限大のサウナ屋" width="164" height="144 " decoding="async" loading="eager"></h1>
                <div class="absolute top-0 left-[50%] -translate-x-1/2 -translate-y-1/2 whitespace-nowrap font-black font-en tracking-[.15em] text-[1.25rem] text-black tablet:text-[1rem]">サウナ専門施工会社｜SAUNA PRO TEAM RUSH</div>
              </div>
              <div class="absolute bottom-[-1.563rem] left-[50%] -translate-x-1/2 rotate-[-7deg] w-full tablet:bottom-[0.625rem]">
                <ul class="c-autoSlider">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="eager"></li>
                </ul>
              </div>
            </section>
            <section class="c-section pt-[6.25rem] tablet:pt-[6.625rem]">
              <div class="absolute bottom-[-11.563rem] left-[50%] -translate-x-1/2 rotate-[7deg] z-10 w-full tablet:bottom-[-8.438rem]">
                <ul class="c-autoSlider _reverse_">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_pink.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_pink.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_pink.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_pink.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                </ul>
              </div>
              <div class="c-section__inner _small_">
                      <h2 class="c-title _pcLeft_" lang="en">サウナ施工事例</h2>
                      <div class="c-title__sub _pcLeft_">sauna projects</div>
                <ul class="mt-[3.125rem] pl-[1.875rem] pr-[4.688rem] grid gap-[5rem] tablet:grid-cols-3 tablet:gap-x-[5rem] tablet:gap-y-[4.688rem] tablet:mt-[3.75rem] tablet:px-0">
                  <?php
                    // サブループでカスタムポストタイプ 'works' を表示
                    $args = array(
                      'post_type' => 'works',
                      'posts_per_page' => 6,
                      'post_status' => 'publish',
                      'fields' => 'ids',
                    );
                    $query = new WP_Query($args);
                    if ( $query->have_posts() ):
                      foreach ( $query->posts as $post_id ):
                        get_template_part('template-parts/includes/c-card', null, array( 'post_id' => $post_id, ));
                      endforeach;
                    endif;
                    wp_reset_postdata();
                  ?>
                </ul>
              </div>
            </section>
            <section class="c-section pt-[11.875rem] tablet:pt-[7.5rem]">
              <div class="c-section__inner c-mission">
                <div class="c-mission__head">
                  <h2 class="c-title _white_" lang="en">サウナ屋の使命</h2>
                  <div class="c-title__sub _white_">mission</div>
                  <p class="c-mission__lead">サウナを最高最適化する<br>サウナのプロ集団</p>
                  <p class="c-mission__text">日々、ととのえていますか？<br>どんなサウナがお好きですか？<br>オールドサウナ？北欧サウナ？<br>それとも、これまで体験したことないサウナ…？<br>Sauna Pro Team RUSHは、<br>頭の中で思い描いているサウナへと<br>最適にチューニングし、<br>最高のサウナを一緒におつくり致します。</p>
                  <img class="c-mission__imageText" src="<?= THEME_FILE_URI ?>/assets/images/top/mission_text.svg" alt="Sauna life, Tuned by RuSH" width="197" height="132" decoding="async" loading="lazy">
                  <img class="c-mission__arrow" src="<?= THEME_FILE_URI ?>/assets/images/common/arrow_img.svg" alt="" width="30" height="30" decoding="async" loading="lazy">
                  <a class="c-button _pcLarge_ mx-auto mt-[4.375rem] tablet:mt-10" href="<?= home_url('/mission/'); ?>">サウナ屋の使命</a>
                </div>
                <div class="c-mission__body">
                        <h2 class="c-title _pcLeft_" lang="en">サウナ屋のできること</h2>
                        <div class="c-title__sub _pcLeft_">what we do</div>
                  <ul class="c-mission__list">
                    <li class="c-mission__item">
                      <h3 class="c-mission__itemTitle">サウナ施工／造作サウナ</h3>
                      <p class="c-mission__itemText">RUSHとしてこれまで携わったサウナの施工実績は600件以上。サウナの本場である北欧・エストニアで研修を受けるなど、豊富な実績と知識を持った現場監督や職人たちが集まっているので、説明書のない組立ユニット式サウナや、複雑な造作サウナなどの施工も安心してお任せいただけます。</p>
                            <div class="c-button _brown_ mx-auto mt-10">サウナ施工</div>
                    </li>
                    <li class="c-mission__item">
                      <h3 class="c-mission__itemTitle">サウナ設計／資材の仕入れ</h3>
                      <p class="c-mission__itemText">RUSHには各分野のプロフェッショナルが集まっており、サウナの設計デザインからユニットサウナやストーブの選定・資材の仕入れ・施工までを一気通貫で行うことが可能です。お客様への丁寧なヒアリングを行いながら、温度・湿度・給排気のバランスを考慮したサウナをご提案します。</p>
                            <div class="c-button _brown_ mx-auto mt-10">サウナ設計</div>
                    </li>
                    <li class="c-mission__item">
                      <h3 class="c-mission__itemTitle">サウナストーブ販売</h3>
                      <p class="c-mission__itemText">ストーブはサウナの心臓とも呼べるほど大切なもの。RUSHでは、Tylo社をはじめとした高品質で安全な海外製の電気・薪ストーブを数多く取り揃えており、お客様の理想のサウナに合わせた最適なストーブをお選びいただけます。電気ストーブの場合のわかりにくいサウナの電気工事もお任せいただけます。</p>
                            <div class="c-button _brown_ mx-auto mt-10">サウナストーブ販売</div>
                    </li>
                    <li class="c-mission__item">
                      <h3 class="c-mission__itemTitle">サウナメンテナンス</h3>
                      <p class="c-mission__itemText">RUSHでは、サウナの施工が終わってからもお客様との信頼関係を大切にしたいと考えています。長く使用する中では思わぬ不調が出てくることもあるサウナ。せっかくのサウナを長く安全に楽しんでいただけるよう、充実のアフターメンテナンスも提供しています。お客様がととのえるサウナライフのために。</p>
                            <div class="c-button _brown_ mx-auto mt-10">サウナメンテナンス</div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
            <section class="c-section pt-[5rem]">
              <div class="c-section__inner _small_">
                <div class="c-news">
                  <div class="c-news__title">
                    <h2 class="c-title _pcLeft_" lang="en">最新情報</h2>
                    <div class="c-title__sub _pcLeft_">news</div>
                  </div>
                  <ul class="c-news__contents mt-[2.5rem] tablet:mt-0">
                    <?php
                      // サブループでカスタムポストタイプ 'post' を表示
                      $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'fields' => 'ids',
                      );
                      $query = new WP_Query($args);
                      $post_count = $query->post_count; // 投稿数を取得
                      if ( $query->have_posts() ):
                        foreach ( $query->posts as $post_id ):
                          get_template_part('template-parts/includes/c-newsItem', null, array( 'post_id' => $post_id, ));
                        endforeach;
                      endif;
                      wp_reset_postdata();
                    ?>
                  </ul>
                  <?php if ($post_count >= 3): // 投稿数が3件より多い場合のみ表示 ?>
                    <div class="c-news__button mt-[3.75rem] tablet:mt-0">
                      <a class="c-button _brownTransparent_ mx-auto tablet:ml-0" href="<?= home_url('/news/'); ?>" target="_blank" rel="noreferrer">最新情報の一覧</a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </section>
            <section class="c-section pt-[10rem] tablet:pt-[7.5rem]">
              <div class="absolute top-[8.125rem] left-[50%] -translate-x-1/2 rotate-[-7deg] z-10 w-full tablet:top-[5.188rem]">
                <ul class="c-autoSlider">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_brown.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_brown.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_brown.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_brown.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                </ul>
              </div>
              <div class="absolute bottom-[-10rem] left-[50%] -translate-x-1/2 rotate-[5deg] z-20 w-full tablet:bottom-[-7.813rem]">
                <ul class="c-autoSlider _reverse_">
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_black.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_black.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_black.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                  <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_black.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
                </ul>
              </div>
              <div class="c-section__inner _small_">
                <div class="tablet:flex tablet:gap-[6.688rem]">
                  <ul class="js-storeSlider c-slider tablet:w-[43.313rem] tablet:flex-shrink-0">
                    <li class="js-storeSlider__item c-slider__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_main_img_1.webp" alt="" width="1356" height="196" decoding="async" loading="lazy"></li>
                    <li class="js-storeSlider__item c-slider__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_main_img_2.webp" alt="" width="1356" height="196" decoding="async" loading="lazy"></li>
                    <li class="js-storeSlider__item c-slider__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_main_img_3.webp" alt="" width="1356" height="196" decoding="async" loading="lazy"></li>
                    <li class="js-storeSlider__item c-slider__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_main_img_4.webp" alt="" width="1356" height="196" decoding="async" loading="lazy"></li>
                  </ul>
                  <div class="mt-[3.75rem] tablet:mt-0">
                          <h2 class="c-title _pcLeft_" lang="en">サウナ屋のお店</h2>
                          <div class="c-title__sub _pcLeft_">rush web store</div>
                    <p class="c-text text-center mt-[1.875rem] tablet:text-left">RUSHのオリジナルアパレルや小物。<br>施工中の現場や打ち合わせでも<br class="tablet:hidden">RUSHがRUSHらしくいられるように。<br class="tablet:hidden">いつもわんぱくで楽しく、<br class="tablet:hidden">サウナと真摯に向き合うためのアイテムたちです。<br>RUSHとお揃いのアイテムをまとって、<br>サウナライフをチューンしませんか？</p>
                          <a class="c-button w-full mx-auto mt-[2.5rem] hidden tablet:block" href="https://rush37.official.ec/" target="_blank" rel="noreferrer">サウナウェブストアを見る</a>
                  </div>
                </div>
                <div class="max-w-[35rem] mt-[3.75rem] mx-auto tablet:max-w-none">
                  <ul class="js-storeSliderSub grid grid-cols-2 c-sliderGrid gap-[5rem] tablet:grid-cols-4 tablet:gap-[2.5rem]">
                    <li class="js-storeSliderSub__item c-sliderGrid__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_1.webp" alt="" width="1356" height="196" decoding="async" loading=""><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_5.webp" alt="" width="1356" height="196" decoding="async" loading=""><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_9.webp" alt="" width="1356" height="196" decoding="async" loading=""></li>
                    <li class="js-storeSliderSub__item c-sliderGrid__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_2.webp" alt="" width="1356" height="196" decoding="async" loading=""><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_6.webp" alt="" width="1356" height="196" decoding="async" loading=""><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_10.webp" alt="" width="1356" height="196" decoding="async" loading=""></li>
                    <li class="js-storeSliderSub__item c-sliderGrid__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_3.webp" alt="" width="1356" height="196" decoding="async" loading=""><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_7.webp" alt="" width="1356" height="196" decoding="async" loading=""></li>
                    <li class="js-storeSliderSub__item c-sliderGrid__item"><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_4.webp" alt="" width="1356" height="196" decoding="async" loading=""><img src="<?= THEME_FILE_URI ?>/assets/images/top/store_sub_img_8.webp" alt="" width="1356" height="196" decoding="async" loading=""></li>
                  </ul>
                        <a class="c-button w-full mx-auto mt-[5rem] tablet:hidden" href="https://rush37.official.ec/" target="_blank" rel="noreferrer">サウナウェブストアを見る</a>
                </div>
              </div>
            </section>

            <section class="c-section mt-[9.375rem]">
              <div class="c-section__inner">
                <div class="bg-white pt-[5rem]">
                        <h2 class="c-title" lang="en">お世話になっている方々</h2>
                        <div class="c-title__sub">saunakama</div>
                  <p class="c-text text-center mt-[1.875rem] tablet:mt-[1.875rem]">RUSHのアパレルを身にまとい、<br class="tablet:hidden">ブランドの魅力を発信してくださるプロ。<br>サウナ施設や施工現場で、<br class="tablet:hidden">プロの技術で支えてくださる企業、施設。<br>サウナをもっと楽しく、もっと自由にするために、<br>ともに歩ませていただいている、<br class="tablet:hidden">頼もしいサウ仲間のみなさま。</p>
                  <ul class="grid grid-cols-2 gap-[5rem] max-w-[35rem] mx-auto mt-[2.813rem] tablet:grid-cols-[repeat(4,15rem)] tablet:justify-center tablet:gap-[2.5rem] tablet:max-w-full tablet:mt-[1.875rem]">
                    <li><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/saunakama_img_1.webp" alt="" width="240" height="380" decoding="async" loading="lazy"></li>
                    <li><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/saunakama_img_2.webp" alt="" width="240" height="380" decoding="async" loading="lazy"></li>
                    <li><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/saunakama_img_3.webp" alt="" width="240" height="380" decoding="async" loading="lazy"></li>
                    <li><img class="w-full" src="<?= THEME_FILE_URI ?>/assets/images/top/saunakama_img_4.webp" alt="" width="240" height="380" decoding="async" loading="lazy"></li>
                  </ul>
                  <ul class="js-fadeInList relative max-w-[78.125rem] mx-auto">
                    <li class="js-fadeInList__item absolute z-20 top-[5.313rem] left-[3.3751rem] w-[13rem] tablet:top-[3.75rem] tablet:left-[11.563rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_1.webp" alt="" width="208" height="104" decoding="async" loading="lazy"></li>
                    <li class="js-fadeInList__item absolute z-20 top-[12.625rem] left-[4.063rem] w-[8.25rem] tablet:top-[8.438rem] tablet:left-[18.188rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_2.webp" alt="" width="132" height="132" decoding="async" loading="lazy"></li>
                    <li class="js-fadeInList__item absolute z-20 top-[3.75rem] left-[17.438rem] w-[8rem] tablet:top-[3.75rem] tablet:left-[26.125rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_3.webp" alt="" width="128" height="128" decoding="async" loading="lazy"></li>
                    <li class="js-fadeInList__item absolute z-20 top-[15.875rem] left-[28rem] w-[10.813rem] tablet:top-[12.188rem] tablet:left-[31.188rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_4.webp" alt="" width="173" height="60" decoding="async" loading="lazy"></li>
                    <li class="js-fadeInList__item absolute z-20 top-[5.313rem] left-[26.563rem] w-[8.375rem] tablet:top-[2.813rem] tablet:left-[35.125rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_5.webp" alt="" width="134" height="134" decoding="async" loading="lazy"></li>
                    <li class="js-fadeInList__item absolute z-20 top-[3.25rem] left-[35.625rem] w-[8.25rem] tablet:top-[3.75rem] tablet:left-[44.563rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_6.webp" alt="" width="113" height="190" decoding="async" loading="lazy"></li>
                    <li class="js-fadeInList__item absolute z-20 top-[13.313rem] left-[13.813rem] w-[11.25rem] tablet:top-[6.063rem] tablet:left-[52.813rem]"><img src="<?= THEME_FILE_URI ?>/assets/images/top/sticker_img_7.webp" alt="" width="180" height="122" decoding="async" loading="lazy"></li>
                  </ul>
                </div>
              </div>
            </section>

            <section class="c-section">
              <div class="c-section__inner bg-white pt-[23.25rem] px-[5.938rem] tablet:pt-[19.25rem] tablet:px-[6.25rem]">
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
