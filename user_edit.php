<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
<?php 
include "db_con.php";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];
	$id=$_GET['edit'];

	$sql="UPDATE user SET id=$id ,name='$name', address='$address' WHERE id=$id";
	$result=mysqli_query($db,$sql);
	if($result){
		header('location:user_display.php');
	}
	else{
		die("Connection failed: " . $db->connect_error);

	}
}

?>

	<div class="row">
			<div class="col-sm-8 m-auto">
				<div class="card">
					<div class="card-body">
						<form method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">name</label>
								<input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp" placeholder="Enter name">
								
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">address</label>
								<input type="text" class="form-control" id="" name="address" placeholder="address">
							</div>
						
							<button type="submit" name="submit" class="btn btn-primary">update</button>
						</form>
					</div>
				</div>
			</div>
		</div>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
