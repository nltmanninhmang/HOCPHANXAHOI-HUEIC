<?php 
    session_start();
    include 'include/function.php';
    _header('Hoạt Động Xã Hội - HUEIC'); 

    if (!isset($_SESSION['user'])) {
        header('Location: /auth/login');
        exit(); 
    }

    $user = $_SESSION['user'];
    $userId = $user['id'];
    $level = $user['level'] ?? null; 

    if ($level === 1 || $level === 2) {
        _homeUser ($user);
    } elseif ($level === 3 || $level === 4) {
        _homeAdmin($user);
    } else {
        showErrorAndRedirect("Lỗi không xác định!");
    }

    if ($level === null) {
        showErrorAndRedirect("Lỗi không xác định!");
    }

    function showErrorAndRedirect($message) {
        echo '<script>
                swal({
                    title: "Lỗi!",
                    text: "' . $message . '",
                    icon: "error",
                    button: "OK"
                }).then(() => {
                    window.location.href = "/auth/login"; // Chuyển hướng đến trang đăng nhập
                });
            </script>';
    }

    _footer();
?>