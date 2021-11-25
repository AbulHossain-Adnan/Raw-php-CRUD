<?php 
include "db_con.php";
$id=$_GET['delete'];
$sql="DELETE FROM user WHERE id=$id";
$result=mysqli_query($db,$sql);
if($result){
	header('location:user_display.php');
}


?>