<?php
/**
 * Created by PhpStorm
 * User: mtam
 * Date: 11/02/2023
 * Time: 23:02
 * Template Name: Contact
 */
?>
<?php
$dataContact = $_SESSION['dataContact'] ?? [];
?>
<?php get_header(); ?>
<main id="main" class="wrap-main">
    <div class="wrap-breadcrumb">
        <div class="container">
<!--            <p>CONTACT</p>-->
<!--            <ul>-->
<!--                <li><a href="">Home</a></li>-->
<!--                <li><a href="">CONTACT</a></li>-->
<!--            </ul>-->
        </div>
    </div>
    <div class="breadcrumb-list mt-4">
        <div class="container" >
            <ul>
                <li><a class="" href="<?php echo home_url(); ?>">HOME</a></li>
                <li><a class="" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <section id="form-contact" class="padding-content">
        <div class="container">
            <h3 class="title-content " data-subtitle="お問い合わせ">CONTACT</h3>
            <div class="wrap-form-contact" id="point">
                <p>お気軽にお問い合わせください。<br>リフォーム・新築外構ご相談場合、スタッフが現地に参り、現状確認をしながらお話をお伺いいたします。<br><br>送信できない場合、お手数ですが（<a href="mailto:isle2569.garden@gmail.com">isle2569.garden@gmail.com</a>）まで直接メールを送信下さい。<br>電話（<a href="tel:08016495111">080-1649-5111</a>）でお問い合わせも受付けております。<br><br>※時間を問わない電話や突然訪問など過度な営業活動一切しておりませんでご安心下さい。</p>
            </div>

                <div class="wrap-form-contact mt-5">
                    <div id="step1">
                        <form action="" method="" id="contact-form">
                            <div class="form-group">
                                <label for="">お名前※</label>
                                <input type="text" name="name" required value="<?php echo $dataContact['name'] ?? '' ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">フリガナ</label>
                                <input type="text" name="furigana" value="<?php echo $dataContact['furigana'] ?? '' ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">郵便番号</label>
                                <input type="text" name="postcode" value="<?php  echo  $dataContact['postcode'] ?? '' ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">お住まいの都道府県</label>
                                <select name="prefecture" class="form-control" id="">
                                    <?php foreach (state() as $state){ ?>
                                        <option <?php
                                        if (!empty($dataContact['prefecture']) && $dataContact['prefecture'] == $state){
                                            echo 'selected';
                                        } else {
                                            if ($state == '岡山県') echo 'selected';
                                        }
                                            ?>  value="<?php echo $state?>"> <?php echo $state?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">ご住所</label>
                                <input type="text" name="address" value="<?php echo $dataContact['address'] ?? '' ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">電話番号</label>
                                <input type="text" name="phone_number" value="<?php echo $dataContact['phone_number'] ?? '' ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">メールアドレス</label>
                                <input type="text" name="email" value="<?php echo $dataContact['email'] ?? '' ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">施工予定地住所</label>
                                <input type="text" value="<?php  echo $dataContact['plan_construction'] ?? '' ?>" name="plan_construction" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">お問い合わせ内容※</label>
                                <textarea name="content_inquiry" required class="form-control" id="" cols="30" rows="5"><?php echo trim($dataContact['content_inquiry'] ?? '');  ?></textarea>
                            </div>
                            <div class="form-check mb-5">
                                <input style="height: 20px; width: 20px; margin-top: 0" required class="form-check-input" type="checkbox" value="" id="checkPrivacy">
                                <label class="form-check-label" for="checkPrivacy" style="margin-left: 10px">
                                    <a href="<?php echo get_permalink(32)?>" style="color: #920683">個人情報保護方針及び利用規約</a>をご確認の上、入力内容の確認をクリックしてください。
                                </label>
                            </div>
                            <button class="btn btn-violet btn-submit-contact">入力内容の確認</button>
                        </form>
                    </div>
                </div>
        </div>
    </section>
    <section id="service-area" class="padding-content">
        <div class="container">
            <h3 class="title-content" data-subtitle="施工地域">SERVICE AREA</h3>
            <p class="description-content">岡山県全域にて、お庭・外構デザイン・施工を行っております。<br>建物を引き立て・使い勝手良い外構デザインを適切な価格にてご提供しています。<br>工事・サービスの対象エリアは下記の通りです。<br>このエリア以外でも対応可能な場合もございますので、一度お問合せください。</p>
            <h4 class="description-content2">庭/外構デザイン・工事対象エリア</h4>
            <dl>
                <dt>岡山県</dt>
                <dd>岡山市（北区・中区・東区・南区・灘崎町、瀬戸町、御津町、建部町）・倉敷市・玉野市・総社市・真庭市・赤磐市・瀬戸内市・和気郡・備前市・吉備中央町・高梁市・小田郡矢掛町・井原市・浅口市・笠岡市・美作市・津山市・新見市など</dd>
            </dl>
        </div>

    </section>
</main>

<?php get_footer(); ?>
<script>
    $(function (){
        let dataForm = {};
        $('#contact-form').submit(function (e){
            e.preventDefault();
            //dataForm = {};
            //$(this).serializeArray().forEach(function (item){
            //    dataForm[`${item.name}`] = item.value;
            //});
            //$(this).serializeArray().forEach(function (item){
            //    $(`.data-contact-${item.name}`).text(item.value);
            //});
            //Swal.showLoading();
            //console.log(dataForm);
            //$.ajax({
            //    url: '<?php //echo admin_url("admin-ajax.php") ?>//',
            //    type: 'post',
            //    data: {
            //        action: 'confirm_user_contact',
            //        data : dataForm
            //    },
            //    success: function (res){
            //        if (res){
            //            window.location.href = '<?php //echo get_permalink(1145)?>//'
            //        }
            //    }
            //})

        });
    });
</script>
