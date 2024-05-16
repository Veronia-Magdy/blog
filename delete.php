<?php
if(isset($_GET["id"])){
    include_once("conn.php"); 
    $id = $_GET["id"];

    try{
        $sql = "DELETE FROM `blogs` WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        echo "Data inserted successfully";
        
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}else{
    echo "Invalid request";
}
?>