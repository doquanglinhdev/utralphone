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
    // if (isset($_SESSION['useradmin'])) {
    //     $loai = loai_all();
    //     renderadmin(
    //         "add_product",
    //         ['loai' => $loai],
    //     );
    // } else {
    //     header("location: index.php?ctr=login-admin");
    //     exit;
    // }
    renderadmin("add_category");
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
