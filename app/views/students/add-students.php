<?php 
    $title_page = 'Thêm sinh viên';
    include '../includes/header.php'; 
?>
<body>
<div class="side-overlay"></div>
<?php include '../includes/sidebar.php'; ?>
<div class="dashboard-main-wrapper">
    <?php include '../includes/navbar.php'; ?>
    <div class="dashboard-body">
        <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
            <!-- Breadcrumb Start -->
            <div class="breadcrumb mb-24">
                <ul class="flex-align gap-4">
                    <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Trang chủ</a>
                    </li>
                    <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                    <li><span class="text-main-600 fw-normal text-15">Thêm sinh viên</span>
                    </li>
                </ul>
            </div>
            <!-- Breadcrumb End -->

            <div class="col-md-12 col-12 d-flex mt-2">
                <a href="/list/students" class="btn btn-outline-main col-md-6 col-6 no-hover-btn" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;  ">Danh sách</a>
                <a href="" class="btn btn-main col-md-6 col-6" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Thêm sinh viên</a>
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
                                            <label for="courseTitle" class="h5 mb-8 fw-semibold font-heading custom-cursor-default-hover">Họ và tên<span class="text-13 text-gray-400 fw-medium">(*)</span> </label>
                                            <div class="position-relative">
                                                <input type="text" class="text-counter placeholder-13 form-control py-11 pe-76"placeholder="Nhập họ và tên sinh viên">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="courseTitle" class="h5 mb-8 fw-semibold font-heading custom-cursor-default-hover">Mã sinh viên<span class="text-13 text-gray-400 fw-medium">(*)</span> </label>
                                            <div class="position-relative">
                                                <input type="text" class="text-counter placeholder-13 form-control py-11 pe-76"placeholder="Nhập mã sinh viên">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="courseLevel" class="h5 mb-8 fw-semibold font-heading">Đoàn phí</label>
                                            <div class="position-relative">
                                                <select id="courseLevel" class="form-select py-9 placeholder-13 text-15">
                                                    <option value="1" disabled="" selected="">Vui lòng chọn trạng thái</option>
                                                    <option value="2">Chưa đóng</option>
                                                    <option value="2">Đã đóng</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="btn btn-main col-12 mt-3">Thêm sinh viên</button>
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
                        <h5 class="mb-0">Nhập file danh sách</h5>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row gy-20">
                                <div class="col-xxl-12 col-md-12 col-sm-12 d-flex align-items-center mb-4">
                                    <div class="d-flex flex-grow-1 me-2">
                                        <input type="file" id="upload" class="d-none" onchange="updateFileName()">
                                        <label for="upload" class="btn btn-main text-sm btn-sm flex-grow-1 py-12 d-flex align-items-center justify-content-center gap-8 custom-cursor-on-hover" style="flex: 1;">
                                            <i class="ph ph-upload-simple d-flex text-xl"></i> Tải lên tệp
                                        </label>
                                    </div>
                                    <input type="text" id="fileName" class="form-control" style="flex: 1;" placeholder="Chưa chọn tệp" readonly>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-main col-12 mt-3">Thêm sinh viên</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updateFileName() {
            const input = document.getElementById('upload');
            const fileNameInput = document.getElementById('fileName');
            
            if (input.files.length > 0) {
                fileNameInput.value = input.files[0].name; 
            } else {
                fileNameInput.value = "Chưa chọn tệp"; 
            }
        }
    </script>
<?php include '../includes/footer.php'; ?>