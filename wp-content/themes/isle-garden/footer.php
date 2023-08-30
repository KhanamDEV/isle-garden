<footer id="footer">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <p class="text-white">Phone: <a href="tel:08016495111">080-1649-5111</a></p>
                <p class="text-white">Mail: <a href="mailto:isle2569.garden@gmail.com">isle2569.garden@gmail.com</a></p>
                <div class="social">
                    <!-- <a href="">
                        <i class="fa-brands fa-pinterest"></i>
                    </a> -->
                    <a href="https://www.instagram.com/isle.garden/" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="<?php asset('file/isle_warranty_standard.pdf'); ?>" target="_blank">保証基準</a>
                    </li>
                    <li>
                        <a href="<?php echo get_permalink(32); ?>">個人情報保護方針及び利用規約</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class="copyright text-white">Copyright (C) <?php echo date('Y') ?> isle.</p>
    </div>
</footer>
<div id="back-to-top" style="display: block;">
    <a href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
</div>
</body>

<script src="<?php asset('js/jquery-3.4.1.min.js'); ?>"></script>
<!--
<script src="<?php asset('js/bootstrap.min.js'); ?>"></script>
<script src="<?php asset('js/owl.carousel.min.js'); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--<script src="--><?php //asset('js/jquery-1.12.4.min.js'); ?><!--"></script>-->
<script src="<?php asset('js/main.js'); ?>?date=<?=date('YmdGis');?>" type="text/javascript"></script>
<script src="<?php asset('js/jquery.fancybox.min.js'); ?>"></script>
<script src="<?php asset('js/ajaxzip3.js'); ?>"></script>
<script src="<?php asset('js/address.js'); ?>"></script>
<script src="<?php asset('js/swiper-bundle.min.js'); ?>"></script>
<script>
    let swipeOption = {
        loop: true,
        effect: 'fade',
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        speed: 2000,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    }
    new Swiper('.swiper-container', swipeOption);
</script>

<?php wp_footer(); ?>
</html>