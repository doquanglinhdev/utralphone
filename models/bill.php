<?php 
function inset_bill($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO bill(id_user,user_name,address,phone,email,product,payment,order_date,total_bill,status,express) Values(?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}