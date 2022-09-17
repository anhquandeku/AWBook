<?php

use App\Core\View;

?>
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <div class="menu-sidebar_header">
            <a href="">
                <img src="<?=View::assets('images/2.png')?>" alt="Cool Admin" />
            </a>
        </div>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="sidebar-item <?= View::$activeItem == 'dashboard' ? 'active' : '' ?>">
                    <a href="<?= View::getBaseUrl() ?>" class="sidebar-link">
                        <i class="fas fa-tachometer-alt"></i>Trang chủ người dùng</a>
                </li>
                <li id="CN01" class=" sidebar-item  <?= View::$activeItem == 'account' ? 'active' : '' ?>">
                    <a href="<?= View::url('account') ?>" class="sidebar-link">
                        <i class="fas fa-users"></i>
                        <span>Tài khoản</span>
                    </a>
                </li>
                <li id="CN01" class=" sidebar-item  <?= View::$activeItem == 'book' ? 'active' : '' ?>">
                    <a href="<?= View::url('book') ?>" class="sidebar-link">
                        <i class="fas fa-users"></i>
                        <span>Sách</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>