<?php 
function setiing_show()
{
    $conn = connection();
    $sql = "SELECT * From system";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}