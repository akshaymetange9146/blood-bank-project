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
<div class="container"><h3>exchange Donor blood Registration</h3></div>
  <div class="form-group">
    
    <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
   
    <input type="text" class="form-control" name="fname" placeholder="Enter father name">
    </div>
    <div class="form-group">
    
    <input type="text" class="form-control" name="city" placeholder="Enter city">
    </div>
    <div class="form-group">
    <select class="form-select" name="bloodgroup">
  <option selected>select blood group</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>O+</option>
</select>

    </div>

    <div class="form-group">
    <select class="form-select" name="ebloodgroup">
  <option selected>exchange blood group</option>
  <option>AB+</option>
  <option>AB-</option>
  <option>O+</option>
</select>

    </div>

  <div class="form-group">
    
    <input type="text" class="form-control" name="address" placeholder="address">
  </div>
  <br>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</div>
</div>
</div>
</form>
<?php
include"db.php";
if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $fname=$_POST['fname'];
     $city=$_POST['city'];
     $bloodgroup=$_POST['bloodgroup'];
     $ebloodgroup=$_POST['ebloodgroup'];
     $address=$_POST['address'];
     $q1="select * from donor where bloodGroup=:bloodgroup";
     $res1=$con->prepare($q1);
     $res1->bindParam(':bloodgroup',$bloodgroup);
     $res1->execute();
     $row1=$res1->fetch();
     $id1=$row1['id'];
     $name1=$row1['name'];
     $bg=$row1['bloodGroup'];
     $q3="insert into stockout (name,bloodGroup) value(:name1,:bg)";
     $res2=$con->prepare($q3);
     $res2->bindParam(':name1',$name1);
     $res2->bindParam(':bg',$bg);
     $res2->execute();

      $q4="delete from donor where id=:id1";
      $res3=$con->prepare($q4);
      $res3->bindParam(':id1',$id1);
      $res3->execute();

     $query="insert into edonor(name,father_name,city,bloodGroup,ebloodGroup,address) value
     (:name,:fname,:city,:bloodgroup,:ebloodgroup,:address)";
     $res=$con->prepare($query);
     $res->bindParam(':name',$name);
     $res->bindParam(':fname',$fname);
     $res->bindParam(':city',$city);
     $res->bindParam(':bloodgroup',$bloodgroup);
     $res->bindParam(':ebloodgroup',$ebloodgroup);
     $res->bindParam(':address',$address);
     $res->execute();
     if($res){
        echo"<script> alert('donor inserted');</script>";
     }else{
         echo"<script> alert('not inserted');</script>";
     }
}

?>
</body>
</html>