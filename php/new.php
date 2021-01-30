<?php
session_start();
include("mysql_connect.inc.php");

$Bname=$_POST['Bname'];
$Aname=$_POST['Aname'];
$Pname=$_POST['Pname'];
$Ptime=$_POST['Ptime'];
$price=$_POST['price'];
$isbn=$_POST['isbn'];
$intro=$_POST['intro'];
$Sname=$_POST['Sname'];
$now = date('Ymd');

//判斷是否有登入，如果沒有則無法瀏覽此頁面
if (@$_SESSION['username'] != null) {
    //新增資料進資料庫語法
    $sql = "insert into properties (name, author, press, pressTime, price, ISBN,intro,supplier,created_at) values ('$Bname', '$Aname', '$Pname', '$Ptime', '$price', '$isbn','$intro','$Sname','$now ')";
    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("新增成功");window.location.assign("../html/new.html");</script>';
    } else {
        echo '<script>alert("新增失敗");history.go(-1);</script>';
    }
}else{
    echo '<script>alert("無權限瀏覽");window.location.assign("../html/login.html");</script>';
}
