<?php 
    session_start();
    include '../../config/connect.php';
    include '../../include/function.php';
    _header('Danh Sách Chi Đoàn - HUEIC');
    $user = $_SESSION['user'];
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit(); 
    }

    _unionBranchList($user);
    _footer();
?>