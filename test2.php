<?php
include_once ("conn.php");


$id =2;
$sql = "SELECT * FROM `blogs` where id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);


    $result = $stmt->fetch();
    echo $result["content"];

    ?>