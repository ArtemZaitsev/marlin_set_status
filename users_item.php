<?php
session_start();
include 'function.php';
$email =$_SESSION["user_email"];

if(is_not_logged_in()){
    $path = "page_login.php";
    redirect_to($path);
};

//я не знаю как сюда записать логику кроме как комментарием
//вставил функцию display_create_user_button_for_admin($email) в файл users.php на 52 строку

//получаю данные id, логин и пароль по всем пользователям.
$users = get_all_users();

//получаю имя, организацию и телефон пользователя.
$users_general_info = get_user_general_info($user_id);

//получаю статус и адрес фото пользователям.
get_user_media_info($user_id);

//получаю адреса социальных сетей
get_user_media_info($user_id);

function display_edit_for_admin($email){
    //если админ
    ?>

<? }