<?php
function list_category()
{
    if (isset($_SESSION['admin'])) {
        $cate = category_all();
        renderadmin(
            "list_category",
            ['cate' => $cate]
        );
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}

function add_category()
{
    if (isset($_SESSION['admin'])) {
        renderadmin("add_category");
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
    
}

function edit_category()
{
    if (isset($_SESSION['admin'])) {
        $id = $_GET['id'];
        $cate_one = category_one($id);
        renderadmin(
            "edit_category",
            ['cate_one' => $cate_one],
        );
    } else {
        header("location: index.php?ctr=admin_login");
        exit;
    }
}

function save_category()
{
    extract($_POST);
    if (isset($_POST['btn_insert'])) {
        $data = [
            $ten_loai,
        ];
        inset_cate($data);
        setcookie("success", "Thêm dữ liệu thành công", time() + 2);
        header("location: index.php?ctr=add_category");
        exit;
    }
}
