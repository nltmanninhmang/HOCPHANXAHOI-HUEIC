<?php
    session_start();
    include '../../config/connect.php';
    include '../../include/function.php';
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit(); 
    }

    $user = $_SESSION['user'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $account_type = $_POST['account_type'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $level = $_POST['level'];
        $class = isset($_POST['class']) ? $_POST['class'] : null; // Kiểm tra xem có trường class không

        // Gọi hàm tạo tài khoản
        $response = createAccount($account_type, $username, $password, $name, $level, $class);

        // Trả về phản hồi dưới dạng JSON
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    _header('Thêm tài khoản');
    _accountsAdd($user);
    _footer();
?>