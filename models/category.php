<?php

function category_all()
{
    $conn = connection();
    $sql = "SELECT * From category";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function inset_cate($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO category(name_cate) Values(?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function delete_cate()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `category` WHERE `id_cate` = $id";
    $conn = connection();
    $conn->exec($sql);
    header("location: index.php?ctr=list_category");
}