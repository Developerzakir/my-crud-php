
<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud Project</title>
</head>
<body>
	<h2>UPDATE DATA</h2>

	<?php 
	include_once 'config.php';

	if(isset($_POST['submit'])){
	   $id = $_POST['id'];
		$name = $_POST['name'];

		if(empty($name)){
			echo "Name is Required";
		}else{
			$sql = "UPDATE companies SET name = '$name' WHERE id ='$id'";
			$dataUpdate = mysqli_query($conn,$sql);

			if($dataUpdate){
				echo "Data Update Successfully";
			}else{
				echo "data not updated";
			}
		}
	}
?>

<?php
$sql = "SELECT * FROM companies WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if($result){
	while($data = mysqli_fetch_array($result)){




 ?>


	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
		Name: <input type="text" name="name" value="<?php echo $data['name']; ?>">
		<input type="submit" name="submit" value="Update">
	</form>
	<?php }}?>
	<br><br><br>

	<a href="view.php">Go To View Page</a>
	
</body>
</html>