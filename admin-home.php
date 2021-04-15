<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="cs/admin-home.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.f{
    margin-top: 10px;
    background-color: rgb(95, 59, 11);
    padding-top: 40px;
    border:2px;
    width:190px;
    height:100px;
    margin-left: 10px;;
    text-align: center;
    font-style: italic;
    position: absolute;
    bottom:34.7%;
    left:39.7%;
}

    </style>
</head>
<body><?php
session_start();
if(isset($_SESSION['username'])){
    $name=$_SESSION['username'];
}
?>
<div class="text-center">
    <h4 class="jumbotron">Admin DashBoard</h4><h6>Hello! <?php 
    if(!$name){
header("location:index.php");
    }else{ echo $name;}?></h6><a href="admin-logout.php">logout</a>
</div>
<hr>
<div class="a">
<a href="donor-registration.php"><p class="text-warning">Donor Registration</p></a>
</div>
<div class="b">
<a href="donor-list.php"><p class="text-success"> Donor List</p></a>
</div>
<div class="c">
<a href="donor-blood-stock.php"><p class="text-success"> blood stocklist</p></a>
</div>
<div class="e">
<a href="donor-exchange-registration.php"><p class="text-primary"> customer registration</p></a>
</div>
<div class="d">
<a href="blood-exchange-list.php"><p class="text-warning"> ex customer bloodlist</p></a>
</div>
<div class="f">
<a href="blood-outstock.php"><p class="text-primary"> outstock bloodlist</p></a>
</div>
</body>
</html>