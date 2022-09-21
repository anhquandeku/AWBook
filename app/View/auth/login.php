<?php

use App\Core\Session;
use App\Core\View;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AWBook</title>
    <link rel="stylesheet" href="<?= View::assets('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.css') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/AW.png') ?>" type="image/x-icon')" />
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/template.css') ?>" />
    <style>

        .background {
            position: absolute;
            z-index: -1;
            width: 100%;
            background: radial-gradient(circle, rgba(2, 0, 36, 1) 0%, rgba(255, 183, 117, 1) 0%, rgba(249, 249, 249, 1) 100%, rgba(0, 212, 255, 1) 100%);
            filter: blur(2px);
        }

        .auth {
            background-color: white;
            width: 50%;
            box-shadow: rgb(100 100 111 / 30%) 0px 7px 29px 0px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            background-color: #DDDDDD;
            height: 100vh;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40%;
            background-color: white;
            border-radius: 5px;
            box-shadow: rgb(100 100 111 / 30%) 0px 7px 29px 0px;
        }

        .content {
            width: 90%;
            display: block;
            padding-bottom: 10px;
        }

        .form {
            margin-top: 1rem;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <div class="page-logo ">
                    <a href="<?= View::url('') ?>">
                        <img src="<?= View::assets('images/2.png') ?>">
                    </a>
                </div>
                <div class="form">
                    <form action="#" class="login-form" name="login-form" method="post">
                        <div class="form-group">
                            <label>Tên đăng nhập</label>
                            <input id="username" type="text" name="username" class="au-input au-input--full">
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input id="password" type="password" name="password" class="au-input au-input--full">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember">Lưu đăng nhập
                            </label>
                            <label>
                                <a href="<?= View::url('auth/forgotpassword') ?>" class="font-bold">Quên mật
                                    khẩu?</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng
                            nhập</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button class="au-btn au-btn--block au-btn--blue m-b-20">Đăng nhập bằng
                                    Facebook</button>
                            </div>
                        </div>
                    </form>
                    <div class="register-link">
                        <p>
                            Chưa có tài khoản?
                            <a href="<?= View::url('auth/register') ?>" class="font-bold">Đăng ký ngay</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= View::assets('vendor/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/animsition/animsition.min.js') ?>"></script>
    <script src="<?= View::assets('js/app.js') ?>"></script>
    <script>

    </script>
</body>

</html>