<?php 
function account()
{
    if(isset($_SESSION["user"])){
        render("account");
    } else {
        header('location: index.php?ctr=login');
    };
}

function list_user()
{
    if(isset($_SESSION["admin"])){
        $user = user_all();
        renderadmin(
            "list_user",
            ['user' => $user]
        );
    } else {
        header('location: index.php?ctr=admin_login');
    };
}
function add_user()
{
    if(isset($_SESSION["admin"])){
        renderadmin(
            "add_user"
        );
    } else {
        header('location: index.php?ctr=admin_login');
    };
}
function create_user_admin(){
    extract($_POST);
    if (isset($_POST['create'])) {
        $data = [
            $username,
            $pass,
            $email,
            $hoten,
            $sdtt,
            $address,
            $vaitro
        ];
        inset_user($data);
        setcookie("createe", "Tạo tài khoản thành công !!!", time() + 2);
        header("location: index.php?ctr=creat_user");
        exit;
    }
}