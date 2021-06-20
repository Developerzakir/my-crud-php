<?php 

include_once 'config.php';

if (isset($_GET['id'])) {
	$id =	$_GET['id'];
	$sql = "DELETE FROM companies WHERE id='$id'";

	$dataDelete = mysqli_query($conn,$sql);
	if ($dataDelete) {
		echo "Data Deleted Successfully";
	}else{
		echo "Data Not Deleted";
	}
}



 ?>
<br><br><br>
 <a href="view.php">Go To View Page</a>