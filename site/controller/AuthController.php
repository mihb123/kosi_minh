<?php
class AuthController
{
    function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);
        if (!$customer) {
            $_SESSION['error'] = 'Lỗi: Tài khoản không tồn tại';
            header('Location: /');
            exit;
        }

        if (!password_verify($password, $customer->getPassword())) {
            $_SESSION['error'] = "Sai mật khẩu";
            header('location: /');
            exit;
        }

        if (!$customer->getVerified()) {
            $_SESSION['error'] = "Lỗi: Tài khoản của bạn chưa được kích hoạt";
            header('location: /');
            exit;
        }

        $_SESSION['name'] = $customer->getName();
        $_SESSION['email'] = $email;
        $_SESSION['success'] = 'Đăng nhập thành công';
        header('Location: /');
    }

    function logout()
    {
        $_SESSION['email'] = '';
        $_SESSION['name'] = '';

        header('location: /');
    }
}