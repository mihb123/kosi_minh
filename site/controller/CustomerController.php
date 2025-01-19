<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class CustomerController
{
    function register()
    {
        // Tạo tài khoản và lưu xuống db
        $data = [];
        $data["name"] = $_POST['fullname'];
        $data["email"] = $_POST['email'];
        $data["phone"] = null;
        $data["birthday"] = null;
        $data["verified"] = 0;

        //ma hoa mat khau truoc khi luu
        $data["password"] = password_hash($_POST['newPassword'], PASSWORD_BCRYPT);

        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->save($data);

        $to = $_POST['email'];
        $name = $_POST['fullname'];
        $subject = 'Xác thực tài khoản';
        $key = JWT_KEY;
        $payload = ['email' => $to];
        $token = JWT::encode($payload, $key, 'HS256');

        $linkActiveAccount = '<a href="http://kosi.com/site/?c=customer&a=active&token=' . $token . '">Active Account</a>';
        $content = "
        Xin chào $name, <br>
        Vui lòng click vào link bên dưới để kích hoạt tài khoản <br>
        $linkActiveAccount <br>
        --------------------------<br>
        Được gửi từ Kosi.com <br>
        ";

        $emailService = new EmailService;
        $emailService->send($to, $subject, $content);

        $_SESSION['success'] = 'Tạo tài khoản thành công. Vui lòng check email để kích hoạt tài khoản';
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $to;
        header('location: /');
    }

    function active()
    {
        $token = $_GET['token'];
        $key = JWT_KEY;
        $payload = JWT::decode($token, new Key($key, 'HS256'));

        $email = $payload->email;

        $customerRepository = new CustomerRepo;
        $customer = $customerRepository->findEmail($email);
        $customer->setVerified(1);
        $customerRepository->update($customer);
        $_SESSION['name'] = $customer->getName();
        $_SESSION['email'] = $email;
        $_SESSION['success'] = 'Đã kích hoạt tài khoản';
        header('location: /');
    }

    function show()
    {
        $email = $_SESSION['email'];
        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);
        require 'view/viewInformation.php';
    }

    function address()
    {
        $email = $_SESSION['email'];
        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);
        require 'layout/variable_address.php';
        require 'view/viewShippingAddress.php';
    }

    function updateShippingAddress()
    {
        $shipping_name = $_POST['fullname'];
        $shipping_phone = $_POST['phone'];
        $shipping_address = $_POST['address'];
        $shipping_ward_id = $_POST['ward_id'];

        $email = $_SESSION['email'];
        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);
        $customer->setShippingName($shipping_name);
        $customer->setShippingPhone($shipping_phone);
        $customer->setShippingAddress($shipping_address);
        $customer->setShippingWardId($shipping_ward_id);
        $customerRepo->update($customer);

        $_SESSION['success'] = 'Đã cập nhật địa chỉ giao hàng thành công';
        header('location: ?c=customer&a=address');
    }

    function orders()
    {
        $email = $_SESSION['email'];
        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);
        $customer_id = $customer->getId();

        $orderRepo = new OrderRepo;
        $orders = $orderRepo->findOrderByCustomer($customer_id);
        require 'view/viewOrders.php';
    }

    function edit()
    {
        $email = $_SESSION['email'];
        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);
        require 'view/updateInfo.php';
    }

    function updateInfo()
    {
        $email = $_SESSION['email'];
        $customerRepo = new CustomerRepo;
        $customer = $customerRepo->findEmail($email);

        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $customer->setName($fullname);
        $customer->setPhone($phone);
        $customer->setEmail($email);
        $customer->setBirthday($birthday);
        $customer->setPassword($password);
        $customerRepo->update($customer);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = 'Đã cập nhật thông tin thành công';
        header('location: ?c=customer&a=show');
    }
}