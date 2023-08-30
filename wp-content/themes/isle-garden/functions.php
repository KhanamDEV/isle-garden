<?php

require_once ABSPATH . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')):
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('twenty-twenty-one-style', 'twenty-twenty-one-style', 'twenty-twenty-one-print-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);


// END ENQUEUE PARENT ACTION
session_start();
/**
 * @param $path
 */
function asset($path)
{
    echo get_stylesheet_directory_uri() . "/assets/$path";
}

/**
 * @param $param
 */
function dd($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
    exit();
}

/**
 * Function register menu
 */
register_nav_menus([
    'header-nav' => 'Header menu',
    'footer-nav' => 'Footer menu',
]);

function state()
{
    return [
        "北海道", "青森県", "岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県",
        "東京都", "神奈川県", "新潟県", "富山県", "石川県", "福井県", "山梨県", "長野県", "岐阜県", "静岡県", "愛知県", "三重県",
        "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県",
        "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県"];
}

/**
 * Table Contact
 */
// function isle_garden_table_contact(){
//     global $wpdb;
//     $charsetCollate = $wpdb->get_charset_collate();
//     $contact = $wpdb->prefix . 'contacts';
//     $createContactTable = "CREATE TABLE IF NOT EXISTS `{$contact}` (
//             `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
//             `name` varchar (255) ,
//             `furigana` varchar(255) ,
//             `postcode` varchar(255) ,
//             `prefecture` varchar(255) ,
//             `address` varchar(255) ,
//             `phone_number` varchar(255) ,
//             `email` varchar(255) ,
//             `plan_construction` varchar(255) ,
//             `content_inquiry` longtext ,       
//             `created_at` timestamp NOT NULL,
//             PRIMARY KEY (`id`)
//         ) {$charsetCollate};";
//     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//     dbDelta( $createContactTable );
// }
// add_action('init', 'isle_garden_table_contact');

/**
 * Action when user send contact
 */
add_action('wp_ajax_confirm_user_contact', 'confirmUserContact');
add_action('wp_ajax_nopriv_confirm_user_contact', 'confirmUserContact');

function confirmUserContact()
{
    $data = $_POST['data'];
    $_SESSION['dataContact'] = $data;
    echo 1;
}

add_action('wp_ajax_send_contact', 'sendContact');
add_action('wp_ajax_nopriv_send_contact', 'sendContact');
function sendContact()
{
    global $wpdb;

    $data = $_POST['data'];
    $dataContact = $data;

    $templateJa = '
     <div>
  <p>清水恭成様</p>
  <br>
<p>お問い合わせありがとうございます。</p>
  <br>

<p>こちらは自動返信メールです。 <br>
2～3営業日中に連絡させて頂きます。</p>

<br>
<p>迷惑メール設定等で、「申込み確認メール」が届かないケースが増えております。<br>
そのため、お客様へ申込み確認のお電話をさせて頂く場合がございます。</p>
<br>

<p>お送り頂いた内容の控えです。</p>
  <br>
  
  <div style="display: flex; ">
                             <span style="display: block; width: 180px">お名前: </span>
                             <span style="display: block;" class="data-contact-name">' . $dataContact['name'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">フリガナ: </span>
                             <span style="display: block;" class="data-contact-furigana">' . $dataContact['furigana'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">郵便番号: </span>
                             <span style="display: block;" class="data-contact-postcode">' . $dataContact['postcode'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">お住まいの都道府県: </span>
                             <span style="display: block;" class="data-contact-prefecture">' . $dataContact['prefecture'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">ご住所: </span>
                             <span style="display: block;" class="data-contact-address">' . $dataContact['address'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">電話番号: </span>
                             <span style="display: block;" class="data-contact-phone_number">' . $dataContact['phone_number'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">メールアドレス: </span>
                             <span style="display: block;" class="data-contact-email">' . $dataContact['email'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">施工予定地住所: </span>
                             <span style="display: block;" class="data-contact-plan_construction">' . $dataContact['plan_construction'] . '</span>
                         </div>
                         <div style="display: flex; ">
                             <span style="display: block; width: 180px">お問い合わせ内容: </span>
                             <span style="display: block;" class="data-contact-content_inquiry">' . $dataContact['content_inquiry'] . '</span>
                         </div>
  <p>テスト</p>
  
<br>
  <br>
<p>===========================================</p>
<p> 合同会社   アイル</p>
 <p>URL  : <a href="https://isle-garden.com">https://isle-garden.com</a></p>
<p> MAIL : <a href="isle2569.garden@gmail.com">isle2569.garden@gmail.com</a></p>
 <p>住所  : 岡山県岡山市中区江崎</p>
<p> TEL   : 080-1649-5111</p>
<p>Instagram: <a href="https://www.instagram.com/isle.garden/">isleアイル（エクステリア外構ガーデン岡山） (@isle.garden) • Instagram photos and videos</a></p>
<p>===========================================</p>
</div>
     ';

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->CharSet = "utf-8";
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kharnam3009@gmail.com'; // SMTP username
        $mail->Password = 'arohdxyecfvwwljd';   // SMTP password
        $mail->SMTPSecure = 'tls';  // encryption TLS/SSL
        $mail->Port = 587;
        $mail->setFrom('no-reply.isle2569.garden@gmail.com', 'Isle Garden');
        $mail->addAddress('isle2569.garden@gmail.com');
        $mail->addCC(['khanamdev@gmail.com', 'minhtam.ub9@gmail.com']);
        $mail->isHTML(true);
        $mail->Subject = '[isle]お問い合わせを受け付けました';
        $mail->Body = $templateJa;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 1;
        die();

    } catch (Exception $e) {
        echo $e->getMessage();
    }
    die();
}

