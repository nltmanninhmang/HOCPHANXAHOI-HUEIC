<aside class="sidebar">
    <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute">
        <i class="ph ph-x"></i>
    </button>
    
    <a href="/dashboard" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src="../../assets/images/logo/cdcnhueic.svg" alt="Logo - Trường Cao đẳng Công nghiệp Huế">
    </a>

    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            <ul class="sidebar-menu">
                <li class="sidebar-menu__item">
                    <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Hệ thống</span>
                </li>
                <li class="sidebar-menu__item">
                    <a href="/dashboard" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-squares-four"></i></span>
                        <span class="text">Trang chủ</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="/list/students" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-users-three"></i></span>
                        <span class="text">Danh sách sinh viên</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="students.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-money-wavy"></i></span>
                        <span class="text">Đoàn phí</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="assignment.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                        <span class="text">Đánh vắng</span>
                    </a>
                </li>
                <li class="sidebar-menu__item">
                    <a href="analytics.html" class="sidebar-menu__link">
                        <span class="icon"><i class="ph ph-chart-bar"></i></span>
                        <span class="text">Dữ liệu đánh vắng</span>
                    </a>
                </li>

                <?php if ($user['level'] === 3 || $user['level'] === 4): ?>
                    <li class="sidebar-menu__item">
                        <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Quản trị viên</span>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="/admin/unionbranch" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-chalkboard-teacher"></i></span>
                            <span class="text">Quản lý chi đoàn</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="setting.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-users-three"></i></span>
                            <span class="text">Quản lý đoàn viên</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="setting.html" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-money-wavy"></i></span>
                            <span class="text">Quản lý đoàn phí</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if ($user['level'] === 4): ?>
                    <li class="sidebar-menu__item">
                        <a href="/admin/accounts" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-user-list"></i></span>
                            <span class="text">Quản lý tài khoản</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</aside>