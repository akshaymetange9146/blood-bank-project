<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<br>
<br>
<div class="text-center">

<div class="row">
<div class="col-4 offset-sm-3">
<div class="container"><h3>Admin Login</h3></div>
  <div class="form-group">
    <label for="username">username </label>
    <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>
</div>
</div>
</form>
<?php
include"db.php";
if(isset($_POST['submit'])){
     $username=$_POST['username'];
     $password=$_POST['password'];
     $_SESSION['username']=$username;
     $query="select * from admin where username=:username && password=:password";
     $res=$con->prepare($query);
     $res->bindParam(':username',$username);
     $res->bindParam(':password',$password);
     $res->execute();
     $row=$res->fetchAll(PDO::FETCH_ASSOC);
     if($row){
         header("location:admin-home.php");
     }else{
         echo"<script> alert('wrong username');</script>";
     }
}

?>
</body>
</html>