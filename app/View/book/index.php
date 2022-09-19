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
    <link rel="stylesheet" href="<?= View::assets('vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet') ?>" />
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.css') ?>" />
    <link rel="shortcut icon" href="<?= View::assets('images/AW.png') ?>" type="image/x-icon')" />
    <link rel="stylesheet" href="<?= View::assets('vendor/bootstrap-icons/bootstrap-icons.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/app.css') ?>" />
    <link rel="stylesheet" href="<?= View::assets('css/template.css') ?>" />
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
                                                    <input id="serch-user-text" type="text" class="form-control" placeholder="Tìm kiếm" value="">
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
    <script src="<?= View::assets('vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>
    <script src="<?= View::assets('vendor/animsition/animsition.min.js') ?>"></script>
    <script src="<?= View::assets('js/main.js') ?>"></script>
    <script>
    </script>
</body>

</html>