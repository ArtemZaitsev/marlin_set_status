<?php
session_start();
include 'function.php';

// берем данные из формы файла edit.php методом POST

//Общая информация
$user_name =$_POST["user_name"];
$job_title =$_POST["job_title"];
$phone =$_POST["phone"];
$address =$_POST["address"];
$user_id =$_POST["user_id"];

//echo $user_id;

//die;


//используем функцию edit_general_info_about_user для изменения данных пользователя
edit_general_info_about_user($user_name, $job_title, $phone, $address, $user_id);

//Возвращаемся на страницу пользователей для отображения общего списка
redirect_to("users.php");