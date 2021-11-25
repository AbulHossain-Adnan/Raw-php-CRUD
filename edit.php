<?php 
  include "db_con.php";
?>
<?php 
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$sql="SELECT * FROM crud WHERE id=$id";
	 $record = mysqli_query($db,$sql);
	  if($record){
    	$row=mysqli_fetch_assoc($record);
    	$name=$row['name'];
    	$address=$row['address'];
    	$city=$row['city'];

    }
    else{
    	 die("Connection failed: " . $db->connect_error);

    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php 
  if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $id=$_GET['edit'];
    $record="SELECT * FROM user id=$id";
    $result=mysqli_query($db,$record);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $address=$row['address'];
   


$sql="UPDATE crud  SET  id=$id, name='$name',address='$address',city='$city' where id=$id";
   $result=mysqli_query($db,$sql);

   if($result){
    echo "success";
    header('location:index.php');
    
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
        <div class="card  mb-3">
  <div class="card-header text-white bg-primary text-center">PHP CRUD</div>

  <div class="card-body">
     <a type="button" class="btn btn-success" href="index.php">user list</a>
          <form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" value="<?php echo $name; ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">address</label>
    <input type="text" name="address" class="form-control" id="" value="<?php echo $address; ?>">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">city</label>
    <input type="text" name="city" class="form-control" id="" value="<?php echo $city; ?>">
  </div>

  <button type="submit" name="update" class="btn btn-primary">update</button>
</form>





 









  </div>
</div>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>





