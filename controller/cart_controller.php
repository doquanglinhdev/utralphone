<?php
function show_cart()
{
    render("cart");
}
function checkout()
{
    if (isset($_SESSION['user'])) {
        if (isset($_SESSION['cart'])) {
            render("checkout");
        } else {
            header("location: ?ctr=home");
        }
    } else {
        render('login');
    }
    die;
}
function addcart()
{
    $idpro = $_POST['idpro'];
    $namepro = $_POST['namepro'];
    $imgpro = $_POST['imgpro'];
    $pricepro = $_POST['pricepro'];
    $num = 1;
    $intomoney = $pricepro * $num;
    $arrcart = [$idpro, $namepro, $imgpro, $pricepro, $num, $intomoney];
    array_push($_SESSION['cart'], $arrcart);
    header("location: ?ctr=home");
    die;
}
function dele_cart()
{
    if (isset($_GET['id'])) {
        array_splice($_SESSION['cart'], $_GET['id'], 1);
    } else {
        $_SESSION['cart'] = [];
    }
    header("location: ?ctr=cart");
    die;
}

function bill()
{
    extract($_POST);
    $date = date("d M Y H:i:s");
    $numb_time = strtotime($date);
    if (isset($_POST['oder'])) {
        $adr = $adr_oder . ',' . $xa_oder . ',' . $huyen_oder . ',' . $tinh_oder;
        $stt = 0;
        // id_user,user_name,address,phone,email,payment,order_date,total_bill,status
        $data = [
            $iduser,
            $name_oder,
            $adr,
            $phone_oder,
            $email_oder,
            $cart,
            $payment,
            $numb_time,
            $total,
            $stt,
            $express

        ];
        inset_bill($data);
        // sentmail($email_oder);
        // $mail = sentmail($email_oder);
        // if ($mail == 1) {
        //     header("location: ?ctr=home");
        //     unset($_SESSION['cart']);
        // } else {
        //     break;
        // }
        unset($_SESSION['cart']);
        header("location: ?ctr=home");
        die;
    }
}

function show_bill(){
    render("bill");
}

function count_cart()
{
    $dem = 0;
    foreach ($_SESSION['cart'] as $acb) {
        $dem++;
    }
    return $dem;
}
