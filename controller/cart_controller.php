<?php
function show_cart()
{
    render("cart");
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
        array_splice($_SESSION['cart'],$_GET['id'], 1);
    } else {
        $_SESSION['cart'] = [];
    }
    header("location: ?ctr=cart");
    die;
}

function count_cart()
{ 
    $dem= 0;
    foreach($_SESSION['cart'] as $acb){
         $dem ++;
    }
    return $dem;
}