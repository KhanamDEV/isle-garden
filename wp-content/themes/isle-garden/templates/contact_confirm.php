<?php
/**
 * Created by PhpStorm
 * User: mtam
 * Date: 11/02/2023
 * Time: 23:02
 * Template Name: Contact Confirm
 */
?>
<?php
    if (empty($_SESSION['dataContact'])){
        header("Location: ".get_permalink('29'));
        exit();
    }
    $dataContact = $_SESSION['dataContact'];
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
                <div id="step2">
                    <div class="content-confirm-contact">
                        <div class="row-data-contact">
                            <span>お名前: </span>
                            <span class="data-contact-name"><?php echo $dataContact['name']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>フリガナ: </span>
                            <span class="data-contact-name"><?php echo $dataContact['furigana']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>郵便番号: </span>
                            <span class="data-contact-name"><?php echo $dataContact['postcode']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>お住まいの都道府県: </span>
                            <span class="data-contact-name"><?php echo $dataContact['prefecture']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>ご住所: </span>
                            <span class="data-contact-name"><?php echo $dataContact['address']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>電話番号: </span>
                            <span class="data-contact-name"><?php echo $dataContact['phone_number']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>メールアドレス: </span>
                            <span class="data-contact-name"><?php echo $dataContact['email']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>施工予定地住所: </span>
                            <span class="data-contact-name"><?php echo $dataContact['plan_construction']; ?></span>
                        </div>
                        <div class="row-data-contact">
                            <span>お問い合わせ内容: </span>
                            <span class="data-contact-name"><?php echo $dataContact['content_inquiry']; ?></span>
                        </div>
                    </div>
                    <div class="group-button-submit">
                        <a class="btn btn-secondary btn-back-step d-flex align-items-center justify-content-center mr-3" href="<?php echo get_permalink(29); ?>" style="height: 50px">入力内容訂正</a>
                        <button class="btn btn-violet btn-send-data">送信実行</button>
                    </div>
                </div>
                <div id="step3" style="display:none;">
                    <p class="text-center">
                        お問い合わせをいただきまして、
                        <br>
                        ありがとうございました。
                        <br>
                        後日ご連絡させて頂きます。
                    </p>
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
        let data = JSON.parse('<?php echo json_encode($dataContact)?>');
        $(".btn-send-data").click(function (){
            Swal.showLoading();
            $.ajax({
                url: '<?php echo admin_url("admin-ajax.php") ?>',
                type: 'post',
                data: {
                    action: 'send_contact',
                    data : data
                },
                success: function (res){
                    console.log(res)
                    if (res){
                        window.location.href = '<?php echo get_permalink(1147)?>'
                    }
                }
            })
    });
    });
</script>