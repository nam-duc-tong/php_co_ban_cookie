<?php
    function login(){
        if(!empty($_POST)){
            $cookieEmail = $_COOKIE['email'];//lay gia tri luu trong cookie
            $cookiePwd = $_COOKIE['password'];

            $email = $_POST['email'];//gia tri ma nguoi dung nhap vao
            $password = $_POST['password'];
            if($email == $cookieEmail && $password == $cookiePwd)
            {
                header("Location: welcome.php");
            }
        }
    }
?>