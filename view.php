<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud Project</title>
</head>
<body>

	<h1>Display All Data</h1>

	<table border="1px">
		<tr>
			<th>SL</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>

		<?php 
		include_once 'config.php';
		$sql = "SELECT * FROM companies";
		$result = mysqli_query($conn,$sql);

		if($result){
			$i=0;
			while($alldata = mysqli_fetch_array($result)){
				$i++;

			
			
		 

		 ?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $alldata['name']; ?></td>
			<td>
				<a href="update.php?id=<?php echo $alldata['id'];?>">Edit</a> ||
				<a href="delete.php?id=<?php echo $alldata['id'];?>">Delete</a> 
			</td>
		</tr>
	<?php } } ?>
		
	</table>
	<br><br>
	<a href="create.php">Go To Create Page</a>
	
</body>
</html>