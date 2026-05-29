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
      <section class="c-section relative pt-[5.6875rem] pb-[3.75rem] max-w-[80rem] mx-auto ">
        <div class="absolute top-5 left-[50%]  pm-[1.25rem] -translate-x-1/2  whitespace-nowrap font-black font-en tracking-[.15em] text-[1.25rem] text-black tablet:text-[1rem]">募集要項：職人（正社員・契約社員）</div>
        <div class="absolute top-[-10rem] -translate-x-1/2 rotate-[-7deg] w-full tablet:top-[-10rem] z-10">
          <ul class="c-autoSlider">
            <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
            <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
            <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
            <li><img class="c-labelImage" src="<?= THEME_FILE_URI ?>/assets/images/common/label_yellow.webp" alt="Sauna Pro Team RUSH" width="1363" height="30" decoding="async" loading="lazy"></li>
          </ul>
        </div>
        <div class="c-recruit__detail">
          <img class="c-recruit__detail-image" src="<?= THEME_FILE_URI ?>/assets/images/recruit/craftsman-01.webp" alt="Sauna Pro Team RUSH" width="180" height="180" decoding="async" loading="eager">
          <div class="c-detail__text">
            <dl class="c-detailInfo">
              <div class="c-detailInfo__row">
                <dt class="c-detailInfo__title">募集職種</dt>
                <dd class="c-detailInfo__text">大工 / 電気工事士</dd>
              </div>
              <div class="c-detailInfo__row">
                <dt class="c-detailInfo__title">雇用形態</dt>
                <dd class="c-detailInfo__text">正社員・契約社員・業務委託</dd>
              </div>
              <div class="c-detailInfo__row">
                <dt class="c-detailInfo__title">給与</dt>
                <dd class="c-detailInfo__text">
                  月収：25万円〜（能力・経験・現職水準を考慮します）
                </dd>
              </div>
              <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[1.875rem] tablet:w-full" href="" target="_blank" rel="">応募フォーム</a>
            </dl>
          </div>
        </div>
      </section>
      <section class="c-section relative pb-[3.1875rem] max-w-[80rem] mx-auto">
        <div class="c-recruit__detail">
          <h2 class="c-detail__title">
            良いサウナって、<br>
            最後は現場で決まるんです。
          </h2>
          <div class="c-detail__sub">
            どれだけ設計を考えても、どれだけ綺麗なCGをつくっても、現場の空気感まではコントロールできません。木の納まりやタイルの質感、照明の当たり方、空気の抜け方。細かい部分を何度も調整しながら、ようやく「また来たい」と思える空間になる。<br>
            RUSHでは、職人もただ施工するだけではありません。設計や現場管理と一緒に考えながら、空間の熱や空気感を、最後まで完成させていく重要な役割だと思っています。
          </div>
        </div>
      </section>
      <section class="c-section relative pb-[6.25rem] max-w-[80rem] mx-auto">
        <h2 class="c-jobInfo__title">募集要項</h2>
          <div class="c-jobInfo__grid">
            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">仕事内容</h3>
              <p class="c-jobInfo__text">
                サウナ施設を中心とした空間づくりを行います。<br>
                大工や電気工事を中心に、現場ごとにチームで施工を進めていきます。
              </p>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">仕事の流れ</h3>
              <p class="c-jobInfo__text">
                現場確認からスタートして、設計や現場管理と細かい納まりを打ち合わせながら施工を進めます。
              </p>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">対象となる方</h3>

              <ul class="c-jobInfo__list">
                <li>第二種電気工事士以上歓迎</li>
                <li>現場仕事が好きな方</li>
                <li>ものづくりが好きな方</li>
                <li>サウナが好きな方歓迎</li>
              </ul>

              <p class="c-jobInfo__text">
                経験者優遇ですが、まずは「やってみたい」という気持ちを大切にしています。
              </p>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">勤務地</h3>

              <p class="c-jobInfo__text">
                RUSH BASE（東京近郊）<br>
                ※現場により全国出張あり
              </p>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">給与</h3>

              <p class="c-jobInfo__text">
                月給 250,000円〜<br>
                ※経験・能力・前職給与を考慮のうえ決定します。<br>
                ※試用期間あり
              </p>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">勤務時間</h3>

              <p class="c-jobInfo__text">
                8:30〜17:30（休憩あり）<br>
                ※現場により変動あり
              </p>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">休日・休暇</h3>

              <ul class="c-jobInfo__list">
                <li>日曜・祝日</li>
                <li>夏季休暇</li>
                <li>年末年始休暇</li>
                <li>その他、現場スケジュールによる</li>
              </ul>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">待遇・福利厚生</h3>

              <ul class="c-jobInfo__list">
                <li>社会保険完備（正社員・契約社員のみ）</li>
                <li>交通費支給</li>
                <li>作業着支給</li>
                <li>サウナ研修あり</li>
              </ul>
            </div>

            <div class="c-jobInfo__item">
              <h3 class="c-jobInfo__heading">選考の流れ</h3>

              <p class="c-jobInfo__text">
                エントリー後、まずは一度お話できればと思っています。<br>
                面談後は、実際の現場やRUSH BASEを見ていただきながら、お互いの雰囲気を確認できればと思っています。
              </p>
            </div>

            <div class="c-jobInfo__item c-jobInfo__item--button">
              <p class="c-jobInfo__message">
                「ちょっと気になる」くらいでも大丈夫です。<br>
                まずは気軽にご連絡ください。<br>
                ご応募を心よりお待ちしています
              </p>
              <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">応募フォーム</a>
            </div>
          </div>
        </div>
      </section>
      <section class="c-section relative pb-[6.25rem] max-w-[80rem] mx-auto">
        <ul class="c-recruitblock">
          <li class="c-recruitblock__item">
            <h3 class="c-recruitblock__title">職人</h3>

            <p class="c-recruitblock__sub">
              大工 / 電気 / タイル / 左官 / 塗装
            </p>

            <p class="c-recruitblock__text">
              RUSHおもしろそうだな、自分の技術も使えるかな。
              <br>
              仕事あとにサウナ入れたらいいよな。
            </p>
            <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">詳しく見る</a>
            
          </li>
          <li class="c-recruitblock__item">
            <h3 class="c-recruitblock__title">現場管理</h3>

            <p class="c-recruitblock__sub">
              積算経験者優遇
            </p>

            <p class="c-recruitblock__text">
              はちゃめちゃそうだけど、おもしろいやつらをまとめる司令塔になるのもいいかもな。
            </p>
            <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">詳しく見る</a>
            
          </li>
          <li class="c-recruitblock__item">
            <h3 class="c-recruitblock__title">設計・デザイン</h3>

            <p class="c-recruitblock__sub">
              実施図面経験者
            </p>

            <p class="c-recruitblock__text">
              かっこいいだけじゃなくて、ちゃんと成立させる。
              <br>
              考え抜いたものを、熱くつくりたい。
            </p>
            <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">詳しく見る</a>
          </li>
        </ul>
        <div class="md:hideen pt-[6.25rem] c-jobInfo__item--button tablet:hidden">
          <h2 class="c-jobInfo__spmessagetitle">
            なんかいいかもと感じたら、<br>
            まずは、会いに来てほしい。
          </h2>
          <p class="c-jobInfo__spmessagetext">
            今もRUSHは成長中なので、 どんどんおもしろくなっていく。<br>
            唯一無二の会社であり、仲間です。
          </p>
          <a class="c-button _pcLarge_ mx-auto mt-[2.5rem] tablet:mt-[0.813rem] tablet:w-full" href="" target="_blank" rel="">応募フォーム</a>
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
