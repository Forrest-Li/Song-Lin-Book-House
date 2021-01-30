<?php
session_start();
include("mysql_connect.inc.php");

$id = $_POST['id'];
$Bname=$_POST['Bname'];
$Aname=$_POST['Aname'];
$Pname=$_POST['Pname'];
$Ptime=$_POST['Ptime'];
$price=$_POST['price'];
$isbn=$_POST['isbn'];
$intro=$_POST['intro'];
$Sname=$_POST['Sname'];

//判斷是否有登入，如果沒有則無法瀏覽此頁面
if (@$_SESSION['username'] != null) {
    //新增資料進資料庫語法
    $sql = "update properties set name='$Bname',author='$Aname',press='$Pname',pressTime='$Ptime',price='$price',ISBN='$isbn',intro='$intro',supplier='$Sname' WHERE id ='$id'";
    if (mysqli_query($mysqli, $sql)) {
        echo '<script>alert("修改成功");window.location.assign("./bookMang.php");</script>';
    } else {
        echo '<script>alert("修改失敗");history.go(-1);</script>';
    }
}else{
    echo '<script>alert("無權限瀏覽");window.location.assign("../html/login.html");</script>';
}
