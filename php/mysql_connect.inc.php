<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "lms";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "";

//對資料庫連線
if(!@$mysqli=mysqli_connect($db_server, $db_user, $db_passwd))
    die("無法對資料庫連線");

//資料庫連線採UTF8
mysqli_set_charset($mysqli, "UTF8");

//選擇資料庫
if(!@mysqli_select_db($mysqli,"$db_name"))
    die("無法使用資料庫");
