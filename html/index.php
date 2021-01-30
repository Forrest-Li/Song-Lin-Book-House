<?php
session_start();
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
                                    <a class="nav-link font-resize" href="./index.php">松林書屋</a>
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
                                        <a href="./index.php" class="nav-link font-resize">首頁</a>
                                    </li>
                                    <li class="nav-item nav-item-custom">
                                        <a href="./blogs.html" class="nav-link font-resize">部落格</a>
                                    </li>
                                    <li class="nav-item nav-item-custom">
                                        <a href="./activities.html" class="nav-link font-resize">公佈欄</a>
                                    </li>
                                    <li class="nav-item center-items-in-list">
                                        <form method="post" action="../php/search.php" class="form-inline">
                                            <input class="form-control mr-sm-2" placeholder="書目名稱" type="text"
                                                   name="bname"
                                                   value="">
                                            <button class="btn btn-primary" type="submit">館藏搜尋</button>
                                        </form>
                                    </li>
                                    <li class="nav-item center-items-in-list">
                                        <!-- 抓取COOKIE來察看有沒有登入 -->
                                        <!-- 如果COOKIE的username是null的表示沒有 -->
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

                                        <a class="dropdown-item" href="../php/bookMang.php">管理書籍</a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="../php/logout.php">登出</a>
                                    </div>
                                </li>
                                EOT;
                                        } else {
                                            print <<<EOT
                                <form action="login.html" class="form-inline">
                                    <button class="btn btn-primary" type="submit">登入</button>
                                </form>
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

    <!-- banner -->
    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url(../images/book-house-bg.jpg)">
            <div class="slider-content">
                <div class="overlay"></div>
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 text-center">
                            <h3 class="slide-sub-title" data-animation-in="slideInRight">歡迎來到松林書屋</h3>
                            <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                <a href="activities.html" class="slider btn btn-primary">探索最近的活動</a>
                                <a href="blogs.html" class="slider btn btn-primary border">看看最新的貼文</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(../images/activities/activity-1-3.jpg)">
            <div class="slider-content text-left">
                <div class="overlay"></div>
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h3 class="slide-title" data-animation-in="fadeIn">最近的活動</h3>
                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">立體書製作</h3>
                            <p data-animation-in="slideInRight">
                                <a href="activity-1.html" class="slider btn btn-primary border">詳細了解</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(../images/articles/fold-book-3.jpg)">
            <div class="slider-content text-right">
                <div class="overlay"></div>
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h3 class="slide-sub-title" data-animation-in="fadeIn">立體書製作活動紀錄</h3>
                            <p class="slider-description lead" data-animation-in="slideInRight">最新的貼文</p>
                            <div data-animation-in="slideInLeft">
                                <a href="blog-1.html" class="slider btn btn-primary border"
                                   aria-label="learn-more-about-us">詳細了解</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- banner end -->

    <!-- book house intro -->
    <section id="ts-service-area" class="ts-service-area">
        <div class="container border-dashed">
            <div class="row text-center">
                <div class="col-12 decoration-custom-style-1">
                    <h2 class="section-title">松林書屋是什麼呢？</h2>
                    <h3 class="section-sub-title">書屋，但不僅僅是書屋</h3>
                </div>
            </div>
            <!--/ Title row end -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <i class="fa fa-5x fa-book" aria-hidden="true" style="width: 75px"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">原住民文化藏書部落圖書館</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 1 end -->

                    <div class="ts-service-box d-flex bg-color-fff2cc-custom">
                        <div class="ts-service-box-img">
                            <i class="fa fa-5x fa-university" aria-hidden="true"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">部落文化中心</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 2 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <i class="fa fa-5x fa-exchange-alt" aria-hidden="true" style="width: 75px"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">城鄉交流與大學生平台</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 3 end -->

                </div><!-- Col end -->

                <div class="col-lg-4 text-center">
                    <img loading="lazy" class="img-fluid" src="../images/book-house-logo.png"
                         alt="service-avater-image">
                </div><!-- Col end -->

                <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="../images/study-icon.png" alt="service-icon" style="width: 75px">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">青年讀書會</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 4 end -->

                    <div class="ts-service-box d-flex bg-color-fff2cc-custom">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="../images/movie-theater-icon.png" alt="service-icon"
                                 style="width: 75px">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">部落電影院</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 5 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="../images/classroom-icon.png" alt="service-icon"
                                 style="width: 75px">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">課輔小教室</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 6 end -->
                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
    </section><!-- book house intro end -->

    <!-- book house location -->
    <section id="ts-features" class="ts-features">
        <div class="container border-dashed">
            <div class="row">
                <div class="col-lg-6 decoration-custom-style-2">
                    <div class="ts-intro">
                        <h2 class="section-title">書屋在哪裡呢？</h2>
                        <h3 class="into-sub-title">大山深處，一個充滿愛與溫暖的地方</h3>
                        <ul class="list-arrow">
                            <li>
                                <span class="project-info-label">地址：</span>
                                <p class="project-info-content">南投縣仁愛鄉親愛村松林部落松林書屋</p>
                            </li>
                            <li>
                                <span class="project-info-label">聯絡電話：</span>
                                <p class="project-info-content">(+886) 0916 397 918</p>
                            </li>
                            <li>
                                <span class="project-info-label">執行人：</span>
                                <p class="project-info-content">啟明·拉瓦（趙啟明）</p>
                            </li>
                        </ul>
                    </div><!-- Intro box end -->

                </div><!-- Col end -->

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="google-map">
                        <div id="map" class="map" data-latitude="23.970134" data-longitude="121.096726"
                             data-marker="../images/marker.png" data-marker-name="Constra"></div>
                    </div>
                    <!--/ Accordion end -->

                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- book house location end -->

    <!-- recent activity -->
    <section id="main-container" class="main-container">
        <div class="container border-dashed">
            <div class="row">
                <div class="col-lg-6 decoration-custom-style-2">
                    <h2 class="section-title">走過路過，不要錯過</h2>
                    <h3 class="into-sub-title">最近的活動</h3>
                    <a href="activity-1.html"><h4 style="color: #ffb600;">立體書製作</h4></a>
                    <p>👉 立體書交響樂實體課程上什麼？ 讓大家瞧一下，「黑膠留聲機立體卡」一卡雙結構，兩面皆可動，右方是拉動即彈起的留聲機；左方
                        是可動的黑膠唱片。 課程內容豐富，此堂課除了能看到立體書，學習到立體書結構外，還能帶回一張，具有傳達心意與紀念價值的
                        立體卡送給親愛的家人朋友唷！...</p>

                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0">

                    <div id="page-slider" class="small-bg">

                        <div class="item" style="background-image: url("../images/articles/fold-book-3.jpg")">
                            <img style="width: 100%; height: auto" src="../images/articles/fold-book-3.jpg">
                        </div><!-- Item 1 end -->

                    </div><!-- Page slider end-->


                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- recent activity end -->

    <!-- footer -->
    <?php
    include('componets/footer.html');
    ?><!-- Footer end -->

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7R9yaTcPCXL6jXo999e2LsslI4sr5RrQ"></script>
    <!--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&callback=initMap&libraries=&v=weekly" defer></script>
    -->
    <script src="../js/map.js"></script>
    <!-- Custom -->
    <script src="../js/main.js"></script>

</div>
</body>
</html>
