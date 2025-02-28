<?php 
    session_start();
    include '../../config/connect.php';
    include '../../include/function.php';
    _header('Danh Sách Sinh Viên - HUEIC');
    $user = $_SESSION['user'];
    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit(); 
    }

    _studentList($user);
    _footer();
?>