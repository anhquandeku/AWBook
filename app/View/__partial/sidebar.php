<?php

use App\Core\View;

?>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="">
            <img src="assets/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="sidebar-item <?= View::$activeItem == 'dashboard' ? 'active' : '' ?>">
                    <a href="<?= View::getBaseUrl() ?>" class="sidebar-link">
                        <i class="fas fa-tachometer-alt"></i>Trang chủ</a>
                </li>
                <li id="CN01" class=" sidebar-item  <?= View::$activeItem == 'account' ? 'active' : '' ?>">
                    <a href="<?= View::url('account/account') ?>" class="sidebar-link">
                        <i class="bi bi-person-circle"></i>
                        <span>Tài khoản</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>