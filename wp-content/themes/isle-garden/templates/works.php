<?php
/**
 * Created by Virtual Studio Code
 * User: Sadaoka
 * Date: 03/03/2023
 * Time: 13:33
 * Template Name: Works
 */
?>
<?php get_header(); ?>
    <style>

        .sub-title-content.special span{font-weight: inherit}
        main#main section .container h3{font-weight: bolder}
        main#main section .container h3::after {
            text-align: center;
            color: black;
            font-weight: inherit;
        }
    </style>
    <main id="main" class="wrap-main">
        <div class="wrap-breadcrumb">
            <div class="container" style="opacity: 0">
                <p class="">WORKS</p>
                <ul>
                    <li><a class="" href="<?php echo home_url(); ?>">HOME</a></li>
                    <li><a class="" href="#">WORKS</a></li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-list mt-4">
            <div class="container" >
                <ul>
                    <li><a class="" href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a class="" href="#">Works</a></li>
                </ul>
            </div>
        </div>
        <section id="list-post" class="padding-content works">
            <div class="container">
                <h3 class="title-content needSpace  special text-center" style="font-family: FontEn" data-subtitle="">• Isle Garden •</h3>
                <p class="sub-title-content text-center special "><span style="font-weight: bolder">CREATING GARDEN </span><br> <span>& PERSONALIZED SPACES</span></p>
                <div id="swiper-wrap" class="works">
                    <div class="swiper-container ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <img src="<?php asset('images/works001.jpg'); ?>" class="pcMode"><img
                                            src="<?php asset('images/works001.jpg'); ?>" class="spMode">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <img src="<?php asset('images/works002.JPG'); ?>" class="pcMode"><img
                                            src="<?php asset('images/works002.JPG'); ?>" class="spMode">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <img src="<?php asset('images/works003.jpg'); ?>" class="pcMode"><img
                                            src="<?php asset('images/works003.jpg'); ?>" class="spMode">
                                </div>
                            </div>
                        </div>
                        <!--              <p class="icon"><img src="-->
                        <?php //asset('images/icon_scroll.svg'); ?><!--" class="animation keyframe"></p> -->
                    </div>
                </div>

                <h3 class="title-content text-center sub-special" data-subtitle="OUR DESIGN AND DETAIL">SELECTED</h3>
                <div class="row">
                    <div class="col-md-6 col-12 box-work">
                        <div class="item-post" title="">
                            <div>
                                <a href="<?php echo home_url(); ?>/gallery/category/works001/">
                                    <img class="w-100" src="<?php asset('images/thumbnail_works001.jpg'); ?>">
                                </a>
                            </div>
                            <div class="box-item ">
                                <span>Works 001</span>
                                <a href="<?php echo home_url(); ?>/gallery/category/works001/"> <span class="">ブロカントのお庭へリフォーム</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12 box-work">
                        <div class="item-post">
                            <div>
                                <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/works002/" title="">
                                    <img class="w-100" src="<?php asset('images/thumbnail_works002.jpg'); ?>">
                                </a>

                            </div>
                            <div class="box-item ">
                                <span>Works 002</span>
                                <a href="<?php echo home_url(); ?>/gallery/category/works002/"> <span class="">赤いポストのあるエントランス</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-12 box-work">
                        <div class="item-post">
                            <div>
                                <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/works003/" title="">
                                    <img class="w-100" src="<?php asset('images/thumbnail_works003.jpg'); ?>">
                                </a>
                            </div>
                            <div class="box-item ">
                                <span>Works 003</span>
                                <a href="<?php echo home_url(); ?>/gallery/category/works003/"> <span class="">バラの香りに包まれた花園</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-12 box-work">
                        <div class="item-post">
                            <div>
                                <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/works004/" title="">
                                    <img class="w-100" src="<?php asset('images/mainvisual_pc1.jpg'); ?>">
                                </a>
                            </div>
                            <div class="box-item ">
                                <span>Works 004</span>
                                <a href="<?php echo home_url(); ?>/gallery/category/works004/"> <span class="">樹木と光のある暮らし～雑木のお庭～</span>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>
<?php get_footer(); ?>