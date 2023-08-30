<?php
/**
 * Created by PhpStorm
 * User: mtam
 * Date: 12/02/2023
 * Time: 19:50
 */
?>
<?php
$category = get_category(get_query_var('cat'));
$isWork = !(!str_contains($category->slug, 'works'));
$isDrawing = !(!str_contains($category->slug, 'drawing'));
$isCategory = !(!str_contains($category->slug, 'categories'));
$data = new WP_Query([
//	'numberposts' => -1,
//	'posts_per_page' => $posts_per_page,
//	'paged' => $paged,
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => $category->cat_ID,
    'orderby'   => 'meta_value',
    'order' => 'ASC',
]);
get_header();
?>
<?php if ($category->slug == 'drawing') { ?>
    <style>
        body {
            background-size: cover;
        }

    </style>
<?php } ?>
<?php if ($isWork){ ?>
    <style>

        .sub-title-content.special span{font-weight: inherit}
        main#main section .container h3{font-weight: bolder}
        main#main section .container h3::after {
            text-align: center;
            color: black;
            font-weight: inherit;
        }
    </style>
<?php } ?>
    <main id="main" class="wrap-main">
        <div class="wrap-breadcrumb">
            <div class="container" style="opacity: 0">
                <p><?php echo $category->name; ?></p>
                <ul>
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <li><a href=""><?php echo $category->name; ?></a></li>
                </ul>
            </div>
        </div>
        <div class="breadcrumb-list mt-4">
            <div class="container">
                <ul>
                    <li><a href="<?php echo home_url() ?>">Home</a></li>
                    <li><a href="#"><?php echo ucfirst(strtolower($category->name)); ?></a></li>
                </ul>
            </div>
        </div>
        <section id="list-post" class="padding-content">
            <div class="container">
                <?php if ($isCategory){ ?>
                    <h3 class="title-content" data-subtitle=""><?php echo strtoupper($category->name)?></h3>
                    <div class="row">
                        <?php if ($data->have_posts()) : while ($data->have_posts()) : $data->the_post(); ?>
                            <div class="col-md-12 bg-transparent box-work p-0">
                                <div class="item-post">

                                    <div class="box-item box-category ">
                                        <a href="<?php echo get_permalink($post->ID); ?>"> <span class=""><?php echo $post->post_title ?></span></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                <?php }
                    else if($isDrawing){ ?>
                        <h3 class="title-content" data-subtitle="<?php echo $category->description ?>"><?php echo strtoupper($category->name)?></h3>
                        <?php if ($data->have_posts()) : while ($data->have_posts()) : $data->the_post(); ?>
                            <div class="col-md-4  ">
                                <a class="item-post" href="<?php echo get_the_post_thumbnail_url(); ?>" title="" data-fancybox="">
                                    <figure>
                                        <img class="w-100" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </figure>
                                </a>
                            </div>
                        <?php endwhile; endif; ?>
                  <?php  }
                else { ?>
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
                        <?php if ($data->have_posts()) : while ($data->have_posts()) : $data->the_post(); ?>
                            <div class="col-md-6 col-12 box-work">
                                <div class="item-post" title="">
                                    <div>
                                        <a href="<?php echo get_permalink($post->ID); ?>">
                                            <img style="max-width: 100%" src="<?php echo get_the_post_thumbnail_url(); ?>">
                                        </a>
                                    </div>
                                    <div class="box-item ">
                                        <span><?php echo $post->post_title?></span>
                                        <a href="<?php echo get_permalink($post->ID); ?>"> <span class=""><?php echo get_field('description')?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>

                <?php } ?>

            </div>
        </section>

        <?php if ($category->slug == 'categories') { ?>
            <section id="selected-design-img" class="pt-0">
                <div class="container">
                    <img style="margin: 0 auto 0 auto;  display: block" class="img-bird"
                         src="<?php echo asset('images/chim02.png') ?>" alt="">
                </div>
            </section>
        <?php } ?>

    </main>
<?php get_footer(); ?>