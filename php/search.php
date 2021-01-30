<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet" type="text/css">

    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>搜尋結果</title>
</head>
<body class="text-center">
<div class="overlay"></div>
<main class="row form-area">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0 right-side div-center-vert-custom">
        <form class="form-signin div-center-hori-custom w-80-custom">
            <div class="text-center-custom w-100 div-center-hori-custom py-5"><label class="h4">搜尋結果</label></div>
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
                </tr>
                </thead>
                <tbody>
                <?php
                include("mysql_connect.inc.php");
                $bname = $_POST['bname'];
                $sql = "SELECT * FROM properties WHERE name LIKE '%$bname%'";
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
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </form>
    </div>
</main>
</body>
</html>
