<?php 
  include "db_con.php";
?>

<?php 


if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$result=mysqli_query($db, "DELETE FROM crud WHERE id=$id");

	if($result){
		echo "delete succefully";
		header('location:index.php');
	}
	else{
		echo "not deleted";
	}
	
}
?>
