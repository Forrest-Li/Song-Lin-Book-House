<?php
session_start();
if (@$_SESSION['username'] == null) {
    echo '<script>alert("無權限瀏覽");window.location.assign("../html/login.html");</script>';
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- CSS styles
    ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../resources/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="../resources/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="../resources/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="../resources/slick/slick.css">
    <link rel="stylesheet" href="../resources/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="../resources/colorbox/colorbox.css">
    <!-- Custom Styles-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" type="image/png" href="../images/book-house-logo.png">

    <!-- Page info
    ================================================== -->
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>松林書屋</title>
</head>
<body>
<div class="body-inner">

    <!-- navbar -->
    <header id="header" class="header-one">
        <div class="site-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark p-0 row">
                            <div class="navbar-brand-custom">
                                <div class="navbar-brand-inner">
                                    <a class="nav-link font-resize" href="../html/index.php">松林書屋</a>
                                </div>
                            </div>

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbar-collapse" class="collapse navbar-collapse justify-content-end">
                                <ul class="nav navbar-nav me-auto">
                                    <li class="nav-item nav-item-custom">
                                        <a href="../html/index.php" class="nav-link font-resize">首頁</a>
                                    </li>
                                    <li class="nav-item nav-item-custom">
                                        <a href="../html/new.html" class="nav-link font-resize">新增書籍</a>
                                    </li>
                                    <li class="nav-item center-items-in-list">
                                        <form action="bookMang.php" class="form-inline">
                                            <input class="form-control mr-sm-2" placeholder="書目名稱" type="text"name="bname" value="">
                                            <button class="btn btn-primary" type="submit">館藏搜尋</button>
                                        </form>
                                    </li>
                                    <li class="nav-item center-items-in-list">
                                        <!--                                        抓取COOKIE來察看有沒有登入-->
                                        <!--                                        如果COOKIE的username是null的表示沒有-->
                                        <?php
                                        if (@$_SESSION['username'] != null) {
                                            print <<<EOT
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
EOT;
                                            echo $_SESSION['username'];
                                            print <<<EOT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../php/logout.php">登出</a>
        </div>
      </li>
EOT;
                                        } else {
                                            print <<<EOT
                                            <form action="login.html" class="form-inline">
                                            <button class="btn btn-primary" type="submit">登入</button>
                                            </form>'
                                            EOT;
                                        }
                                        ?>
                                    </li>
                                    <li class="nav-item center-items-in-list">
                                        <a href="https://www.facebook.com/松林書屋-松林部落原住民文化與文學主題圖書館-104053144462299/?ref=page_internal"
                                           style="padding: 15px">
                                            <img
                                                src="../images/Facebook-icon.png" style="height:40px"
                                                alt="松林書屋FB粉絲專頁">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->

            </div>
            <!--/ Container end -->

        </div>
    </header><!-- navbar end -->
    <section id="ts-service-area" class="ts-service-area">
    <div class="text-center-custom w-100 div-center-hori-custom py-5"><label class="h4">所有書籍</label></div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">書名</th>
            <th scope="col">作者</th>
            <th scope="col">出版社</th>
            <th scope="col">出版時間</th>
            <th scope="col">價格</th>
            <th scope="col">ISBN</th>
            <th scope="col">簡介</th>
            <th scope="col">捐贈者</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include("mysql_connect.inc.php");
        $sql = "SELECT * FROM properties";
        @$result = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_row($result)) {
            ?>
            <tr>
                <td>
                    <?php
                    echo $row[1];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[2];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[3];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[4];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[5];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[6];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[7];
                    ?>
                </td>
                <td>
                    <?php
                    echo $row[8];
                    ?>
                </td>
                <td>
                    <div class="span2">
                        <a rel="tooltip" title="Delete" id="delete-<?php echo $row[0]; ?>"
                           onclick="var yes = confirm('你確定要刪除「<?php echo $row[1]; ?>」這本書嗎？');

if (yes) {
    window.location.assign('./deleteBook.php?id=<?php echo $row[0]; ?>');
} else {
}"
                           class="btn-default"><i class="fas fa-trash"></i></i></a>
                        <div class="span1">
                            <a rel="tooltip" title="Edit" id="edit-<?php echo $row[0]; ?>"
                               href="editBook.php<?php echo '?id=' . $row[0]; ?>" class="btn-default"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    </section>
    <!-- footer -->
    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">關於</h3>
                        <i class="fa fa-info-circle"></i> 松林書屋
                        <p>松林部落原住民文化與文學主題圖書館</p>
                        <p>執行人:啟明.拉瓦(趙啟明)
                            <br> 贊助者:逢甲建築小書屋第11號。
                            <br> 功能
                            <br> 1.原住民文化藏書部落圖書館
                            <br> 2.部落文化中心
                            <br> 3.城鄉交流與大學生平台
                            <br> 4.青年讀書會
                            <br> 5.部落電影院
                            <br> 6.課輔小教室
                            <br> 7.小型展覽館</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://github.com/themefisher" aria-label="Github"><i
                                            class="fab fa-github"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">相關資訊</h3>
                        <div class="working-hours">
                            <br> <i class="fa fa-phone"></i> 聯繫電話： <span class="text-right">0916 397 918</span>
                            <br> <i class="fa fa-envelope"></i> E-mail: <span
                                class="text-right">chiming.lawa@gmail.com</span>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <h3 class="widget-title">相關網站</h3>
                        <ul class="list-arrow">
                            <li><a href="service-single.html">相關網站1</a></li>
                            <li><a href="service-single.html">相關網站2</a></li>
                            <li><a href="service-single.html">相關網站3</a></li>
                            <li><a href="service-single.html">相關網站4</a></li>
                        </ul>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, 小書屋工作室</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="footer-menu text-center text-md-right">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">關於我們</a></li>
                                <li><a href="#">團隊</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Row end -->

                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>

            </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer><!-- Footer end -->

    <!-- Javascript files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="../resources/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="../resources/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="../resources/slick/slick.min.js"></script>
    <script src="../resources/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="../resources/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="../resources/shuffle/shuffle.min.js" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
    <!--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&callback=initMap&libraries=&v=weekly" defer></script>
    -->
    <script src="../js/map.js"></script>
    <!-- Custom -->
    <script src="../js/main.js"></script>

</div>
</body>
</html>
