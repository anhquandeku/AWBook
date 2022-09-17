<?php

use App\Core\View;

View::$activeItem = 'book';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AWBook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand%3Awght%40300%3B400%3B500%3B600&display=swap&fbclid=IwAR0uZERfSOIAx9m3ZnMDsu4wHS7olWZUtivT-1GMq-1cY_X7jWt0iyBwE5g"
        rel="stylesheet" />
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
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- SIDEBAR -->
        <?php View::partial('sidebar')  ?>
        <!-- HEADER -->
        <div class="page-container">
            <?php View::partial('header')  ?>
            <?php View::partial('changepass')  ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h1 class="text-center">Quản lý sách</h1>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="search-user-form" name="search-user-form">
                                                <div class="form-group position-relative has-icon-right">
                                                    <input id="serch-user-text" type="text" class="form-control"
                                                        placeholder="Tìm kiếm" value="">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-search"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section">
                                        <div class="card">
                                            <div class="col-12 col-md-7 order-md-1 order-last">
                                                <label>
                                                    <h5 style="margin-left: 50px; margin-right: 10px;"> Lọc Theo:</h5>
                                                </label>
                                                <select class="btn btn btn-primary" name="search-cbb" id="cars-search">
                                                    <option value="">Tất Cả</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-5 order-md-2 order-first">

                                                <div class=" loat-start float-lg-end mb-3">
                                                    <button id='btn-delete-user' class="btn btn-danger">
                                                        <i class="bi bi-trash-fill icon-mid"></i> Xóa sách
                                                    </button>
                                                    <button id='btn-createaccount' class="btn btn-primary">
                                                        <i class="bi bi-person-plus-fill icon-mid"></i> Thêm sách
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th>date</th>
                                                            <th>order ID</th>
                                                            <th>name</th>
                                                            <th class="text-right">price</th>
                                                            <th class="text-right">quantity</th>
                                                            <th class="text-right">total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2018-09-29 05:57</td>
                                                            <td>100398</td>
                                                            <td>iPhone X 64Gb Grey</td>
                                                            <td class="text-right">$999.00</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">$999.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-28 01:22</td>
                                                            <td>100397</td>
                                                            <td>Samsung S8 Black</td>
                                                            <td class="text-right">$756.00</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">$756.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-27 02:12</td>
                                                            <td>100396</td>
                                                            <td>Game Console Controller</td>
                                                            <td class="text-right">$22.00</td>
                                                            <td class="text-right">2</td>
                                                            <td class="text-right">$44.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-26 23:06</td>
                                                            <td>100395</td>
                                                            <td>iPhone X 256Gb Black</td>
                                                            <td class="text-right">$1199.00</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">$1199.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-25 19:03</td>
                                                            <td>100393</td>
                                                            <td>USB 3.0 Cable</td>
                                                            <td class="text-right">$10.00</td>
                                                            <td class="text-right">3</td>
                                                            <td class="text-right">$30.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-29 05:57</td>
                                                            <td>100392</td>
                                                            <td>Smartwatch 4.0 LTE Wifi</td>
                                                            <td class="text-right">$199.00</td>
                                                            <td class="text-right">6</td>
                                                            <td class="text-right">$1494.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-24 19:10</td>
                                                            <td>100391</td>
                                                            <td>Camera C430W 4k</td>
                                                            <td class="text-right">$699.00</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">$699.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2018-09-22 00:43</td>
                                                            <td>100393</td>
                                                            <td>USB 3.0 Cable</td>
                                                            <td class="text-right">$10.00</td>
                                                            <td class="text-right">3</td>
                                                            <td class="text-right">$30.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php View::partial('footer')  ?>
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
    let currentPage = 1
    let checkedRows = [];
    let quyens
    // on ready
    $(function() {
        $.post(`http://localhost/Software-Technology/position/getPositions`, function(response) {
            if (response.thanhcong) {
                quyens = response.data;
                quyens.forEach(data => {
                    let opt = '<option value="' + data.ma_chuc_vu + '">' + data.ten_chuc_vu +
                        '</option>';
                    $("#cars-quyen").append(opt);
                });
                layDSUserAjax();
            }
        });
        //kietm tra quyen




    });

    $("#open-add-user-btn").click(function() {
        $('#email').val("");
        $('#password').val("");
        $('#maquyen').val("");
        $('#fullname').val("");
        $("#add-user-modal").modal('toggle')
    });

    $("#btn-createaccount").click(function() {

        $("#phancong-modal").modal('toggle');
        currentPage = 1;
        getListAjax();
    });

    $('#cars-pc').change(function() {
        currentPage = 1;
        getListAjax();
    });

    function getListAjax() {
        let search = $('#cars-pc option').filter(':selected').val();
        if (search == 'staff') {
            url = "http://localhost/Software-Technology/staff/getList?rowsPerPage=10&page=" + currentPage;
            $.get(`${url}`, function(response) {

                const table2 = $('#table2 > tbody');
                table2.empty();
                checkedRows = [];
                $row = 0;
                response.data.forEach(data => {
                    if (search == 'staff') {
                        ma = data.ma_nv;
                    } else {
                        ma = data.ma_kh;
                    }
                    if ($row % 2 == 0) {

                        table2.append(`
                        <tr class="table-light">
                            <td>${ma}</td>
                            <td>${data.ho_ten}</td>
                            <td>${data.email}</td>
                            <td>
                                <button onclick="addTK('${ma}','${data.email}','${data.ho_ten}')" type="button" class="btn btn-sm btn-outline-success" style="padding-top: 7px; padding-bottom: 0px;">
                                    <i class="bi bi-person-plus"></i>
                                </button>
                            </td>
                        </tr>`);
                    } else {
                        table2.append(`
                        <tr class="table-light">
                            <td>${ma}</td>
                            <td>${data.ho_ten}</td>
                            <td>${data.email}</td>
                            <td>
                                <button onclick="addTK('${ma}','${data.email}','${data.ho_ten}')" type="button" class="btn btn-sm btn-outline-success" style="padding-top: 7px; padding-bottom: 0px;">
                                    <i class="bi bi-person-plus"></i>
                                </button>
                            </td>
                        </tr>`);
                    }
                    $row += 1;
                });

                const pagination = $('#pagination2');
                // Xóa phân trang cũ
                pagination.empty();
                if (response.totalPage > 1) {
                    for (let i = 1; i <= response.totalPage; i++) {
                        if (i == currentPage) {
                            pagination.append(`
                        <li class="page-item active">
                            <button class="page-link" onClick='changePageGVM(${i})'>${i}</button>
                        </li>`)
                        } else {
                            pagination.append(`
                        <li class="page-item">
                            <button class="page-link" onClick='changePageGVM(${i})'>${i}</button>
                        </li>`)
                        }

                    }
                }


            });
        } else {
            url = "http://localhost/Software-Technology/customer/getList?rowsPerPage=10&page=" + currentPage;
            $.get(`${url}`, function(response) {

                const table2 = $('#table2 > tbody');
                table2.empty();
                checkedRows = [];
                $row = 0;
                response.data.forEach(data => {
                    if (search == 'staff') {
                        ma = data.ma_nv;
                    } else {
                        ma = data.ma_kh;
                    }
                    if ($row % 2 == 0) {

                        table2.append(`
                            <tr class="table-light">
                                <td>${ma}</td>
                                <td>${data.ho_ten}</td>
                                <td>${data.email}</td>
                                <td>
                                    <button onclick="addTKKH('${ma}','${data.email}','${data.ho_ten}')" type="button" class="btn btn-sm btn-outline-success" style="padding-top: 7px; padding-bottom: 0px;">
                                        <i class="bi bi-person-plus"></i>
                                    </button>
                                </td>
                            </tr>`);
                    } else {
                        table2.append(`
                                <tr class="table-light">
                                    <td>${ma}</td>
                                    <td>${data.ho_ten}</td>
                                    <td>${data.email}</td>
                                    <td>
                                        <button onclick="addTKKH('${ma}','${data.email}','${data.ho_ten}')" type="button" class="btn btn-sm btn-outline-success" style="padding-top: 7px; padding-bottom: 0px;">
                                            <i class="bi bi-person-plus"></i>
                                        </button>
                                    </td>
                                </tr>`);
                    }
                    $row += 1;
                });

                const pagination = $('#pagination2');
                // Xóa phân trang cũ
                pagination.empty();
                if (response.totalPage > 1) {
                    for (let i = 1; i <= response.totalPage; i++) {
                        if (i == currentPage) {
                            pagination.append(`
                                <li class="page-item active">
                                    <button class="page-link" onClick='changePageGVM(${i})'>${i}</button>
                                </li>`)
                        } else {
                            pagination.append(`
                                <li class="page-item">
                                    <button class="page-link" onClick='changePageGVM(${i})'>${i}</button>
                                </li>`)
                        }

                    }
                }


            });
        }

    }

    function addTK(ma, mail, hoten) {
        $("#phancong-modal").modal('toggle');
        $("#add-user-modal").modal('toggle');
        // Đặt sự kiện validate cho modal add user
        $("form[name='add-user-form']").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 8,
                },
            },
            messages: {
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu của bạn không được ngắn hơn 8 ký tự",
                },
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                // lấy dữ liệu từ form
                const data = Object.fromEntries(new FormData(form).entries());
                data['email'] = mail;
                data['fullname'] = hoten;
                data['ma'] = ma;

                $.post(`http://localhost/Software-Technology/account/create`, data, function(response) {
                    if (response.thanhcong) {
                        currentPage = 1;
                        layDSUserAjax();
                        Toastify({
                            text: "Thêm Thành Công",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#4fbe87",
                        }).showToast();
                    } else {
                        Toastify({
                            text: "Thêm Thất Bại",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#FF6A6A",
                        }).showToast();
                    }

                    // Đóng modal
                    $("#add-user-modal").modal('toggle')
                });
                $('#email').val("");
                $('#password').val("");
                $('#maquyen').val("");
                $('#fullname').val("");
            }
        })
    }

    function addTKKH(ma, mail, hoten) {
        $("#phancong-modal").modal('toggle');
        $("#add-user-modal").modal('toggle');
        // Đặt sự kiện validate cho modal add user
        $("form[name='add-user-form']").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 8,
                },
            },
            messages: {
                password: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Mật khẩu của bạn không được ngắn hơn 8 ký tự",
                },
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                // lấy dữ liệu từ form
                const data = Object.fromEntries(new FormData(form).entries());
                data['email'] = email;
                data['fullname'] = hoten;
                data['ma'] = ma;

                $.post(`http://localhost/Software-Technology/account/create2`, data, function(response) {
                    if (response.thanhcong) {
                        currentPage = 1;
                        layDSUserAjax();
                        Toastify({
                            text: "Thêm Thành Công",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#4fbe87",
                        }).showToast();
                    } else {
                        Toastify({
                            text: "Thêm Thất Bại",
                            duration: 1000,
                            close: true,
                            gravity: "top",
                            position: "center",
                            backgroundColor: "#FF6A6A",
                        }).showToast();
                    }

                    // Đóng modal
                    $("#add-user-modal").modal('toggle')
                });
                $('#email').val("");
                $('#password').val("");
                $('#maquyen').val("");
                $('#fullname').val("");
            }
        })
    }

    function changePage(newPage) {
        currentPage = newPage;
        layDSUserAjax();
    }


    function changePageSearch(newPage, search) {
        currentPage = newPage;
        layDSUserSearch(search);
    }

    $('#cars-search').change(function() {
        currentPage = 1;
        layDSUserSearch($('#serch-user-text').val());
    });

    $("#search-user-form").keyup(debounce(function() {
        currentPage = 1;
        layDSUserSearch($('#serch-user-text').val());
    }, 200));

    function layDSUserAjax() {
        $.get(`http://localhost/Software-Technology/account/getAccount?rowsPerPage=10&page=${currentPage}`, function(
            response) {
            // Không được gán biến response này ra ngoài function,
            // vì function này bất đồng bộ, khi nào gọi api xong thì response mới có dữ liệu
            // gán ra ngoài thì code ở ngoài chạy trc khi gọi api xong.
            //data là danh sách usser
            //page là trang hiện tại
            // rowsPerpage là số dòng trên 1 trang
            // totalPage là tổng số trang
            const table1 = $('#table1 > tbody');
            table1.empty();
            checkedRows = [];
            $row = 0;
            response.data.forEach(data => {
                let disabled = "disabled btn icon icon-left btn-secondary";
                let tenQuyen = "";
                quyens.forEach(quyen => {
                    if (quyen.ma_chuc_vu == data.ma_cv) {
                        tenQuyen = quyen.ten_chuc_vu;
                        return true;
                    }
                });
                if ($row % 2 == 0) {
                    let bibi = "bi bi-lock";
                    if (data.trang_thai == 0) {
                        bibi = "bi bi-unlock";
                    }

                    table1.append(`
                        <tr class="table-light">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input form-check-success form-check-glow" id="${data.ma_tk}">
                                </div>
                            </td>
                            <td>${data.username}</td>
                            <td>${tenQuyen}</td>
                            <td>
                                <button onclick="viewRow('${data.username}')" type="button" class="btn btn-sm btn-outline-primary" style="padding-top: 3px; padding-bottom: 4px;">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button onclick="deleteRow('${data.username}')" type="button" class="btn btn-sm btn-outline-danger" style="padding-top: 7px; padding-bottom: 0px;">
                                    <i class="${bibi}"></i>
                                </button>
                            </td>
                        </tr>`);
                } else {
                    let bibi = "bi bi-lock";
                    if (data.trang_thai == 0) {
                        bibi = "bi bi-unlock";
                    }
                    table1.append(`
                        <tr class="table-light">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input form-check-success form-check-glow" id="${data.ma_tk}">
                                </div>
                            </td>
                            <td>${data.username}</td>
                            <td>${tenQuyen}</td>
                            <td>
                                <button onclick="viewRow('${data.username}')" type="button" class="btn btn-sm btn-outline-primary" style="padding-top: 3px; padding-bottom: 4px;">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button onclick="deleteRow('${data.username}')" type="button" class="btn btn-sm btn-outline-danger" style="padding-top: 7px; padding-bottom: 0px;">
                                    <i class="${bibi}"></i>
                                </button>
                            </td>
                        </tr>`);
                }
                checkedRows.push(data.username);
                $row += 1;
            });

            const pagination = $('#pagination');
            // Xóa phân trang cũ
            pagination.empty();
            if (response.totalPage > 1) {
                for (let i = 1; i <= response.totalPage; i++) {
                    if (i == currentPage) {
                        pagination.append(`
                        <li class="page-item active">
                            <button class="page-link" onClick='changePage(${i})'>${i}</button>
                        </li>`)
                    } else {
                        pagination.append(`
                        <li class="page-item">
                            <button class="page-link" onClick='changePage(${i})'>${i}</button>
                        </li>`)
                    }

                }
            }

        });
    }

    function layDSUserSearch(search) {
        $.get(`http://localhost/Software-Technology/account/advancedSearch?rowsPerPage=10&page=${currentPage}&search=${search}`,
            function(response) {
                // Không được gán biến response này ra ngoài function,
                // vì function này bất đồng bộ, khi nào gọi api xong thì response mới có dữ liệu
                // gán ra ngoài thì code ở ngoài chạy trc khi gọi api xong.
                //data là danh sách usser
                //page là trang hiện tại
                // rowsPerpage là số dòng trên 1 trang
                // totalPage là tổng số trang
                const table1 = $('#table1 > tbody');
                table1.empty();
                checkedRows = [];
                $row = 0;
                response.data.forEach(data => {
                    let disabled = "disabled btn icon icon-left btn-secondary";
                    let tenQuyen = "";
                    quyens.forEach(quyen => {
                        if (quyen.ma_chuc_vu == data.ma_cv) {
                            tenQuyen = quyen.ten_chuc_vu;
                            return true;
                        }
                    });
                    if ($row % 2 == 0) {
                        let bibi = "bi bi-lock";
                        if (data.trang_thai == 0) {
                            bibi = "bi bi-unlock";
                        }

                        table1.append(`
                        <tr class="table-light">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input form-check-success form-check-glow" id="${data.ma_tk}">
                                </div>
                            </td>
                            <td>${data.username}</td>
                            <td>${tenQuyen}</td>
                            <td>
                                <button onclick="viewRow('${data.username}')" type="button" class="btn btn-sm btn-outline-primary" style="padding-top: 3px; padding-bottom: 4px;">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button onclick="deleteRow('${data.username}')" type="button" class="btn btn-sm btn-outline-danger" style="padding-top: 7px; padding-bottom: 0px;">
                                    <i class="${bibi}"></i>
                                </button>
                            </td>
                        </tr>`);
                    } else {
                        let bibi = "bi bi-lock";
                        if (data.trang_thai == 0) {
                            bibi = "bi bi-unlock";
                        }
                        table1.append(`
                        <tr class="table-light">
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input form-check-success form-check-glow" id="${data.ma_tk}">
                                </div>
                            </td>
                            <td>${data.username}</td>
                            <td>${tenQuyen}</td>
                            <td>
                                <button onclick="viewRow('${data.username}')" type="button" class="btn btn-sm btn-outline-primary" style="padding-top: 3px; padding-bottom: 4px;">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button onclick="deleteRow('${data.username}')" type="button" class="btn btn-sm btn-outline-danger" style="padding-top: 7px; padding-bottom: 0px;">
                                    <i class="${bibi}"></i>
                                </button>
                            </td>
                        </tr>`);
                    }
                    checkedRows.push(data.username);
                    $row += 1;
                });

                const pagination = $('#pagination');
                // Xóa phân trang cũ
                pagination.empty();
                if (response.totalPage > 1) {
                    for (let i = 1; i <= response.totalPage; i++) {
                        if (i == currentPage) {
                            pagination.append(`
                        <li class="page-item active">
                            <button class="page-link" onClick='changePageSearch(${i},${search})'>${i}</button>
                        </li>`)
                        } else {
                            pagination.append(`
                        <li class="page-item">
                            <button class="page-link" onClick='changePageSearch(${i},${search})'>${i}</button>
                        </li>`)
                        }

                    }
                }

            });
    }

    function viewRow(params) {
        let data = {
            email: params
        };
        $.post(`http://localhost/Software-Technology/account/viewUser`, data, function(response) {
            if (response.thanhcong) {
                $("#view-hoten").val(response.ma_tk);
                $("#view-ms").val(response.username);
                let tenQuyen = "";
                quyens.forEach(quyen => {
                    if (quyen.ma_chuc_vu == response.ma_cv) {
                        tenQuyen = quyen.ten_chuc_vu;
                        return true;
                    }
                });
                $("#view-quyen").val(tenQuyen);
            }
        });
        $("#view-user-modal").modal('toggle');
    }

    function resetPass(params) {
        let data = {
            email: params
        };
        $.post(`http://localhost/Software-Technology/user/resetPassword`, data, function(response) {
            if (response.thanhcong) {

                Toastify({
                    text: "Khôi Phục Thành Công",
                    duration: 1000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#4fbe87",
                }).showToast();
                $("#reset" + params).removeClass("btn-primary");
                $("#reset" + params).addClass("disabled icon icon-left btn-secondary");
            } else {
                Toastify({
                    text: "Khôi Phục Thất Bại",
                    duration: 1000,
                    close: true,
                    gravity: "top",
                    position: "center",
                    backgroundColor: "#FF6A6A",
                }).showToast();
            }
        });
    }

    function repairRow(params) {
        let data = {
            email: params
        };

        $.post(`http://localhost/Software-Technology/user/viewUser`, data, function(response) {
            if (response.thanhcong) {
                $('#re-email').val(response.TenDangNhap);
                $('#cars-quyen-sua').val(response.MaQuyen).prop('selected', true);
                $('#re-fullname').val(response.FullName);
            }
        });
        $("#repair-user-modal").modal('toggle');
        //Sua form
        $("form[name='repair-user-form']").validate({
            rules: {
                fullname: {
                    required: true,
                    validateName: true,
                }
            },
            messages: {
                fullname: {
                    required: "Vui lòng nhập họ tên",
                }
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                $("#myModalLabel110").text("Quản Lý Tài Khoản");
                $("#question-model").text("Bạn có chắc chắn muốn sửa tài khoản này không");
                $("#question-user-modal").modal('toggle');
                $('#thuchien').off('click')
                $("#thuchien").click(function() {
                    // lấy dữ liệu từ form

                    const data = Object.fromEntries(new FormData(form).entries());
                    data['email'] = $('#re-email').val();
                    $.post(`http://localhost/Software-Technology/user/repairUser`, data, function(
                        response) {
                        if (response.thanhcong) {
                            currentPage = 1;
                            layDSUserAjax();
                            Toastify({
                                text: "Sửa Thành Công",
                                duration: 1000,
                                close: true,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "#4fbe87",
                            }).showToast();
                        } else {
                            Toastify({
                                text: "Sửa Thất Bại",
                                duration: 1000,
                                close: true,
                                gravity: "top",
                                position: "center",
                                backgroundColor: "#FF6A6A",
                            }).showToast();
                        }

                        // Đóng modal
                        $("#repair-user-modal").modal('toggle')
                    });
                });
            }
        })
    }

    function deleteRow(params) {
        let data = {
            email: params
        };
        $("#myModalLabel110").text("Quản Lý Tài Khoản");
        $("#question-model").text("Bạn có chắc chắn muốn khóa tài khoản này không");
        $("#question-user-modal").modal('toggle');
        $('#thuchien').off('click');
        $("#thuchien").click(function() {
            $.post(`http://localhost/Software-Technology/account/delete`, data, function(response) {
                if (response.thanhcong) {
                    Toastify({
                        text: "Khóa Thành Công",
                        duration: 1000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#4fbe87",
                    }).showToast();
                    currentPage = 1;
                    layDSUserAjax();
                } else {
                    Toastify({
                        text: "Khóa Thất Bại",
                        duration: 1000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#FF6A6A",
                    }).showToast();
                }
            });
        });

    }
    $("#btn-delete-user").click(function() {
        $("#myModalLabel110").text("Quản Lý Tài Khoản");
        $("#question-model").text("Bạn có chắc chắn muốn khóa những tài khoản này không");
        $("#question-user-modal").modal('toggle');
        $('#thuchien').off('click')
        $("#thuchien").click(function() {
            let datas = []
            checkedRows.forEach(checkedRow => {
                if ($('#' + checkedRow).prop("checked")) {
                    datas.push(checkedRow);
                }
            });
            let data = {
                emails: JSON.stringify(datas)
            };
            $.post(`http://localhost/Software-Technology/account/deletes`, data, function(response) {
                if (response.thanhcong) {
                    Toastify({
                        text: "Khóa Thành Công",
                        duration: 1000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#4fbe87",
                    }).showToast();
                    currentPage = 1;
                    layDSUserAjax();
                } else {
                    Toastify({
                        text: "Khóa Thất Bại",
                        duration: 1000,
                        close: true,
                        gravity: "top",
                        position: "center",
                        backgroundColor: "#FF6A6A",
                    }).showToast();
                }
            });
        });
    });
    </script>
</body>

</html>