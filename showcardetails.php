<?php
if($status){
//show car details
try{
  $sql = "SELECT * FROM `blogs` WHERE ID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id]);

  $result = $stmt->fetch();
  $title= $result["title"];
  $content= $result["content"];
  
}catch(PDOException $e){
  echo "Connection failed: " . $e->getMessage();
}
}

?>