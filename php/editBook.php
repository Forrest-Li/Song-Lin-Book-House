<?php
include("mysql_connect.inc.php");
$id = $_GET['id'];
//刪除資料進資料庫語法
$sql = "SELECT * FROM properties WHERE id ='$id'";
$result= mysqli_query($mysqli, $sql);
$row = @mysqli_fetch_row($result);
?>
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
    <title>修改書籍</title>
</head>
<body class="text-center">
<div class="overlay"></div>
<main class="row form-area">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0 right-side div-center-vert-custom">
        <form class="form-signin div-center-hori-custom w-80-custom" method="post" action="updateBook.php">
            <input type="hidden" id="id" name="id" value="<?php echo $row[0]; ?>" >
            <div class="text-center-custom w-100 div-center-hori-custom py-5"><label
                    class="h4">修改-<?php echo $row[1]; ?></label></div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputBookname" class="visually-hidden">書名</label>
                </div>
                <div class="px-2 flex-fill"><input type="text" id="inputBookname" name="Bname"
                                                   value="<?php echo $row[1]; ?>"
                                                   class="form-control"
                                                   placeholder="xxxxxx"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputAuthorname"
                                                                            class="visually-hidden">作者</label>
                </div>
                <div class="px-2 flex-fill"><input type="text" id="inputAuthorname" name="Aname"
                                                   value="<?php echo $row[2]; ?>"
                                                   class="form-control"
                                                   placeholder="xxxxxx"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputPressname"
                                                                            class="visually-hidden">出版社</label>
                </div>
                <div class="px-2 flex-fill"><input type="text" id="inputPressname" name="Pname"
                                                   value="<?php echo $row[3]; ?>"
                                                   class="form-control"
                                                   placeholder="xxx出版社"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputPresstime"
                                                                            class="visually-hidden">出版時間</label>
                </div>
                <div class="px-2 flex-fill"><input type="date" id="inputPresstime" name="Ptime"
                                                   value="<?php echo $row[4]; ?>"
                                                   class="form-control"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputPrice"
                                                                            class="visually-hidden">價格</label>
                </div>
                <div class="px-2 flex-fill"><input type="number" id="inputPrice" name="price"
                                                   value="<?php echo $row[5]; ?>"
                                                   class="form-control"
                                                   placeholder="xxxxxx"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputISBN"
                                                                            class="visually-hidden">ISBN</label>
                </div>
                <div class="px-2 flex-fill"><input type="number" id="inputISBN" name="isbn"
                                                   value="<?php echo $row[6]; ?>"
                                                   class="form-control"
                                                   placeholder="9789861817286"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputIntro"
                                                                            class="visually-hidden">簡介</label>
                </div>
                <div class="px-2 flex-fill"><input type="text" id="inputIntro" name="intro"
                                                   value="<?php echo $row[7]; ?>"
                                                   class="form-control"
                                                   placeholder="xxxxxx"
                                                   required="" autofocus=""></div>
            </div>
            <div class="d-flex w-100 div-center-hori-custom p-0">
                <div class="text-center-custom text-width-64px py-2"><label for="inputSupplier" class="visually-hidden">捐贈者</label>
                </div>
                <div class="px-2 flex-fill"><input type="text" id="inputSupplier" name="Sname"
                                                   value="<?php echo $row[8]; ?>"
                                                   class="form-control"
                                                   placeholder="xxxxxx"
                                                   autofocus=""></div>
            </div>
            <div class="py-5">
                <button type="submit" class="btn btn-lg btn2-custom w-100" title="Pass" name=".new" value="Pass">修改
                </button>
            </div>
        </form>
    </div>

</main>
</body>
</html>
