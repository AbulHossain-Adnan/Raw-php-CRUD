<?php 
  include "db_con.php";
?>
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
   <div class="card  mb-3">
  <div class="card-header text-white bg-primary text-center"></div>
  <div class="card-body">
  	<a type="button
  	" class="btn btn-success" href="create.php">Add user</a>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">city</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
     
      
      	 <?php 

  $sql="SELECT * FROM crud";
  $result=mysqli_query($db,$sql);
  if($result){
 
  while($row=mysqli_fetch_assoc($result)){
  	$id=$row['id'];
  	$name=$row['name'];
  	$address=$row['address'];
  	$city=$row['city'];
  	echo '<tr>
  	<td>'.$name.'</td>
  	<td>'.$address.'</td>
  	<td>'.$city.'</td>
  	<td>
  	<button class="btn btn-primary">edit</button>
  
  	<a class="btn btn-danger" href="delete.php?delete='.$id.'">delete</a>
  	</tr>';

  }
  }
  ?>
      
   
    </tr>

  </tbody>
</table>
  </div>
</div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>