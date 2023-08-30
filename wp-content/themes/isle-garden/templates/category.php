<?php
/**
 * Created by Virtual Studio Code
 * User: Sadaoka
 * Date: 03/03/2023
 * Time: 13:33
 * Template Name: Category
 */

$categories = get_the_category();
dd($categories);

?>
<?php get_header(); ?>
<style>
    main#main section . a svg{
        right: 15px;
    }
    .box-item box-category a{font-family: unset}
</style>
    <main id="main" class="wrap-main">
        <div class="wrap-breadcrumb">
            <div class="container" style="opacity: 0">
                <p>CATEGORY</p>
                <ul>
                    <li><a href="<?php echo home_url() ?>">HOME</a></li>
                    <li><a href="">CATEGORY</a></li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-list mt-4">
            <div class="container" >
                <ul>
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <li><a href="">Category</a></li>
                </ul>
            </div>
        </div>
        <section id="list-post" class="padding-content">
            <div class="container">
                <h3 class="title-content" data-subtitle="">CATEGORY</h3>
                    <div class="row">
                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/approach/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_approach.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/approach/"> <span class="">Appoach</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/fence/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_fence.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/fence/"> <span class="">Fence</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/gatepost/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_gatepost.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/gatepost/"> <span class="">Gate</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/plant/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_plant.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/plant/"> <span class="">Green hills</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/light/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_light.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/light/"> <span class="">Lighting</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/carport/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_carport.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/carport/"> <span class="">Parking & Carport</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/others/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_others.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/others/"> <span class="">Playfulness</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/post/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_post.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/post/"> <span class="">Post</span>

                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/trees/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_trees.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/trees/"> <span class="">Trees & Plants</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/faucet/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_faucet.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/faucet/"> <span class="">Wet area</span>

                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 bg-transparent box-work p-0">
                            <div class="item-post">
<!--                                <div>-->
<!--                                    <a class="item-post" href="--><?php //echo home_url(); ?><!--/gallery/category/wooddeck/" title="">-->
<!--                                        <img class="w-100" src="--><?php //asset('images/thumbnail_wooddeck.jpg'); ?><!--">-->
<!--                                    </a>-->
<!--                                </div>-->
                                <div class="box-item box-category ">
                                    <a href="<?php echo home_url(); ?>/gallery/category/wooddeck/"> <span class=""> Wooddeck</span>

                                    </a>
                                </div>
                            </div>
                        </div>


                        <!--
                    <div class="col-md-12">
                        <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/drawing/" title="">
                            <figure><img src="<?php asset('images/thumbnail_drawing.jpg'); ?>"></figure>
                            <div class="box-item box-category">
                                <h5>図面</h5>
                            </div>
                        </a>
                    </div>
     -->
                    </div>
            </div>
        </section>
        <section id="selected-design-img" class="pt-0">
            <div class="container">
                <img style="margin: 0 auto 0 auto;  display: block" class="img-bird"
                     src="<?php echo asset('images/chim02.png') ?>" alt="">
            </div>
        </section>
    </main>
<?php get_footer(); ?>