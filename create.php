<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud Project</title>
</head>
<body>
	<h2>CREATE DATA</h2>

	<?php 
	include_once 'config.php';

	if(isset($_POST['submit'])){
		$name = $_POST['name'];

		if(empty($name)){
			echo "Name is Required";
		}else{
			$sql = "INSERT INTO companies(name) VALUES('$name')";
			$dataInsert = mysqli_query($conn,$sql);

			if($dataInsert){
				echo "Data Insert Successfully";
			}else{
				echo "data not inserted";
			}
		}
	}




	 ?>


	<form action="" method="POST">
		Name: <input type="text" name="name" placeholder="Enter company name">
		<input type="submit" name="submit" value="Create">
	</form>
	<br><br><br>

	<a href="view.php">Go Back To View Page</a>
	
</body>
</html>