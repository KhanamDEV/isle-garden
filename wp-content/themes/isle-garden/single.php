<?php
/**
 * Created by PhpStorm
 * User: mtam
 * Date: 12/02/2023
 * Time: 19:55
 */
?>

<?php
global $post;
$category = get_the_category($post->ID)[0];
$fields = get_fields($post->ID);
$isWork = !(!str_contains($category->slug, 'works'));
 $galleries = get_post_gallery_images($post);
if ($isWork){
    $contractor = get_field_objects()['contractor'];
    $subFields = [];
    foreach ($contractor['sub_fields'] as $sub_field){
        if ($sub_field['name'] != 'description_constractor') $subFields[$sub_field['name']] = $sub_field['label'];
    }
}

get_header();

?>

<main id="main" class="wrap-main">

    <div class="wrap-breadcrumb">
        <div class="container" style="opacity: 0">
            <p><?php echo $post->post_title; ?></p>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href=""><?php echo $category->name; ?></a></li>
                <li><a href=""><?php echo $post->post_title; ?></a></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumb-list mt-4">
        <div class="container">
            <ul>
                <li><a href="<?php echo home_url() ?>">Home</a></li>
                <li><a href="<?php echo get_category_link($category->term_id)?>"><?php echo ucfirst(strtolower($category->name)); ?></a></li>
                <li><a href="#"><?php echo  ucfirst(strtolower($post->post_title)); ?></a></li>

            </ul>
        </div>
    </div>
    <section id="post-detail" class="padding-content">
        <div class="container padding-privacy">
            <h3 class="title-content" data-subtitle="<?php echo $isWork ? $post->description : $post->post_title?>"><?php echo strtoupper($category->name) ?></h3>
            <?php if ($isWork){ ?>
                <div class="overview">
<!--                    <h4 class="c-heading is-sm is-icon is-bottom">施工概要</h4>-->
                    <div class="c-block-detail__table">
                        <div class="c-block-detail__table__items">
                            <?php foreach ($contractor['value'] as $key => $value){ if ($key != 'description_constractor' && !empty($value) ){ ?>
                                <div class="c-block-detail__table__item is-strong">
                                    <div class="c-block-detail__table__item__title"><?php echo $subFields[$key]?></div>
                                    <div class="c-block-detail__table__item__text"><?php echo $value ?></div>
                                </div>
                             <?php }}?>
                        </div>
                    </div>
                    <div class="c-block-detail__text">
                        <p>
                            <?php echo nl2br($fields['contractor']['description_constractor']) ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                    <?php foreach ($galleries as $gallery){ ?>
                        <div class="<?php echo $isWork ? 'col-md-12 mb-3' : 'col-md-4' ?>  ">
                            <a class="item-post" href="<?php echo $gallery; ?>" title=""
                               data-fancybox>
                                <figure>
                                    <img class="w-100" src="<?php echo $gallery; ?>" alt="">
                                </figure>
                            </a>
                        </div>
                    <?php }?>

                </div>


        </div>
        <p class="back_btn"><a href="<?php echo get_category_link($category->term_id)?>"><?php echo strtoupper($category->name)?>一覧に戻る</a></p>

    </section>

</main>
<?php get_footer(); ?>
