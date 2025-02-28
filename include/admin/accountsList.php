<div class="side-overlay"></div>
<?php _sidebar($user); ?>
<div class="dashboard-main-wrapper">
    <?php _navbar($user); ?>
    <div class="dashboard-body">
        <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
            <div class="breadcrumb mb-24">
                <ul class="flex-align gap-4">
                    <li><a href="/dashboard" class="text-gray-200 fw-normal text-15 hover-text-main-600">Trang chủ</a></li>
                    <li><span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span></li>
                    <li><span class="text-main-600 fw-normal text-15">Quản lý tài khoản</span></li>
                </ul>
            </div>
            <div class="col-md-12 col-12 d-flex mt-2">
                <a href="#" class="btn btn-main col-md-6 col-6" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">Danh sách</a>
                <a href="/admin/accounts/add" class="btn btn-outline-main col-md-6 col-6 no-hover-btn" style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">Thêm tài khoản</a>
            </div>
        </div>

        <div class="card overflow-hidden">
            <div class="card-body p-0">
                <div id="assignmentTable_wrapper" class="dt-container dt-empty-footer">
                    <div class="dt-layout-row dt-layout-table">
                        <div class="dt-layout-cell ">
                            <div class="table-responsive">
                                <table id="assignmentTable" class="table table-striped dataTable text-center">
                                    <thead>
                                        <tr role="row">
                                            <th class="h6 text-gray-300">Tài khoản</th>
                                            <th class="h6 text-gray-300">Mật khẩu</th>
                                            <th class="h6 text-gray-300">Họ và tên</th>
                                            <th class="h6 text-gray-300">Cấp bậc</th>
                                            <th class="h6 text-gray-300">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Hiển thị danh sách tài khoản
                                        if (!empty($accounts)) {
                                            foreach ($accounts as $row) {
                                                // Xác định cấp bậc dựa trên level
                                                switch ($row['level']) {
                                                    case 1:
                                                        $level_name = 'Bí thư';
                                                        break;
                                                    case 2:
                                                        $level_name = 'Phó bí thư';
                                                        break;
                                                    case 3:
                                                        $level_name = 'Bí thư LCĐ';
                                                        break;
                                                    case 4:
                                                        $level_name = 'Đoàn trường';
                                                        break;
                                                    default:
                                                        $level_name = 'Không xác định';
                                                }
                                                echo "<tr>
                                                        <td><span class='h6 mb-0 fw-medium text-gray-300'>{$row['username']}</span></td>
                                                        <td><span class ='h6 mb-0 fw-medium text-gray-300'>********</span></td>
                                                        <td><span class='h6 mb-0 fw-medium text-gray-300'>{$row['name']}</span></td>
                                                        <td><span class='h6 mb-0 fw-medium text-gray-300'>{$level_name}</span></td>
                                                        <td>
                                                            <button class='btn btn-warning' onclick='editAccount({$row['id']})'>Sửa</button>
                                                            <button class='btn btn-danger' onclick='deleteAccount({$row['id']})'>Xóa</button>
                                                        </td>
                                                    </tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='5'>Không có tài khoản nào.</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editAccountModal" tabindex="-1" role="dialog" aria-labelledby="editAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAccountModalLabel">Chỉnh sửa tài khoản</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editAccountForm">
                    <div class="form-group">
                        <label for="username">Tài khoản</label>
                        <input id="username" class="form-control" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input id="name" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="level">Cấp bậc</label>
                        <select id="level" class="form-control">
                            <option value="1">Bí thư</option>
                            <option value="2">Phó bí thư</option>
                            <option value="3">Bí thư LCĐ</option>
                            <option value="4">Đoàn trường</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Mật khẩu mới</label>
                        <input id="new_password" type="password" class="form-control" placeholder="Mật khẩu mới">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" onclick="updateAccount()">Cập nhật</button>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let currentAccountId; 
    function editAccount(id) {
        const accounts = <?php echo json_encode(getAccounts()); ?>;
        const account = accounts.find(acc => acc.id === String(id));

        if (!account) {
            Swal.fire({
                icon: 'error',
                title: 'Tài khoản không tồn tại!',
                text: 'Vui lòng kiểm tra lại.',
            });
            return;
        }

        // Điền dữ liệu vào form
        document.getElementById('username').value = account.username;
        document.getElementById('name').value = account.name;
        document.getElementById('level').value = account.level;

        // Lưu ID tài khoản vào biến toàn cục
        currentAccountId = id;

        // Hiển thị modal
        $('#editAccountModal').modal('show');
    }

    function updateAccount() {
        const name = document.getElementById('name').value;
        const level = document.getElementById('level').value;
        const newPassword = document.getElementById('new_password').value;

        // Cập nhật tài khoản
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '', true); // Gửi yêu cầu đến chính file này
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            const response = JSON.parse(xhr.responseText);
            if (response.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Cập nhật thành công!',
                    text: 'Thông tin tài khoản đã được cập nhật.',
                });
                location.reload(); // Tải lại trang để cập nhật danh sách
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Cập nhật thất bại!',
                    text: response.message,
                });
            }
        };
        xhr.send(JSON.stringify({
            action: 'editAccount',
            id: currentAccountId, // Sử dụng biến toàn cục
            name: name,
            level: level,
            new_password: newPassword
        }));

        // Đóng modal sau khi gửi yêu cầu
        $('#editAccountModal').modal('hide');
    }
</script>