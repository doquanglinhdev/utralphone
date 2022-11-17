<?php

function login_user()
{
    render("login");
}
function login()
{
    extract($_POST);
    if (isset($_POST['login'])) {
        $data = [
            $username,
            $password
        ];
        $check = check_login($data);
        if (is_array($check)) {
            $_SESSION['user'] = $check;
            header("location: index.php");
        } else {
            setcookie("success", "Tài khoản hoặc mật khẩu không chính xác !!!", time() + 2);
            header("location: index.php?ctr=login");
        }
        exit;
    }
}
function login_admin()
{
    if(isset($_SESSION['admin'])){
        header('location: index.php?ctr=admin');
    } else {
        renderadmin("login");
    }
    
}
function login_adminn()
{
    extract($_POST);
    if (isset($_POST['login'])) {
        $data = [
            $username,
            $passwword,
            $rolee
        ];
        $check = check_login_admin($data);
        if (is_array($check)) {
            $_SESSION['admin'] = $check;
            header("location: index.php?ctr=admin");
        } else {
            setcookie("success", "Bạn không đủ thẩm quyền để truy cập !!!", time() + 2);
            header("location: index.php?ctr=admin_login");
        }
        exit;
    }
}