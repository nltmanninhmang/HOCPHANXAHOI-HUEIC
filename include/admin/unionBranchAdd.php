<div class="side-overlay"></div>
<?php _sidebar($user); ?>
<div class="dashboard-main-wrapper">
    <?php _navbar($user); ?>
    <div class="dashboard-body">
        <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
            <!-- Breadcrumb Start -->
            <div class="breadcrumb mb-24">
                <ul class="flex-align gap-4">
                    <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Trang chủ</a>
                    </li>
                    <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                    <li><span class="text-main-600 fw-normal text-15">Thêm chi đoàn</span>
                    </li>
                </ul>
            </div>
            <!-- Breadcrumb End -->

            <div class="col-md-12 col-12 d-flex mt-2">
                <a href="/admin/unionbranch" class="btn btn-outline-main col-md-6 col-6 no-hover-btn" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;  ">Danh sách</a>
                <a href="" class="btn btn-main col-md-6 col-6" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Thêm chi đoàn</a>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4"> 
                <div class="card">
                    <div class="card-header border-bottom border-gray-100 flex-align gap-8">
                        <h5 class="mb-0">Nhập thông tin</h5>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row gy-20">
                                <div class="col-xxl-12 col-md-12 col-sm-12">
                                    <div class="row g-20">
                                        <div class="col-sm-12">
                                            <label for="courseTitle" class="h5 mb-8 fw-semibold font-heading custom-cursor-default-hover">Tên chi đoàn<span class="text-13 text-gray-400 fw-medium">(*)</span> </label>
                                            <div class="position-relative">
                                                <input type="text" class="text-counter placeholder-13 form-control py-11 pe-76"placeholder="Nhập tên chi đoàn">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div>
                                                <label for="courseLevel" class="h5 mb-8 fw-semibold font-heading">Liên chi đoàn</label>
                                                <div class="d-flex align-items-center">
                                                    <select id="courseLevel" class="form-select py-9 placeholder-13 text-15 me-2">
                                                        <option value="1" disabled="" selected="">Vui lòng chọn</option>
                                                        <option value="2">Chưa đóng</option>
                                                        <option value="3">Đã đóng</option>
                                                    </select>
                                                    <button class="btn btn-main col-sm-4">Thêm liên chi đoàn</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-main col-12 mt-3">Tạo chi đoàn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header border-bottom border-gray-100 flex-align gap-8">
                        <h5 class="mb-0">Danh sách chi đoàn</h5>
                    </div>
                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Tên chi đoàn</th>
                                    <th>Liên chi đoàn</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>23CDTM11D</td>
                                    <td>Kinh tế & chuyển đổi số</td>
                                    <td>
                                        <button class="btn btn-main">Xem</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>