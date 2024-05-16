<?php
include_once("conn.php");

    try{
        $sql = " SELECT * FROM `blogs`";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
       
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V01</title>
    <link rel="stylesheet" href="blogs.css">
</head>
<body>
    <body>
        <div id="wrapper">
         <h1>Blogs List</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>blogs Title</span></th>
               <th><span>Delete</span></th>
               <th><span>Editing</span></th>
             </tr>
           </thead>
           <tbody>
            <?php
            foreach($stmt-> fetchAll() as $row){
              $title = $row["title"];
              $id = $row["id"];
              ?> 

             <tr>
               <td class="lalign"><?php echo $title; ?></td>
               <td><a href="delete.php?id=<?php echo $id ?>" onclick="return confirm ('are you sure you want to delete?')" ><img src="delete.jpg" alt=""></a></td>
               <td><a href="editing.php?id=<?php echo $id ?>"  ><img src="update.jpg" alt=""></a></td>
             </tr>
             <?php
            }
            ?>
           </tbody>
         </table>
        </div> 
       </body>
</body>
</html>
