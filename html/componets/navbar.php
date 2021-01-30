<?php
session_start();
?>
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
                                        <input class="form-control mr-sm-2" placeholder="書目名稱" type="text" name="bname"
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
                                        <a class="dropdown-item" href="../../php/bookMang.php">管理書籍</a>
                                        <a class="dropdown-item" href="#">Another action</a>
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
