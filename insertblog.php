<?php
include_once("conn.php");
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $title = $_POST["title"];
    $content = $_POST["content"];
    try{
        $sql = " INSERT INTO `blogs`( `title`, `content`) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$title, $content]);
        echo "Data inserted successfully";
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Insert Car</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			<form method="POST" action="" class="m-auto" style="max-width:600px" >
				<h3 class="my-4">Insert Blog</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Blog Title</label>
					<div class="col-md-7">
                        <input type="text" class="form-control form-control-lg" id="title2" name="title" required></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7">
                        <textarea class="form-control form-control-lg" id="content4" name="content" required></textarea></div>
                        </div>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Insert</button></div>        

		</div>
	</body>
    </html>