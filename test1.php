<?php
include_once ("conn.php");

$sql = "SELECT * FROM `blogs`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach($stmt->fetchAll() as $row){
  $id = $row["id"];
  $title = $row["title"];
  $content = $row["content"];
    ?>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $title ?></td>
        <td><?php echo $content ?></td>
      </tr>
      <?php
         }
         ?>
    </tbody>
  </table>
</div>

</body>
</html>
