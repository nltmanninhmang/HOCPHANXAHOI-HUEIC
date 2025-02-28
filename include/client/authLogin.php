<div class="side-overlay"></div>
<section class="auth d-flex">
    <div class="auth-left d-none d-md-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="/assets/images/thumbs/cdcn.png" alt="" class="img-fluid w-100 h-100" style="object-fit: cover;">
    </div>
    <div class="auth-right py-40 px-24 flex-center flex-column text-center">
        <div class="auth-right__inner mx-auto w-100">
            <a href="/" class="auth-right__logo">
                <img src="/assets/images/logo/cdcnhueic.svg" alt="logo-cdcnhue" width="250px">
            </a>
            <h3 class="mb-8">Đăng nhập tài khoản</h3>
            <form id="loginForm" method="POST">
                <div class="mb-24">
                    <div class="position-relative">
                        <input type="text" class="form-control py-11 ps-40" name="username" placeholder="Nhập username" required>
                        <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-user"></i></span>
                    </div>
                </div>
                <div class="mb-24">
                    <div class="position-relative">
                        <input type="password" class="form-control py-11 ps-40" name="password" placeholder="Nhập mật khẩu" required>
                        <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></span>
                        <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-main w-100">Đăng nhập</button>
                <div class="divider my-32 position-relative text-center">
                    <span class="divider__text text-gray-600 text-13 fw-medium px-26 bg-white">&copy;2025 Trường Cao Đẳng Công Nghiệp Huế</span>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="/assets/js/jquery-3.7.1.min.js"></script>
<script src="/assets/js/phosphor-icon.js"></script>
<script src="/assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Thêm SweetAlert2 -->
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        const form = this; 
        const formData = new FormData(form); 

        console.log('Dữ liệu gửi đi:', Object.fromEntries(formData)); 

        fetch('', { // Đường dẫn đến file xử lý
            method: 'POST',
            body: formData
        })
        .then(response => {
            console.log('Phản hồi từ máy chủ:', response);
            const contentType = response.headers.get('content-type');
            if (contentType && contentType.includes('application/json')) {
                return response.json(); // Chuyển đổi phản hồi thành JSON
            } else {
                return response.text().then(text => {
                    throw new Error('Phản hồi không phải là JSON: ' + text);
                });
            }
        })
        .then(data => {
            console.log('Dữ liệu JSON nhận được:', data);
            
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Thành công!',
                    text: 'Đăng nhập thành công!',
                }).then(() => {
                    form.reset(); 
                    window.location.href = '/'; 
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi!',
                    text: data.message,
                });
            }
        })
        .catch(error => {
            console.error('Có lỗi xảy ra:', error);
            Swal.fire({
                icon: 'error',
                title: 'Có lỗi xảy ra!',
                text: 'Vui lòng thử lại sau.',
            });
        });
    });
</script>