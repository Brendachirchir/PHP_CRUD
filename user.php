<?php
include'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $sql = "INSERT INTO `users`  VALUES (NULL,'$name', '$email', '$mobile', '$password')";

  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data Inserted successfully";
  }
  else{
    die(mysqli_error( $con));
    
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>My database</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" 
    placeholder ="enter your name" name="name"autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" class="form-control" 
    placeholder ="enter your email" name="email"autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control" 
    placeholder ="enter your mobile" name="mobile"autocomplete="off">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" 
    placeholder ="enter your password" name="password"autocomplete="off">
  </div>
 
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
    </div>

    
  </body>
</html>