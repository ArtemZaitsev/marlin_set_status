<?php
//передаем все необходимые переменные
session_start();
include 'function.php';
$user_id = $_GET["id"];
$status = $_POST["user_status"];

//echo $user_id;
//echo $status;
//die;

//устанавливаем статус
set_status($user_id, $status);

set_flash_message("success","Ваши данные успешно обновлены.");
redirect_to("users.php?id=$user_id");
unset_flash_message();