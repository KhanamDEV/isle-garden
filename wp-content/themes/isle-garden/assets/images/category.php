<?php
/**
 * Created by Virtual Studio Code
 * User: Sadaoka
 * Date: 03/03/2023
 * Time: 13:33
 * Template Name: Category
 */
?>
<?php get_header(); ?>
<main id="main" class="wrap-main">
    <div class="wrap-breadcrumb">
        <div class="container">
            <p>CATEGORY</p>
            <ul>
                <li><a href="<?php echo home_url() ?>">HOME</a></li>
                <li><a href="">CATEGORY</a></li>
            </ul>
        </div>
    </div>
    <section id="list-post" class="padding-content">
        <div class="container">
            <h3 class="title-content" data-subtitle="">CATEGORY</h3>
            <div class="row">

                 <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/approach/" title="">
                        <figure><img src="<?php asset('images/thumbnail_approach.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Appoach</h5>
                        </div>
                    </a>
                </div>
				
				 <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/fence/" title="">
                        <figure><img src="<?php asset('images/thumbnail_fence.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Fence</h5>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/gatepost/" title="">
                        <figure><img src="<?php asset('images/thumbnail_gatepost.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Gate</h5>
                        </div>
                    </a>
                </div>
				
				
                <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/plant/" title="">
                        <figure><img src="<?php asset('images/thumbnail_plant.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Green hills</h5>
                        </div>
                    </a>
                </div>

				
				 <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/light/" title="">
                        <figure><img src="<?php asset('images/thumbnail_light.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Lighting</h5>
                        </div>
                    </a>
                </div>
				
				  <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/carport/" title="">
                        <figure><img src="<?php asset('images/thumbnail_carport.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Parking & Carport</h5>
                        </div>
                    </a>
                </div>

				 <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/others/" title="">
                        <figure><img src="<?php asset('images/thumbnail_others.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Playfulness</h5>
                        </div>
                    </a>
                </div>
				
                <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/post/" title="">
                        <figure><img src="<?php asset('images/thumbnail_post.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Post</h5>
                        </div>
                    </a>
                </div>
				
				    <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/trees/" title="">
                        <figure><img src="<?php asset('images/thumbnail_trees.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Trees & Plants</h5>
                        </div>
                    </a>
                </div>
				
				 <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/faucet/" title="">
                        <figure><img src="<?php asset('images/thumbnail_faucet.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Wet area</h5>
                        </div>
                    </a>
                </div>
				
				
                <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/wooddeck/" title="">
                        <figure><img src="<?php asset('images/thumbnail_wooddeck.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>Wooddeck</h5>
                        </div>
                    </a>
                </div>

              

           


<!--
                <div class="col-md-4">
                    <a class="item-post" href="<?php echo home_url(); ?>/gallery/category/drawing/" title="">
                        <figure><img src="<?php asset('images/thumbnail_drawing.jpg'); ?>"></figure>
                        <div class="box-item">
                            <h5>図面</h5>
                        </div>
                    </a>
                </div>
 -->
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>