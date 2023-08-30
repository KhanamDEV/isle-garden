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
$per_page = 5;
$page = isset( $_GET['cpage'] ) ? abs( (int) $_GET['cpage'] ) : 1;
if ($page > 1) {
    $offset = ($page * $per_page) - $per_page;
} else {
    $offset = 0;
}

$contact_sql = "select * from wp_contacts order by id desc limit $per_page offset $offset";
$contacts = $wpdb->get_results($contact_sql, OBJECT);
$total = $wpdb->get_var("SELECT count(id) from wp_contacts  ");
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="custom-company custom-order">
        <table class="table-striped table table-order">
            <thead class="thead-light">
            <tr>
                <th>お名前</th>
                <th>フリガナ</th>
                <th>郵便番号</th>
                <th>お住まいの都道府県</th>
                <th>ご住所</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($contacts as $key => $item)
                echo '<tr>
                <td><a href="#">'.$item->name.'</a></td>
                <td><a href="#">'.$item->furigana.'</a></td>
                <td><a href="#">'.$item->postcode.'</a></td>
                <td><a href="#">'.$item->prefecture.'</a></td>
                <td><a href="#">'.$item->address.'</a></td>
                <td><a href="#">'.$item->phone_number.'</a></td>
                <td><a href="#">'.$item->email.'</a></td>
                <td><a href="'.site_url('/wp-admin/detail-contact.php?contact_id=').$item->id.'"><button class="btn btn-info">詳細</button></a></td>
            </tr>
            ';
            ?>

            </tbody>
        </table>

        <nav class="wrap-pagination justify-content-center" aria-label="Page navigation example">

            <?php

            echo paginate_links( array(
                'base' => add_query_arg( 'cpage', '%#%' ),
                'format' => '',
                'prev_text' => __('&laquo;'),
                'next_text' => __('&raquo;'),
                'total' => ceil($total / $per_page),
                'current' => $page,
                'type' => 'list'
            ));


            ?>

        </nav>
    </div>
<?php
include(ABSPATH . 'wp-admin/admin-footer.php');
?>