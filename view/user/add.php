<?php

use Controller\UserController;
use Model\database\DBConnect;
use Model\User\User;
use Model\UserDB\UserDB;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $sectors = $_POST['sectors'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $userController = new UserController();
    $user = new User($name, $sectors, $price, $quantity , $date , $description);
    $userController->add($user);
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><h2>Thêm Mặt Hàng</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">

            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Hàng</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loại Hàng</label>
                    <input type="text" class="form-control" name="sectors">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Giá</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Số Lượng</label>
                    <input type="text" class="form-control" name="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ngày Tạo</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô Tả Về Mặt Hàng</label>
                    <input type="text" class="form-control" name="description">
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="submit" class="btn btn-primary">trở lại</button>
            </form>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</form>
</body>
</html>
