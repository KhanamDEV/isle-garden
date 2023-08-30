<?php
/**
 * Created by PhpStorm
 * User: Kha Nam (Andrew Nguyen)
 * Date: 19/02/2023
 * Time: 12:30
 */

require_once (dirname(__FILE__).'/admin.php');
include (ABSPATH. 'wp-admin/admin-header.php');

global $wpdb;

?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .wrap-info-customer{
            background-color: white;
            padding: 50px;
            font-size: 16px;
        }
        .group-info{display: flex; align-items: center; margin-bottom: 20px}
        .group-info h4{font-size: 16px; width: 250px}
    </style>
<?php
$contact_id = isset( $_GET['contact_id'] ) ? abs( (int) $_GET['contact_id'] ) : '';
if (!empty($contact_id)) {
    $contact_sql = "select * from wp_contacts where id = $contact_id";
    $contacts = $wpdb->get_results($contact_sql, OBJECT);
    if (!empty($contacts)) {
        $contact = $contacts[0];
        ?>
        <div class="custom-company custom-order">
            <div class="wrap-info-customer">
                <div class="row">
                    <div class="col-md-6">
                        <div class="group-info">
                            <h4>お名前:</h4>
                            <label><?php echo $contact->name ?? ''; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>フリガナ :</h4>
                            <label><?php echo $contact->furigana ?? '' ; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>郵便番号 :</h4>
                            <label><?php echo $contact->postcode ?? ''; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>お住まいの都道府県 :</h4>
                            <label><?php echo $contact->prefecture ?? ''; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>ご住所 :</h4>
                            <label><?php echo $contact->address ?? ''; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>電話番号 :</h4>
                            <label><?php echo $contact->phone_number; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>メールアドレス :</h4>
                            <label><?php echo $contact->email; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>施工予定地住所 :</h4>
                            <label><?php echo $contact->plan_construction; ?></label>
                        </div>
                        <div class="group-info">
                            <h4>お問い合わせ内容 :</h4>
                            <label><?php echo $contact->content_inquiry; ?></label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo '<div class="wp-die-message">Error! Contact empty</div>';
    }
} else {

    echo '<div class="wp-die-message">Error! Contact empty</div>';
}

?>

<?php
include(ABSPATH . 'wp-admin/admin-footer.php');
?>