<div class="top-navbar flex-between gap-16">
    <div class="flex-align gap-16">
        <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i class="ph ph-list"></i></button>
    </div>
    <div class="flex-align gap-16">
        <div class="dropdown">
            <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="position-relative">
                <?php if ($user['level'] === 1 || $user['level'] === 2) { ?>
                            <img src="/assets/images/thumbs/students.svg" alt="" class="w-32 h-32 rounded-circle">
                        <?php } elseif ($user['level'] === 3 || $user['level'] === 4) { ?>
                            <img src="/assets/images/thumbs/teacher.svg" alt="" class="w-32 h-32 rounded-circle">
                        <?php } else { ?>
                            <img src="/assets/images/thumbs/guest.svg" alt="" class="w-32 h-32 rounded-circle">
                        <?php } ?>
                    <span class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                    <div class="card-body">
                        <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                        <?php if ($user['level'] === 1 || $user['level'] === 2) { ?>
                            <img src="/assets/images/thumbs/students.svg" alt="" class="w-54 h-54 rounded-circle">
                        <?php } elseif ($user['level'] === 3 || $user['level'] === 4) { ?>
                            <img src="/assets/images/thumbs/teacher.svg" alt="" class="w-54 h-54 rounded-circle">
                        <?php } else { ?>
                            <img src="/assets/images/thumbs/guest.svg" alt="" class="w-54 h-54 rounded-circle">
                        <?php } ?>
                            <div class="">
                                <h4 class="mb-0"><?php echo $user['name']; ?></h4>
                                <p class="fw-medium text-13 text-gray-200">
                                    <?php 
                                        if ($user['level'] === 1) {
                                            echo "Bí Thư";
                                        } elseif ($user['level'] === 2) {
                                            echo "Phó Bí Thư";
                                        } elseif ($user['level'] === 3) {
                                            echo "Bí Thư Liên Chi Đoàn";
                                        } elseif ($user['level'] === 4) {
                                            echo "Đoàn Trường";
                                        } else {
                                            echo "Không xác định!";
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                        <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                            <li class="mb-4">
                                <a href="setting.html" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-gear"></i></span>
                                    <span class="text">Tài khoản</span>
                                </a>
                            </li>
                            <li class="mb-4">
                                <a href="sign-in.html" class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                                    <span class="text-2xl text-danger-600 d-flex"><i class="ph ph-sign-out"></i></span>
                                    <span class="text">Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>