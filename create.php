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
    <div class="card">
      <div class="card-body">
        <div class="card  mb-3">
  <div class="card-header text-white bg-primary text-center">PHP CRUD</div>

  <div class="card-body">
     <a type="button" class="btn btn-success" href="index.php">user list</a>
          <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">address</label>
    <input type="text" name="address" class="form-control" id="" placeholder="address">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">city</label>
    <input type="text" name="city" class="form-control" id="" placeholder="address">
  </div>

  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</form>


<?php 
 
  



  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];

$sql="INSERT INTO crud (name, address, city) VALUES ('$name', '$address', '$city')";
   $result=mysqli_query($db,$sql);

   if($result){
    echo "success";
    header('location:index.php');
    
   }
   }
   
?>

  </div>
</div>






      </div>
    </div>
  </div>
</div>



<body>
<?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>





    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>