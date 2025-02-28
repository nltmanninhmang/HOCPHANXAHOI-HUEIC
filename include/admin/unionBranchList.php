<div class="side-overlay"></div>
<?php _sidebar($user); ?>
<div class="dashboard-main-wrapper">
    <?php _navbar($user); ?>
    <div class="dashboard-body">
        <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
            <div class="breadcrumb mb-24">
                <ul class="flex-align gap-4">
                    <li><a href="/dashboard" class="text-gray-200 fw-normal text-15 hover-text-main-600">Trang chủ</a>
                    </li>
                    <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                    <li><span class="text-main-600 fw-normal text-15">Quản lý chi đoàn</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-12 d-flex mt-2">
                <a href="#" class="btn btn-main col-md-6 col-6" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">Danh sách</a>
                <a href="/admin/unionbranch/add" class="btn btn-outline-main col-md-6 col-6 no-hover-btn" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Thêm chi đoàn</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row g-20">
                <div class="col-xxl-3 col-lg-4 col-sm-6">
                    <div class="card border border-gray-100">
                        <div class="card-body p-8">
                            <a href="course-details.html" class="bg-main-100 rounded-8 overflow-hidden text-center mb-8 h-164 flex-center p-8">
                                <img src="../../assets/images/thumbs/class.png" alt="Course Image">
                            </a>
                            <div class="p-8 text-center">
                                <h5 class="mb-0"><a href="course-details.html" class="hover-text-main-600">Kinh tế & chuyển đổi số</a></h5>
                                <span class="text-gray-600 text-13"><b>Số lượng chi đoàn: 24 Chi đoàn</b></span>
                                <div class="flex-between gap-4 flex-wrap mt-24">
                                    <a href=""><button class="btn btn-outline-main rounded-pill py-9 col-12">Xem danh sách</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>