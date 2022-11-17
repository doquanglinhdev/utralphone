<?php
function check_login($data = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `users` WHERE user_name =? AND pass= ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function check_login_admin($data = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `users` WHERE user_name =? AND pass= ? AND role=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}