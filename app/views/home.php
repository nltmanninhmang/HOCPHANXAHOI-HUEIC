<?php 
    $title_page = 'Trang chủ';
    include './includes/header.php'; 
?>
<body>
<div class="side-overlay"></div>
<?php include './includes/sidebar.php'; ?>
<div class="dashboard-main-wrapper">
    <?php include './includes/navbar.php'; ?>
        <div class="dashboard-body">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="row gy-4">
                        <div class="col-xxl-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-2">32 Lớp</h4>
                                        <span class="text-gray-600">Tổng số lớp học</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="flex-shrink-0 w-48 h-48 d-flex justify-content-center align-items-center rounded-circle bg-main-600 text-white text-2xl">
                                            <i class="ph ph-chalkboard-teacher"></i>
                                        </span>
                                        <div id="complete-course" class="remove-tooltip-title rounded-tooltip-value"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <div>
                                        <h4 class="mb-2">3950 Sinh viên</h4>
                                        <span class="text-gray-600">Tổng số sinh viên</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="flex-shrink-0 w-48 h-48 d-flex justify-content-center align-items-center rounded-circle bg-main-two-600 text-white text-2xl">
                                            <i class="ph ph-student"></i>
                                        </span>
                                        <div id="complete-course" class="remove-tooltip-title rounded-tooltip-value"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-24">
                        <div class="card-body">
                            <div class="mb-20 flex-between flex-wrap gap-8">
                                <h4 class="mb-0">Danh sách lớp học</h4>
                            </div>
                            <div class="row g-20">
                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="../../assets/images/thumbs/class.png" alt="Course Image">
                                            </a>
                                            <div class="p-8 text-center">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Đang học</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Lớp: 24CDTH-12B</a></h5>
                                                    <span class="text-gray-600 text-13">Chủ nhiệm: 
                                                        <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Nguyễn Lê Trần Minh</a>
                                                    </span>
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <button class="btn btn-outline-main rounded-pill py-9 col-12">Xem danh sách</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="../../assets/images/thumbs/class.png" alt="Course Image">
                                            </a>
                                            <div class="p-8 text-center">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Đang học</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Lớp: 24CDTH-12B</a></h5>
                                                    <span class="text-gray-600 text-13">Chủ nhiệm: 
                                                        <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Nguyễn Lê Trần Minh</a>
                                                    </span>
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <button class="btn btn-outline-main rounded-pill py-9 col-12">Xem danh sách</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="../../assets/images/thumbs/class.png" alt="Course Image">
                                            </a>
                                            <div class="p-8 text-center">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Đang học</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Lớp: 24CDTH-12B</a></h5>
                                                    <span class="text-gray-600 text-13">Chủ nhiệm: 
                                                        <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Nguyễn Lê Trần Minh</a>
                                                    </span>
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <button class="btn btn-outline-main rounded-pill py-9 col-12">Xem danh sách</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-4 col-sm-6">
                                    <div class="card border border-gray-100">
                                        <div class="card-body p-8">
                                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                                <img src="../../assets/images/thumbs/class.png" alt="Course Image">
                                            </a>
                                            <div class="p-8 text-center">
                                                <span class="text-13 py-2 px-10 rounded-pill bg-success-50 text-success-600 mb-16">Đang học</span>
                                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Lớp: 24CDTH-12B</a></h5>
                                                    <span class="text-gray-600 text-13">Chủ nhiệm: 
                                                        <a href="profile.html" class="fw-semibold text-gray-700 hover-text-main-600 hover-text-decoration-underline">Nguyễn Lê Trần Minh</a>
                                                    </span>
                                                <div class="flex-between gap-4 flex-wrap mt-24">
                                                    <button class="btn btn-outline-main rounded-pill py-9 col-12">Xem danh sách</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include './includes/footer.php'; ?>