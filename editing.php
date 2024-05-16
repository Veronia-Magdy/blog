<?php
	include_once("conn.php");
	$status = false;

	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$status = true;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
	$title= $_POST["title"];
	$content= $_POST["content"];
	
    //show category
	try{
		$sql="UPDATE `blogs` SET `title`=?,`content`=? WHERE `ID`=?";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$title, $content, $id]);
		echo "Updated Successfully";
	}catch(PDOException $e){
		echo "Connection failed: " . $e->getMessage();
	}
}
//show car details
include_once("showcardetails.php");
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Edit / Update Blog</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
	</head>

	<body>
		<?php
		if($status){
			?>
		<div class="container">
			<form method="POST" action="" class="m-auto" style="max-width:600px" >
				<h3 class="my-4">Edit / Update Blog</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Blog Title</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" value="<?php echo $title ?>" name="title" required></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="content" required> <?php echo $content ?> </textarea></div>
				
						<hr class="my-4" />
						<div class="forn-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
						<div class="col-nd-7"><button class="btn btn-primary btn-lg" type="submit">Update</button></div>
				</div>
			</form>
		</div>
		<?php
		}else{
			echo"Invalid request";
		}
		?>
	</body>

</html>