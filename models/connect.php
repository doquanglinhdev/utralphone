<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

function connection()
{
    $conn = new PDO("mysql:host=localhost; dbname=ultraphone; charset=utf8", "root", "");
    return $conn;
}
