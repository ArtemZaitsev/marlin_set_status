<?php
session_start();
include 'function.php';

// берем данные из формы файла create_user.php методом POST

// безопасность
$email =$_POST["email"];
$password =$_POST["password"];

//Общая информация
$user_name =$_POST["user_name"];
$job_title =$_POST["job_title"];
$phone =$_POST["phone"];
$address =$_POST["address"];

// медиа
$status=$_POST["user_status"];
$avatar =$_POST["user_avatar"];

//Социальные сети
$vk =$_POST["vk"];
$telegram =$_POST["telegram"];
$instagram =$_POST["instagram"];

// используем функцию add_user, которая была прописана в блоке функций "Регистрация"
add_user($email,$password);


//получаем id только что созданного юзера из базы
$user_id = get_user_id_by_email($email);
//echo($user_id);
//die;

//используем функцию add_general_info_about_user
add_general_info_about_user($user_name, $job_title, $phone, $address, $user_id);

//используем функцию add_general_info_about_user
add_social_info_about_user($vk, $telegram, $instagram, $user_id);

// удаляем данные пользователмя из глобального массива POST
unset_user_in_post();

//Возвращаемся на страницу пользователей для отображения общего списка
redirect_to("users.php");

//print_r($_POST);
//die;