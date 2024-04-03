<?php
//<---------FOR STORING THE DATA INTO THE TABLE------------->
include 'connect.php';
if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $email =$_POST['email'];
  $mobile =$_POST['mobile'];
  $password =$_POST['password'];

  $sql="insert into `crud` (name,email,mobile,password)
  values('$name','$email','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5 ">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="name" class="form-control" placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <lable>Email</lable>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <lable>Mobile</lable>
                <input type="text" class="form-control" placeholder="Enter your Numbar" name="mobile">
            </div>
            <div class="form-group">
                <lable>Password</lable>
                <input type="password" class="form-control" placeholder="Enter pasword" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
    </form>
</body>

</html>