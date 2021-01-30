<?php session_start();
//將session清空
unset($_SESSION['username']);
echo '<script>history.go(-1);</script>';
