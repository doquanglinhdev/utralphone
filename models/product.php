<?php
//Lấy dữ liệu của hàng hóa
function product_all()
{
    $conn = connection();
    $sql = "SELECT * From product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function update_view($a)
{
    $conn = connection();
    $sql = "UPDATE product SET view=view+1 WHERE id_pro =$a";
    // $stmt = $conn->prepare($sql);
    $conn->exec($sql);
}

// function hang_hoa_home()
// {
//     $conn = connection();
//     $sql = "SELECT * From hang_hoa LIMIT 10";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

// function hang_hoa_like()
// {
//     $conn = connection();
//     $sql = "SELECT * FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 5;";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }
function product_inset($data = [])
{
    $conn = connection();
    $sqll = "INSERT INTO product (name_pro, price,sale_pro, img_pro, short_des, idcate) VALUES (?,?,?,?,?,?)";
    $stmtt = $conn->prepare($sqll);
    $stmtt->execute($data);
}

// function cmt_insert($data = [])
// {
//     $conn = connection();
//     $sqll = "INSERT INTO binh_luan (ma_kh, ma_hh, noi_dung, ngay_bl) VALUES (?,?,?,?)";
//     $stmtt = $conn->prepare($sqll);
//     $stmtt->execute($data);
// }

// function cmt_view($id)
// {
//     $conn = connection();
//     $sql = "SELECT * FROM binh_luan WHERE ma_hh = $id;";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

function delete_product()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `product` WHERE `id_pro` = $id";
    $conn = connection();
    $conn->exec($sql);
    header("location: index.php?ctr=list_product");
}

function product_one($id)
{
    $conn = connection();
    $sql = "SELECT * FROM product WHERE id_pro=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

// function product_list($id)
// {
//     $conn = connection();
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute([$id]);
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

// function product_one_list($id)
// {
//     $conn = connection();
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=? ORDER BY so_luot_xem DESC LIMIT 5";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute([$id]);
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }

// function update_product($data = [])
// {
//     $conn = connection();
//     $sql = "UPDATE hang_hoa SET ten_hh =?,don_gia =?,giam_gia =?,hinh =?,ma_loai =?,mo_ta =? WHERE ma_hh =?";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute($data);
//     setcookie("edit", "Sửa dữ liệu thành công", time() + 5);
// }


// function count_produc()
// {
//     $conn = connection();
//     $sql = "SELECT COUNT(*) FROM hang_hoa";
//     $stmt = $conn->query($sql);
//     $count = $stmt->fetchColumn();
//     return $count;
// }

// // function product_seacherr($id)
// // {
// //     $conn = connection();
// //     $sql = "SELECT * FROM hang_hoa WHERE LOWER(ten_hh) LIKE LOWER(%$id%);";
// //     $stmt = $conn->prepare($sql);
// //     $stmt->execute();
// //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// //     return $result;
// // }


// function product_seacher($id)
// {
//     $conn = connection();
//     $sql = "SELECT * FROM hang_hoa WHERE LOWER(ten_hh) LIKE LOWER('%$id%');";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
// }
