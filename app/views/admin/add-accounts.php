<?php 
    $title_page = 'Tạo tài khoản';
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
                    <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Quản trị viên</a>
                    </li>
                    <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                    <li><span class="text-main-600 fw-normal text-15">Tạo tài khoản</span>
                    </li>
                </ul>
            </div>
            <!-- Breadcrumb End -->

            <div class="col-md-12 col-12 d-flex mt-2">
                <a href="/admin/accounts" class="btn btn-outline-main col-md-6 col-6 no-hover-btn" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;  ">Danh sách</a>
                <a href="" class="btn btn-main col-md-6 col-6" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Tạo tài khoản</a>
            </div>

        </div>
        <div class="col-md-12 mb-4"> 
            <div class="row">
                <!-- Form Học sinh -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-bottom border-gray-100">
                            <h5 class="mb-0">Tạo tài khoản Học sinh</h5>
                        </div>
                        <div class="card-body">
                            <form id="studentForm" method="POST">
                                <input type="hidden" name="account_type" value="student">
                                <div class="row g-20">
                                    <div class="col-sm-12">
                                        <label class="h5 mb-8 fw-semibold">Họ và tên<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="text" name="name" class="form-control py-11" placeholder="Nhập họ và tên sinh viên">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h5 mb-8 fw-semibold">Tài khoản<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="text" name="username" class="form-control py-11" placeholder="Nhập tài khoản">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h5 mb-8 fw-semibold">Mật khẩu<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="password" name="password" class="form-control py-11" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h5 mb-8 fw-semibold">Tên chi đoàn<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="text" name="class" class="form-control py-11" placeholder="Nhập tên chi đoàn (VD: 24CDTM11)">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h5 mb-8 fw-semibold">Cấp bậc</label>
                                        <select name="level" class="form-select py-9">
                                            <option value="" disabled selected>Chọn cấp bậc</option>
                                            <option value="1">Bí thư</option>
                                            <option value="2">Phó bí thư</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-main col-12 mt-3">Thêm sinh viên</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Form Giáo viên -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-bottom border-gray-100">
                            <h5 class="mb-0">Tạo tài khoản Giáo viên</h5>
                        </div>
                        <div class="card-body">
                            <form id="teacherForm" method="POST">
                                <input type="hidden" name="account_type" value="teacher">
                                <div class="row g-20">
                                    <div class="col-sm-12">
                                        <label class="h5 mb-8 fw-semibold">Họ và tên<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="text" name="name" class="form-control py-11" placeholder="Nhập họ và tên giáo viên">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h5 mb-8 fw-semibold">Tài khoản<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="text" name="username" class="form-control py-11" placeholder="Nhập tài khoản">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="h5 mb-8 fw-semibold">Mật khẩu<span class="text-13 text-gray-400 fw-medium">(*)</span></label>
                                        <input type="password" name="password" class="form-control py-11" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="h5 mb-8 fw-semibold">Cấp bậc</label>
                                        <select name="level" class="form-select py-9">
                                            <option value="" disabled selected>Chọn cấp bậc</option>
                                            <option value="3">Bí thư</option>
                                            <option value="4">Đoàn trường</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-main col-12 mt-3">Thêm giáo viên</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function handleFormSubmit(form) {
                form.addEventListener("submit", function (event) {
                    event.preventDefault();
                    let formData = new FormData(form);

                    // Kiểm tra level phải được chọn
                    if (!formData.get("level")) {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi!",
                            text: "Vui lòng chọn cấp bậc!",
                            confirmButtonText: "OK",
                        });
                        return;
                    }

                    fetch("/api/accounts", {
                        method: "POST",
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        Swal.fire({
                            icon: data.status === "success" ? "success" : "error",
                            title: data.status === "success" ? "Thành công!" : "Lỗi!",
                            text: data.message,
                            confirmButtonText: "OK",
                        }).then(() => {
                            if (data.status === "success") window.location.reload();
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: "error",
                            title: "Lỗi!",
                            text: "Có lỗi xảy ra. Vui lòng thử lại!",
                            confirmButtonText: "OK",
                        });
                        console.error("Error:", error);
                    });
                });
            }

            handleFormSubmit(document.getElementById("studentForm"));
            handleFormSubmit(document.getElementById("teacherForm"));
        });
    </script>


<?php include '../includes/footer.php'; ?>