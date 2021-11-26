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
            <a class="btn btn-success btn-sm" href="user_create.php">New user create+</a>
            <table class="table">
              <thead>
                <tr>
                  
                  <th scope="col">name</th>
                  <th scope="col">address</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody>
                
                
                <?php
                include "db_con.php";
                $sql="SELECT * FROM  user";
                $result=mysqli_query($db,$sql);
                while($row=mysqli_fetch_assoc($result)){
                $name=$row['name'];
                $id=$row['id'];
                $address=$row['address'];
                echo '<tr>
                  <td>'.$name.'</td>
                  <td>'.$address.'</td>
                  <td>
                    <a href="user_edit.php?edit=' .$id.'" class="btn btn-primary">Edit</a>
                    <a href="user_delete.php?delete='.$id.'" class="btn btn-danger">Delete</a>
                  </td>
                </tr>';
                }
                
                ?>
              </tbody>
            </table>
          </div>
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