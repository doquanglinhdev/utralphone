<?php
//render giao diện người dùng
//$path: tên file đường dẫn trong views
//$data: là dữ liệu được gửi vào view
function render($path, $data = [])
{
    extract($data);
    $view = "views/public/" . $path . ".php";
    include_once $view;
}
function renderadmin($path, $data = [])
{
    extract($data);
    $view = "views/admin/" . $path . ".php";
    include_once $view;
}
