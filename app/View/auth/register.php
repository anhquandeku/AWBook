<?php

use App\Core\View;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Mazer Admin Dashboard</title>
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
                                        <label>Email</label>
                                        <input class="au-input au-input--full" type="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input id="password" type="password" name="password"
                                            class="au-input au-input--full">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="aggree">Agree the terms and policy
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng
                                        ký</button>
                                    <div class="social-login-content">
                                        <div class="social-button">
                                            <button class="au-btn au-btn--block au-btn--blue m-b-20">Đăng ký bằng
                                                Facebook</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Bạn đã có tài khoản?
                                        <a href="<?= View::url('auth/login') ?>" class="font-bold">Đăng nhập ngay</a>
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
    $(function() {
        $("form[name='register-form']").validate({
            rules: {
                email: {
                    required: true,
                    email: true,
                    remote: {
                        url: "http://localhost/Software-Technology/account/checkValidEmailRegister",
                        type: "POST",
                    }
                },
                fullname: 'required',
                password: {
                    required: true,
                    minlength: 8
                },
                'confirm-password': {
                    required: true,
                    minlength: 8,
                    equalTo: "#password",
                }
            },
            messages: {
                email: {
                    required: "Vui lòng nhập địa chỉ email",
                    email: "Định dạng email không hợp lệ",
                },
                fullname: "Vui lòng nhập họ tên",
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu của bạn không được ngắn hơn 8 ký tự",
                },
                'confirm-password': {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu của bạn không được ngắn hơn 8 ký tự",
                    equalTo: "Mật khẩu không khớp",
                },
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                // lấy dữ liệu từ form
                const data = Object.fromEntries(new FormData(form).entries());
                console.log(data);

                $.post(`http://localhost/Software-Technology/account/register`, data, function(
                    response) {
                    if (response.thanhcong) {
                        Toastify({
                            text: "Đăng ký thành công",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#4fbe87",
                        }).showToast();
                    } else {
                        Toastify({
                            text: "Đăng ký thất bại",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#FF6A6A",
                        }).showToast();
                    }
                });
                $('#email').val("");
                $('#password').val("");
                $('#confirm-password').val("");
                $('#fullname').val("");
            }
        });
    });
    </script>
</body>

</html>