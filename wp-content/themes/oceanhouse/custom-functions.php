<?php

/*
Define directory variables.
*/
require get_template_directory() . '/inc/define.php';

/*
Disable Guttenberg
*/
add_filter( 'use_block_editor_for_post', '__return_false' );

/*
Custom MW WP Form validation messages
*/
function contact_validation_rules( $Validation, $data, $Data ) {
    $Validation->set_rule('fullname', 'noEmpty',  array('message' => '名前は必須です'));
    $Validation->set_rule('phonetic', 'noEmpty',  array('message' => 'ふりがなが必要です'));
    $Validation->set_rule('email', 'noEmpty',  array('message' => 'メールが必要です'));
    $Validation->set_rule( 'email', 'mail', array('message' => 'メールアドレスの形式ではありません。'));
    $Validation->set_rule('message', 'noEmpty',  array('message' => 'メッセージが必要です'));

    return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-20', 'contact_validation_rules', 10, 3 );

function document_validation_rules( $Validation, $data, $Data ) {
    $Validation->set_rule('fullname', 'noEmpty',  array('message' => '名前は必須です'));
    $Validation->set_rule('phonetic', 'noEmpty',  array('message' => 'ふりがなが必要です'));
    $Validation->set_rule('email', 'noEmpty',  array('message' => 'メールが必要です'));
    $Validation->set_rule( 'email', 'mail', array('message' => 'メールアドレスの形式ではありません。'));
    $Validation->set_rule('phone', 'noEmpty',  array('message' => '電話が必要です'));
    $Validation->set_rule('postal', 'noEmpty',  array('message' => '郵便が必要です'));
    $Validation->set_rule('address', 'noEmpty',  array('message' => '住所が必要です'));

    return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-25', 'document_validation_rules', 10, 3 );