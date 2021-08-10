<?php

session_start();
include 'function.php';
$auth_email = $_SESSION["user_email"];
$id = $_GET["id"];
$input_email = $_POST["form_email"];
$input_password = $_POST["form_password"];
$user = get_user_by_id($id, $input_email);




if(is_email_free($id, $input_email) === "true"){
//    echo $id;
//    echo "<br/>";
//    echo $input_email;
//    echo "<br/>";
//    echo $input_password;
//    die;

    edit_user($input_email, $input_password, $id);
//    die;
    set_flash_message("success","Ваши данные успешно обновлены.");
    redirect_to("page_profile.php?id=$id");
    unset_flash_message();
} else {
    set_flash_message("danger","Пользователь с e-mail <b>$input_email</b> существует.<br/> Придумайте другой email.");
    redirect_to("security.php?id=$id");
    unset_flash_message();
};

