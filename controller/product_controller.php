<?php
function add_product()
{
    if (isset($_SESSION['admin'])) {
        $loai = category_all();
        renderadmin(
            "add_product",
            ['loai' => $loai],
        );
    } else {
        header("location: index.php?ctr=admin_login");
        exit;
    }
}

function edit_product()
{
    if (isset($_SESSION['admin'])) {
        $id = $_GET['id'];
        $pro_one = product_one($id);
        $cate_pro = category_all();
        renderadmin(
            "edit_product",
            ['pro_one' => $pro_one, 
            'cate_pro' => $cate_pro],
        );
    } else {
        header("location: index.php?ctr=admin_login");
        exit;
    }
}

function list_product()
{
    if (isset($_SESSION['admin'])) {
        $product = product_all();
        renderadmin(
            "list_product",
            ['product' => $product]
        );
    } else {
        header("location: index.php?ctr=admin_login");
        exit;
    }
}
function save_product()
{
    extract($_POST);
    $image = $_FILES['hinh'];
    $hinh = $image['name'];
    $data = [
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $mo_ta,
        $ma_loai
    ];
    // var_dump($data);
    // die;
    product_inset($data);
    move_uploaded_file($image['tmp_name'], "views/public/images/" . $hinh);
    setcookie("success", "Thêm dữ liệu thành công", time() + 2);
    header("location: index.php?ctr=add_product");
    exit;
}

function detail_product()
{
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        $id = $_GET['id'];
        $pro_one = product_one($id);
        render(
            "product",
            ['pro_one' => $pro_one]
        );
        $sessionKey = 'post' . $id;
        $sessionView = $_SESSION[$sessionKey];
        if (empty($sessionView)) { // nếu chưa có session
            $_SESSION[$sessionKey] = "1"; //set giá trị cho session
            update_view($id);
        }
    } else {
        render("home");
    }
}
