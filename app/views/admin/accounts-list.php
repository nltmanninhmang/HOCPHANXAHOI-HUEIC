<?php 
    $title_page = 'Danh sách tài khoản';
    include '../includes/header.php'; 
?>
<body>
<div class="side-overlay"></div>
<?php include '../includes/sidebar.php'; ?>
<div class="dashboard-main-wrapper">
    <?php include '../includes/navbar.php'; ?>
    <div class="dashboard-body">
        <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
            <div class="breadcrumb mb-24">
                <ul class="flex-align gap-4">
                    <li><a href="/dashboard" class="text-gray-200 fw-normal text-15 hover-text-main-600">Quản trị viên</a>
                    </li>
                    <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                    <li><span class="text-main-600 fw-normal text-15">Danh sách tài khoản</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 col-12 d-flex mt-2">
                <a href="#" class="btn btn-main col-md-6 col-6" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">Danh sách</a>
                <a href="/admin/accounts/add" class="btn btn-outline-main col-md-6 col-6 no-hover-btn" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Tạo tài khoản</a>
            </div>
        </div>
        <div class="card overflow-hidden">
            <div class="card-body p-0">
                <div id="assignmentTable_wrapper" class="dt-container dt-empty-footer">
                    <div class="dt-layout-row">
                        <div class="dt-layout-cell dt-start "></div>
                        <div class="dt-layout-cell dt-end "></div>
                    </div>
                    <div class="dt-layout-row dt-layout-table">
                        <div class="dt-layout-cell ">
                            <div class="table-responsive">
                                <table id="assignmentTable" class="table table-striped dataTable text-center">
                                    <thead>
                                        <tr role="row">
                                            <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Students: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Tài khoản</span>
                                            </th>
                                            <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Lesson: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Mật khẩu</span>
                                            </th>
                                            <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1" aria-label="Deadline: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Họ và tên</span>
                                            </th>
                                            <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt-column="4" rowspan="1" colspan="1" aria-label="Sent: Activate to sort" tabindex="0">
                                                <span class="dt-column-title" role="button">Cấp bậc</span>
                                            </th>
                                            <th class="h6 text-gray-300 dt-orderable-none" data-dt-column="5" rowspan="1" colspan="1" aria-label="Actions">
                                                <span class="dt-column-title">Hành động</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="h6 mb-0 fw-medium text-gray-300">admin</span>
                                            </td>
                                            <td>
                                                <span class="h6 mb-0 fw-medium text-gray-300">*********</span>
                                            </td>
                                            <td>
                                                <span class="h6 mb-0 fw-medium text-gray-300">Nguyễn Văn B</span>
                                            </td>
                                            <td>
                                                <span class="h6 mb-0 fw-medium text-gray-300">Đoàn Trường</span>
                                            </td>
                                            <td>
                                                <button class="bg-main-50 text-main-600 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white">Xoá</button>
                                                <button class="bg-info-50 text-info-600 py-2 px-14 rounded-pill hover-bg-info-600 hover-text-white">Chỉnh Sửa</button>
                                                <button class="bg-success-50 text-success-600 py-2 px-14 rounded-pill hover-bg-success-600 hover-text-white">Cấp lại mật khẩu</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot></tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="dt-layout-row">
                        <div class="dt-layout-cell dt-start "></div>
                        <div class="dt-layout-cell dt-end "></div>
                    </div>
                </div>
            </div>
        </div>


        </div>
<?php include '../includes/footer.php'; ?>