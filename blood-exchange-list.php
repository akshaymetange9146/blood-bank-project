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
<div class="container"><h3>exchange blood Donor list</h3></div>
<br>
  <table class="table table-bordered alert alert-primary">
<thead>
    <th>name</th>
    <th>fathername</th>
    <th>city</th>
    <th>bloodgroup</th>
    <th>exchange-bloodgroup</th>
    <th>address</th>
</thead>
<tr>
    <?php
    include"db.php";
    $query="select * from edonor";
    $res=$con->prepare($query);
    $res->execute();
    while( $row=$res->fetch(PDO::FETCH_OBJ)){
    ?>
    <td><?php echo $row->{'name'}?></td>
    <td><?php echo $row->{'father_name'}?></td>
    <td><?php echo $row->{'city'}?></td>
    <td><?php echo $row->{'bloodGroup'}?></td>
    <td><?php echo $row->{'ebloodGroup'}?></td>
    <td><?php echo $row->{'city'}?></td>
   
</tr>
<?php
    }
    ?>

  </table>
</div>
</div>
</div>

<?php
?>
</body>
</html>