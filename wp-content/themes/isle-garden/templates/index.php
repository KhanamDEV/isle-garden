<?php
/**
 * Created by Virtual Studio Code
 * User: Sadaoka
 * Date: 03/03/2023
 * Time: 13:33
 * Template Name: Index
 */
?>
<?php get_header(); ?>
    <main id="main" class="wrap-main">

        <div id="swiper-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc1.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp1.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc2.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp2.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc3.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp3.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                    <!--                    <div class="swiper-slide">-->
                    <!--                        <div class="slide-img">-->
                    <!--                            <img src="-->
                    <?php //asset('images/mainvisual_pc4.jpg'); ?><!--" class="pcMode"><img-->
                    <!--                                    src="-->
                    <?php //asset('images/mainvisual_sp4.jpg'); ?><!--" class="spMode">-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc5.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp5.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc6.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp6.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc7.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp7.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img">
                            <img src="<?php asset('images/mainvisual_pc8.jpg'); ?>" class="pcMode"><img
                                    src="<?php asset('images/mainvisual_sp8.jpg'); ?>" class="spMode">
                        </div>
                    </div>
                </div>
                <div class="inner">
                    <h2 class="text-white text-center" style="font-size: 36px">Sence of your feel <br> ISLE</h2>
                </div>
                <!--              <p class="icon"><img src="-->
                <?php //asset('images/icon_scroll.svg'); ?><!--" class="animation keyframe"></p> -->
            </div>
        </div>


        <section id="concept">
            <div class="container">
                <h3 class="title-content" data-subtitle="">CONCEPT</h3>
                <p class="description-content">気の流れ、光、緑、心地よくプラスした暮らしの中のご提案
                    <br>気持ちの良い澄んだ環境とはなんでしょう。それは見ることも触ることもできません。<br>澄んだ環境は淀みのない「流れ」からつくられます。その「流れ」を「空気、空間」と置きかえてイメージしてみましょう。<br>たとえば風の通り道、光の当たり具合、緑の瑞々しさなどが自然に成り立ち、流れている場所はとても心地よい空間になります。逆にそれらの流れに淀みのある場所はとても居心地の悪い空間になります。<br>私たちは、お客さまの心身ともに気持ちの良い暮らしのために、自然の「流れ」を創り出して、豊かな生活の始まりをご提案しています。
                </p>
                <div class="row">
                    <div class="col-md-5">
                        <img class="image-left" src="<?php asset('images/top-page-1/LEFT.png'); ?>" alt="">
                    </div>
                    <div class="col-md-7">
                        <div id="carousel-top-page-first" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php
                                for ($i = 1; $i <= 6; $i++) {
                                    ?>
                                    <div class="carousel-item <?php if ($i == 1) echo 'active' ?>">
                                        <img class="d-block w-100"
                                             src="<?php asset('images/top-page-1/RIGHT0' . $i . '.jpg'); ?>"
                                             alt="First slide">
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-top-page-first" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-top-page-first" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="selected-design" class="pb-0">
            <div class="container">
                <p>お庭・外構デザインのギャラリーをご紹介いたします。</p>
                <p class="font-en">SELECTED OUR DESIGN AND DETAILS</p>
                <p class="slide_btn"><a href="<?php echo get_permalink(797) ?>"><span class="font-en">LEARN MORE</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-arrow"
                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                             id="レイヤー_1" x="0px" y="0px" viewBox="0 0 18.6 32"
                             style="enable-background:new 0 0 18.6 32;" xml:space="preserve">

                            <g>
                                <polygon class="st0" points="0,2.6 13.4,16 0,29.4 2.6,32 18.6,16 2.6,0  "/>
                            </g>
</svg>
                    </a></p>
            </div>
        </section>


        <section id="about-us" class="pb-0">
            <div class="container">
                <div style="position: relative">
                    <h3 class="title-content  d-inline-block" data-subtitle="会社案内">ABOUT US</h3>
                    <h3 class="title-content font-en text-none" data-subtitle="">None</h3>
                </div>


                <p class="description-content mt-0">個人住宅お庭・外構デザイン、設計、施工サービスを岡山県全域で承っております。<br>四季を感じられる植栽や癒しをもたらす照明などを用いて、心身ともにゆとりが得られるデザインをご提案します。<br><strong>・個々テイストに合わせたオンリーワンデザイン<br>・維持管理しやすさ<br>・経過とともに変化する素材を生かす<br>・将来を見据えたライフスタイル</strong><br>など、大切なことがたくさんあります。<br>これまで外構・お庭施工で培ってきた思慮深さによってみなさま暮らしを豊かにできれば幸いです。
                </p>
                <img style="margin: 0 auto 0 auto;  display: block"  class=" img-bicycle"
                     src="<?php echo asset('images/top_onion＆bicycle.jpg') ?>" alt="">
            </div>
        </section>

        <section id="special-work" class="pb-0">
            <div class="container">
                <h3 class="title-content " data-subtitle="得意分野 / 実績">THE SPECIALTY / WORKS</h3>
                <p class="description-content">新築戸建て外構からお庭リフォームまで対応致します。<br>個人住宅、店舗、新築外構、外構・庭リフォーム、庭園、イングリッシュガーデン、アウトドアリビング、カーポート、ポスト、玄関、ウッドデッキ、タイルテラス、サイクルポート、ストックヤード、日除け、プール、宅配ボックス、ガーデンテラス
                    などエクステリア全般（これまでに15年以上事業実績があります）</p>
                <p class="description-content">ご不明な点や、ご相談等ございましたら、お気軽にこちらお問い合わせフォームよりご連絡ください。<br>お電話でお問い合わせ（<a
                            href="tel:08016495111">080-1649-5111</a>）も受け付けております。</p>
                <p class="slide_btn"><a href="<?php echo get_permalink(29) ?>"><span class="font-en">CONTACT</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-arrow "
                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                             id="レイヤー_1" x="0px" y="0px" viewBox="0 0 18.6 32"
                             style="enable-background:new 0 0 18.6 32;" xml:space="preserve">

                            <g>
                                <polygon class="st0" points="0,2.6 13.4,16 0,29.4 2.6,32 18.6,16 2.6,0  "/>
                            </g>
</svg>
                    </a></p>
            </div>
        </section>

        <section id="service-area" class="pb-0">
            <div class="container">
                <h3 class="title-content " data-subtitle="施工地域">SERVICE AREA</h3>
                <p class="description-content">
                    岡山県全域にて、お庭・外構デザイン・施工を行っております。<br>建物を引き立て・使い勝手良い外構デザインを適切な価格にてご提供しています。<br>工事・サービスの対象エリアは下記の通りです。<br>このエリア以外でも対応可能な場合もございますので、一度お問合せください。
                </p>
                <h4 class="description-content2">庭/外構デザイン・工事対象エリア</h4>
                <dl>
                    <dt>岡山県</dt>
                    <dd>
                        岡山市（北区・中区・東区・南区・灘崎町、瀬戸町、御津町、建部町）・倉敷市・玉野市・総社市・真庭市・赤磐市・瀬戸内市・和気郡・備前市・吉備中央町・高梁市・小田郡矢掛町・井原市・浅口市・笠岡市・美作市・津山市・新見市など
                    </dd>
                </dl>
            </div>
        </section>

        <section id="corporate">
            <div class="container">
                <h3 class="title-content " data-subtitle="所在地">CORPORATE</h3>
                <p class="description-content2">合同会社アイル<br>岡山県岡山市中区江崎<br>TEL <a href="tel:08016495111">080-1649-5111</a><br>MAIL
                    <a href="mailto:isle2569.garden@gmail.com">isle2569.garden@gmail.com</a><br>二級建築士事務所 第6339号</p>
            </div>
        </section>
        <section id="selected-design-img" class="pt-0">
            <div class="container">
                <img style="margin: 0 auto 0 auto;  display: block" class="img-bird"
                     src="<?php echo asset('images/topusagi.JPG') ?>" alt="">
            </div>
        </section>
    </main>
<?php get_footer(); ?>