
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Hello, world!</title>
	</head>
	<body>
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
						
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php 
include "db_con.php";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];

	$sql="INSERT INTO user (name,address) VALUES('$name','$address')";
	$result=mysqli_query($db,$sql);
	if($result){
		echo "success";
	}
	else{
		die("Connection failed: " . $db->connect_error);

	}
}

?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>