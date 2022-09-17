<?php

use App\Core\View;
View::$activeItem = 'dashboard';
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

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

<body>
    <div class="page-wrapper">
        <!-- SIDEBAR -->
        <?php View::partial('sidebar')  ?>
        <!-- HEADER -->
        <div class="page-container">
            <?php View::partial('header')  ?>
            <?php View::partial('changepass')  ?>
            <div class="main-content"></div>
        </div>
        <!-- FOOTER -->
        <?php View::partial('footer')  ?>
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
</body>

</html