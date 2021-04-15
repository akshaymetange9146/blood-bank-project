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

<br>
<br>
<div class="text-center">

<div class="row">
<div class="col-4 offset-sm-3">
<div class="container"><h3>Blood list quantity</h3></div>
<br>
  <table class="table table-bordered alert alert-warning">
<thead>
    <th>name</th>
    <th>Quantity</th>
    
</thead>
<tr>
    <td>AB+</td>
    <td><?php include"db.php"; $res=$con->query("select * from donor where bloodgroup='AB+'");
    echo $row=$res->rowCount();
    ?></td>
</tr>
<tr>
    <td>AB-</td>
    <td><?php include"db.php"; $res=$con->query("select * from donor where bloodgroup='AB-'");
    echo $row=$res->rowCount();
    ?></td>
</tr>
<tr>
    <td>O+</td>
    <td><?php include"db.php"; $res=$con->query("select * from donor where bloodgroup='O+'");
    echo $row=$res->rowCount();
    ?></td>
</tr>


  </table>
</div>
</div>
</div>

<?php
?>
</body>
</html>