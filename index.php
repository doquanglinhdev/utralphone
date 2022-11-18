<?php
session_start();
require_once "models/connect.php";
require_once "models/product.php";
require_once "models/category.php";
require_once "models/login.php";
require_once "models/logout.php";
require_once "models/user.php";
require_once "models/setting.php";

require_once "controller/controller.php";
require_once "controller/home_controller.php";
require_once "controller/product_controller.php";
require_once "controller/category_controller.php";
require_once "controller/login_controller.php";
require_once "controller/register_controller.php";
require_once "controller/user_controller.php";
require_once "controller/setting_controller.php";
require_once "controller/search_controller.php";


$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';

switch ($ctr) {
    case '/':

    case 'home':
        show_home();
        break;
    case 'admin':
        show_homeadmin();
        break;
    case 'add_product':
        add_product();
        break;
    case 'add_category':
        add_category();
        break;
    case 'save_category':
        save_category();
        break;
    case 'save_product':
        save_product();
        break;
    case 'list_product':
        list_product();
        break;
    case 'list_category':
        list_category();
        break;
    case 'delete_product':
        delete_product();
        break;
    case 'delete_category':
        delete_cate();
        break;
    case 'login':
        if (isset($_POST['login']) && ($_POST['login'])) {
            login();
        };
        login_user();
        break;
    case 'admin_login':
        if (isset($_POST['login']) && ($_POST['login'])) {
            login_adminn();
        };
        login_admin();
        break;
    case 'register':
        register_user();
        break;
    case 'account':
        account();
        break;
    case 'logout':
        logout();
        break;
    case 'list_user':
        list_user();
        break;
    case 'delete_user':
        delete_user();
        break;
    case 'setting':
        setting();
        break;
    case 'creat_user':
        if (isset($_POST['create']) && ($_POST['create'])) {
            create_user_admin();
        };
        add_user();
        break;

    case 'product':
        detail_product();
        break;
    case 'edit_product':
        edit_product();
        break;
    case 'search':
        if (isset($_POST['btn_search']) && ($_POST['btn_search'])) {
            // show_home();
            // create_user_admin();
            check_search();
        };
        search();
        break;
    case 'edit_category':
        if (isset($_POST['btn_save']) && ($_POST['btn_save'])) {
            // create_user_admin();
        };
        edit_category();
        break;
    default:
        // show_error();
}
