<?php
header('Content-Type: application/json');
require_once '../../models/admin/add-accounts.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $name = $_POST['name'] ?? '';
    $level = $_POST['level'] ?? '';
    $class = $_POST['class'] ?? '';
    $account_type = $_POST['account_type'] ?? '';

    // Kiểm tra thông tin nhập vào
    if (empty($username) || empty($password) || empty($name) || empty($level) || empty($account_type)) {
        echo json_encode(["status" => "error", "message" => "Vui lòng nhập đầy đủ thông tin!"]);
        exit;
    }

    // Kiểm tra level phải là số hợp lệ
    if (!is_numeric($level)) {
        echo json_encode(["status" => "error", "message" => "Cấp bậc không hợp lệ!"]);
        exit;
    }

    // Kiểm tra account_type chỉ có thể là 'student' hoặc 'teacher'
    if (!in_array($account_type, ['student', 'teacher'])) {
        echo json_encode(["status" => "error", "message" => "Loại tài khoản không hợp lệ!"]);
        exit;
    }

    $accountModel = new AccountModel();
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $result = $accountModel->createAccount($username, $hashedPassword, $name, $level, $class, $account_type);

    if ($result) {
        echo json_encode(["status" => "success", "message" => "Tạo tài khoản thành công!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Tài khoản đã tồn tại hoặc có lỗi xảy ra!"]);
    }
    exit;
}
?>
