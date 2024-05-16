<?php
include_once ("conn.php");

$sql = "SELECT * FROM `blogs`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    foreach($stmt->fetchAll() as $row){
        echo $row["title"];
        echo "<br>";
    }
    ?>