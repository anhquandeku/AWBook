<?php

use App\Core\View;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AWBook</title>
    <link rel="stylesheet" href="<?= View::assets('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.css') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/AW.png') ?>" type="image/x-icon')" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/template.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/login.css') ?>" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .error {
            color: red !important;
            font-size: 0.7rem;
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
                        <form action="<?= View::url('auth/doLogin') ?>" class="login-form" name="login-form" method="POST">
                            <div class="form-input">
                                <input id="username" type="text" name="username" class="input-text" required pattern="\S+">
                                <label class="label" for="username">Email/Phone</label>
                            </div>
                            <div class="form-input">
                                <input id="password" type="password" name="password" class="input-text" required pattern="\S+">
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
                                    <i class='bx bxl-google-plus-circle'></i>
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
        $('.input-text').change(function() {
            var temp = $(this).val().trim();
            $(this).val(temp);
        });
        $(function() {
            $("form[name='login-form']").submit(function(event) {
                let data = $(this).serializeArray();
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: data,
                }).done(function(response) {
                    alert(response.summary);
                })
                event.preventDefault();
            })
        });
    </script>
</body>

</html>