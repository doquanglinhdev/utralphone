<?php

function user_all()
{
    $conn = connection();
    $sql = "SELECT * From users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function inset_user($data = [])
{
    $conn = connection();
    $sqll = "INSERT INTO users (user_name, pass , email, name_user, phone,address, role) VALUES (?,?,?,?,?,?,?)";
    $stmtt = $conn->prepare($sqll);
    $stmtt->execute($data);
}

function delete_user()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id_user` = $id";
    $conn = connection();
    $conn->exec($sql);
    header("location: index.php?ctr=list_user");
}