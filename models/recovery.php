<?php
function checkmail($data = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `users` WHERE email = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
