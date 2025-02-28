<?php 
    function _header($title) {
        include 'header.php';
    }
    function _sidebar($user) {
        include 'sidebar.php';
    }
    function _navbar($user) {
        include 'navbar.php';
    }
    //Trang chủ sinh viên
    function _homeUser($user) {
        include 'client/homeUser.php';
    }
    //Trang chủ giảng viên
    function _homeAdmin($user) {
        include 'admin/homeAdmin.php';
    }
    function _authLogin() {
        include 'client/authLogin.php';
    }

    function _studentList($user) {
        include 'admin/studentsList.php';
    }
  
    function _studentAdd($user) {
        include 'admin/studentsAdd.php';
    }

    function _unionBranchAdd($user) {
        include 'admin/unionBranchAdd.php';
    }
    function _unionBranchList($user) {
        include 'admin/unionBranchList.php';
    }

    function _students_absent() {
        $conn = Database::getConnection();
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . Database::getConnection()->connect_error);
        }
        if ($conn->ping() === false) {
            $conn->close();
            $conn = Database::getConnection();
        }
        echo $s = '
        <div class="side-overlay"></div>
        <div class="dashboard-main-wrapper">
            <div class="dashboard-body">
            <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
                <!-- Breadcrumb Start -->
                <div class="breadcrumb mb-24">
                    <ul class="flex-align gap-4">
                        <li><a href="/dashboard" class="text-gray-200 fw-normal text-15 hover-text-main-600">Trang chủ</a>
                        </li>
                        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                        <li><span class="text-main-600 fw-normal text-15">Đánh vắng sinh viên</span>
                        </li>
                    </ul>
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
                                                    <span class="dt-column-title" role="button">Mã SV</span>
                                                </th>
                                                <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1" aria-label="Lesson: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Họ và tên</span>
                                                </th>
                                                <th class="h6 text-gray-300 dt-orderable-none" data-dt-column="5" rowspan="1" colspan="1" aria-label="Actions">
                                                    <span class="dt-column-title">Hành động</span>
                                                </th>
                                            </tr>
                                        </thead>';
                                        $q = Database::query("SELECT * FROM `students_add` ORDER BY student_id DESC");
                                        while($r = $q->fetch_array()) {
                                        $s .= '<tbody>
                                            <tr>
                                                <td>
                                                    <span class="h6 mb-0 fw-medium text-gray-300">'.$r['student_id'].'</span>
                                                </td>
                                                <td>
                                                    <span class="h6 mb-0 fw-medium text-gray-300">'.$r['name'].'</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="bg-main-50 text-main-600 py-2 px-14 rounded-pill hover-bg-main-600 hover-text-white">'.$r['courseLevel'].'</a>
                                                </td>
                                            </tr>
                                        </tbody>';
                                        }
                                        $s.='<tfoot></tfoot>
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
        ';
        echo $s;
    }

    function _student_fee() {
        $s = '
        <div class="side-overlay"></div>
        <div class="dashboard-main-wrapper">
            <div class="dashboard-body">
            <div class="breadcrumb-with-buttons mb-20 flex-between flex-wrap gap-8">
                <!-- Breadcrumb Start -->
                <div class="breadcrumb mb-24">
                    <ul class="flex-align gap-4">
                        <li><a href="/dashboard" class="text-gray-200 fw-normal text-15 hover-text-main-600">Trang chủ</a>
                        </li>
                        <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                        <li><span class="text-main-600 fw-normal text-15">Đoàn phí sinh viên</span>
                        </li>
                    </ul>
                </div>
                <!-- Breadcrumb End -->

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
                                    <form method="post" action="#">
                                    <table id="assignmentTable" class="table table-striped dataTable text-center">
                                        <thead>
                                            <tr role="row">
                                                <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1" aria-label="Students: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Mã SV</span>
                                                </th>
                                                <th class="h6 text-gray-300 dt-orderable-asc dt-orderable-desc" data-dt_column="2" rowspan="1" colspan="1" aria-label="Lesson: Activate to sort" tabindex="0">
                                                    <span class="dt-column-title" role="button">Họ và tên</span>
                                                </th>
                                                <th class="h6 text-gray-300 dt-orderable-none" data-dt_column="5" rowspan="1" colspan="1" aria-label="Actions">
                                                    <span class="dt-column-title">Hành động</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="h6 mb-0 fw-medium text-gray-300">0350400</span>
                                                </td>
                                                <td>
                                                    <span class="h6 mb-0 fw-medium text-gray-300">Nguyễn Văn A</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="bg-succcess-50 text-succcess-600 py-2 px-14 rounded-pill hover-bg-succcess-600 hover-text-white">Đã nộp</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot></tfoot>
                                    </table>
                                    </form>
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
        ';
        echo $s;
    }
    //Tạo tài khoản
    function createAccount($account_type, $username, $password, $name, $level, $class) {
        $conn = Database::getConnection();
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
        $stmt = $conn->prepare("SELECT * FROM accounts WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return ['status' => 'error', 'message' => 'Tài khoản đã tồn tại!'];
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO accounts (username, password, name, level, account_type, class, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param("ssssis", $username, $hashed_password, $name, $level, $account_type, $class);

            if ($stmt->execute()) {
                return ['status' => 'success', 'message' => 'Tạo tài khoản thành công!'];
            } else {
                return ['status' => 'error', 'message' => 'Có lỗi xảy ra khi tạo tài khoản.'];
            }
        }
        $stmt->close();
    }  
    //Trang thêm tài khoản
    function _accountsAdd($user) {
        include 'admin/accountsAdd.php';
    }
    //Lấy danh sách tài khoản
    function getAccounts() {
        $conn = Database::getConnection();
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
        $query = "SELECT id, username, password, name, level, class, account_type, created_at FROM accounts";
        $result = $conn->query($query);
        $accounts = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $accounts[] = $row;
            }
        }
        return $accounts;
    }
    //Trang danh sách tài khoản
    function _accountsList($user) {
        $accounts = getAccounts();
        include 'admin/accountsList.php';
    }
    //Chỉnh sửa tài khoản
    function editAccount($id, $data) {
        $conn = Database::getConnection();
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        $fields = [];
        $params = [];

        if (!empty($data['name'])) {
            $fields[] = "name = ?";
            $params[] = $data['name'];
        }
        if (!empty($data['level'])) {
            $fields[] = "level = ?";
            $params[] = $data['level'];
        }
        if (!empty($data['new_password'])) {
            $fields[] = "password = ?";
            $params[] = password_hash($data['new_password'], PASSWORD_DEFAULT); 
        }

        if (empty($fields)) {
            return false; 
        }

        $query = "UPDATE accounts SET " . implode(", ", $fields) . " WHERE id = ?";
        $stmt = $conn->prepare($query);
        
        $params[] = $id;
        
        $types = str_repeat('s', count($params) - 1) . 'i'; 
        $stmt->bind_param($types, ...$params);
        
        $success = $stmt->execute();
        $stmt->close();
        
        return $success; 
    }
    //Xoá tài khoản
    function deleteAccount($id) {
        $conn = Database::getConnection();
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
        $query = "DELETE FROM accounts WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    function checkLogin($username, $password) {
        $conn = Database::getConnection();
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }
        
        $stmt = $conn->prepare("SELECT * FROM accounts WHERE username = ?");
        $stmt->bind_param("s", $username); 
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        if ($user) {
            error_log("Mật khẩu đã mã hóa: " . $user['password']);
            if (password_verify($password, $user['password'])) {
                return $user; 
            } else {
                error_log("Mật khẩu không khớp.");
                return false; 
            }
        } else {
            error_log("Người dùng không tồn tại.");
            return false; 
        }
    }

    function _footer() {
        include 'footer.php';
    }


?>
