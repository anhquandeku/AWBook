<?php

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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .wrapper {
            display: flex;
            width: 100%;
            background-color: #FFFFFF;
            height: 100vh;
        }

        .bg-img {
            width: 40%;
            background-image: url('https://images.pexels.com/photos/1637455/pexels-photo-1637455.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-size: cover;
            background-position: -15rem;
        }

        .bg-content {
            width: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #FFFFFF;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 70%;
            /*background-color: white;
            border-radius: 5px;
            box-shadow: rgb(100 100 111 / 30%) 0px 7px 29px 0px;*/
        }

        .content {
            width: 90%;
            display: block;
            padding-bottom: 10px;
        }

        .form {
            margin-top: 1rem;
        }

        .form-input {
            margin-top: 0.7rem;
            position: relative;
        }

        .form-input input,
        .form-input .label {
            transition: all .5s;
        }

        .form-input input {
            height: 3rem;
            width: 100%;
            padding: 0.8rem 1rem 0.5rem 1rem;
            appearance: none;
            border-radius: 0.5rem;
            background-color: white;
            border: 1px solid;
            border-color: rgba(0, 0, 0, 0.1);
        }

        .form-input .label {
            position: absolute;
            top: 1em;
            left: 1rem;
            color: rgba(0, 0, 0, 0.6);
            line-height: 1rem;
            font-size: 1rem;


        }

        .form-input .label:hover {
            cursor: text;
        }

        .form-input input:focus {
            border-color: #FFCC66;
            border-width: 1.5px;
        }

        .form-input input:focus+label {
            top: -0.4rem;
            font-size: 0.75rem;
            z-index: 1;
            font-weight: bolder;
            background-color: white;
            color: #FFCC66;
        }

        .form-input input:valid+label {
            top: -0.4rem;
            font-size: 0.75rem;
            z-index: 1;
            font-weight: bolder;
            background-color: white;
        }

        .form-checkbox {
            margin-top: 0.75rem;
            margin-bottom: 0.75rem;
            display: flex;
            gap: 0 12.5rem;
        }

        .form-checkbox label>input {
            padding-left: 10px;
        }

        .form-checkbox label>a {
            color: red;
        }

        .btn-gradient {
            background: linear-gradient(to right, #8DC26F, #76b852);
            color: white;
            font-weight: bolder;
            width: 80%;
            height: 3rem;
            border-radius: 5rem;
            margin-bottom: 1rem;
            transition: 2s;

        }

        .btn-gradient:hover {
            background: linear-gradient(to right, #fdc830, #f37335);
        }

        .item-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .border-top {
            border-top: 1px solid;
            border-color: rgba(0, 0, 0, 0.1);
            padding-top: 1rem;
        }
        .login-social{
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .login-social i{
            font-size: 2rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="bg-img">

        </div>
        <div class="bg-content">
            <div class="container">
                <div class="content">
                    <div class="page-logo ">
                        <a href="<?= View::url('') ?>">
                            <img src="<?= View::assets('images/2.png') ?>">
                        </a>
                    </div>
                    <div class="form">
                        <form action="#" class="login-form" name="login-form" method="post">
                            <div class="form-input">
                                <input id="username" type="text" name="username" class="input-text" required pattern="\S+">
                                <label class="label" for="username">Tên đăng nhập</label>
                            </div>
                            <div class="form-input">
                                <input id="password" type="password" name="password" class="input-text" required>
                                <label class="label" for="password">Mật khẩu</label>
                            </div>
                            <div class="form-checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> <span>Lưu đăng nhập</span>
                                </label>
                                <label>
                                    <a href="<?= View::url('auth/forgotpassword') ?>" class="font-bold">Quên mật khẩu?</a>
                                </label>
                            </div>
                            <div class="item-center border-top">
                                <button class="btn-gradient" type="submit">ĐĂNG NHẬP</button>
                            </div>
                            <div class="item-center border-top">
                                <div class="login-social">
                                    <i class='bx bxl-facebook-circle'></i>
                                </div>
                                <div class="login-social">
                                    <i class='bx bxl-gmail'></i>
                                </div>
                            </div>
                        </form>
                        <div class="register-link ">
                            <p>
                                Chưa có tài khoản?
                                <a href="<?= View::url('auth/register') ?>" class="font-bold">Đăng ký ngay</a>
                            </p>
                        </div>
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