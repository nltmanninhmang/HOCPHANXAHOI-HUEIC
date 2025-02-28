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
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data['action'] === 'editAccount') {
            // Gọi hàm editAccount với dữ liệu nhận được
            $result = editAccount($data['id'], $data);
            
            if ($result) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Không thể cập nhật tài khoản.']);
            }
            exit;
        }
    }
    _header('Danh Sách Tài Khoản');
    _accountsList($user);
    _footer();
?>