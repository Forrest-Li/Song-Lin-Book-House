<?php
session_start();
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
$sql = "SELECT * FROM users where user = '$id'";
$result = mysqli_query($mysqli, $sql);
$row = @mysqli_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if ($row != null && $row[3] == $id && $row[2] == $pw) {
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['username'] = $id;
    echo '<script>window.location="../html/index.php";</script>';
} else {
    echo '<script>alert("帳號或密碼錯誤");history.go(-1);</script>';
}
