<?php
include("mysql_connect.inc.php");
$id=$_GET['id'];
//刪除資料進資料庫語法
$sql = "DELETE FROM properties where id ='$id'";
if (mysqli_query($mysqli, $sql)) {
    echo '<script>alert("刪除成功");history.go(-1);</script>';
} else {
    echo '<script>alert("刪除失敗");history.go(-1);</script>';;
}
