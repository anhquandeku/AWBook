<?php

use App\Core\Session;
use App\Core\View;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= View::assets('css/font-face.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" />
    <link rel="stylesheet"
        href="<?= View::assets('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/animsition/animsition.min.css') ?>" />
    <link rel="stylesheet"
        href="<?= View::assets('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/wow/animate.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/css-hamburgers/hamburgers.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/slick/slick.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/select2/select2.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/theme.css') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/AW.png') ?>" type="image/x-icon')" />
</head>

<body class="animsition">
    <div id="auth">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="<?= View::url('') ?>">
                                    <img src="<?= View::assets('images/2.png') ?>">
                                </a>
                            </div>
                            <div class="login-form">
                                <form name="login-form" action="<?= View::getAction('AuthController', 'loginPost') ?>"
                                    method="POST">
                                    <div class="form-group">
                                        <label>Tên đăng nhập</label>
                                        <input id="username" type="text" name="username"
                                            class="au-input au-input--full">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input id="password" type="password" name="password"
                                            class="au-input au-input--full">
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
            </div>
        </div>
    </div>
    <script src="<?= View::assets('vendor/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/bootstrap-4.1/popper.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/slick/slick.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/wow/wow.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/animsition/animsition.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/counter-up/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/circle-progress/circle-progress.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
    <script src="<?= View::assets('vendor/chartjs/Chart.bundle.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/select2/select2.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/counter-up/jquery.counterup.min.js') ?>"></script>
    <script src="<?= View::assets('js/main.js') ?>"></script>
    <script>
    // Cách viết ngắn của $( document ).ready()
    // Đợi page load xong
    $(function() {
        // Select form có name = login-form (giống như select bằng js thuần)
        $("form[name='login-form']").validate({
            // Định nghĩa rule validate
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                // Báo lỗi chung cho required và email
                email: "Vui lòng nhập tên đăng nhập",
                // Message báo lỗi cụ thể cho từng trường hợp
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu của bạn không được ngắn hơn 8 ký tự"
                },
            },
            // JQuery sẽ chặn submit đến khi nào dữ liệu đã được validate
            submitHandler: function(form) {
                dangNhapAjax()
            }
        });

        function dangNhapAjax() {
            $('#login-error').text("")
            $('#login-error').addClass("d-none")
            // lay gia tri input
            const email = $("#email").val()
            const password = $("#password").val()

            // dung ajax de submit 1 2 3
            $.ajax({
                url: "http://localhost/Software-Technology/auth/loginPost",
                type: "post",
                data: {
                    email: email,
                    password: password
                },
                success: function(result) {
                    console.log(result);
                    console.log(result['summary']);
                    if (!result['thanhcong']) {
                        $('#login-error').text(result['summary'])
                        $('#login-error').removeClass("d-none")
                    } else {
                        window.location.href = 'http://localhost/Software-Technology/'
                    }

                }
            });

        }

    });
    </script>
</body>

</html>