<?php
    session_start(); 
    include '../../config/connect.php';
    include '../../include/function.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = checkLogin($username, $password); 

        header('Content-Type: application/json'); 
        if ($user) {
            $_SESSION['user'] = $user;
            echo json_encode(['success' => true]); 
        } else {
            echo json_encode(['success' => false, 'message' => 'Tên đăng nhập hoặc mật khẩu không đúng.']); 
        }
        exit; 
    }

    _header('Đăng nhập tài khoản');
    _authLogin();
?>