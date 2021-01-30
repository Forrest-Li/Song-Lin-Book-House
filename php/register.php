<?php

include("mysql_connect.inc.php");

$id = $_POST['id'];
$pass = $_POST['pw'];
$name = $_POST['name'];
$nid = $_POST['nid'];
$email = $_POST['email'];
$addr = $_POST['addr'];
$now = date('Ymd');

$sql_select = "SELECT * FROM users WHERE user = '$id'";
$ret = mysqli_query($mysqli, $sql_select);
$row = mysqli_fetch_array($ret);

//判斷資料庫表中是否已存在該使用者名稱
if (@$row != null) {
    echo '<script>alert("帳號重複");history.go(-1);</script>';
} else {
    //新增資料進資料庫語法
    $sql = "insert into users (user, name, password, nid, address, email,created_at) values ('$id', '$name', '$pass', '$nid', '$addr', '$email','$now ')";
    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("新增成功");window.location.assign("../html/index.php");</script>';
    } else {
        echo '<script>alert("新增失敗");history.go(-1);</script>';;
    }
}

