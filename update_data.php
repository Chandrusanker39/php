<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <style>
 </style>
<body>
<div class="col-10" >
<?php
$server="localhost";
$uname="root";
$password="";
$db="ns";
$con=mysqli_connect($server,$uname,$password,$db) or die("connect connected");
$id=$_GET['id'];
$query="select * from sivem where id=$id";
$ref=mysqli_query($con,$query);
if($row=mysqli_fetch_array($ref))
{
?>
<form action="update_upload.php" method="POST" class="form-group">

    <label for="id" >ID</label>
    <input type="number" name="id" class="form-control " value="<?php echo $row[11];?>" readonly>

    <label for="uname" class="form-label">Your Name</label>
    <input type="text" name="uname" class="form-control" value="<?php echo $row[0]; ?>">
     
    <label for="pass" class="form-label">pass</label>
    <input type="text" name="pass" class="form-control" value="<?php echo $row[1]; ?>">

    <label for="repassword" class="form-label">Repassword</label>
    <input type="text"  name="rpass" class="form-control" value="<?php echo $row[2]; ?>">
    
    <label for="addr" class="form-label">Address</label>
    <input type="text" name="addr" class="form-control" value="<?php echo $row[3]; ?>">

    <label for="gen" class="form-label">Gen</label>
    <input type="text" name="gen" class="form-control" value="<?php echo $row[4]; ?>">
    
    <label for="state" class="form-label">Start</label>
    <input type="text" name="state" class="form-control" value="<?php echo $row[5]; ?>">

    <label for="city" class="form-label">Hobeies</label>
    <input type="text" name="hob" class="form-control" value="<?php echo $row[6]; ?>"> 

    <label for="doj" class="form-label">Doj</label>
    <input type="text" name="doj" class="form-control" value="<?php echo $row[7]; ?>"> 

    <label for="pin" class="form-label">pin</label>
    <input type="text" name="pin" class="form-control" maxlength="6" minlength="6" value="<?php echo $row[8]; ?>">

    <!-- <label for="file" class="form-label">file</label>
    <input type="file" name="file" class="form-control" value="<?php echo $row[9]; ?>"> -->
    
    <label for="gmail" class="form-label">email</label>
    <input type="gmail" name="gmail" class="form-control" value="<?php echo $row[10]; ?>">

   <br> <input type="submit"  value="update"  class="btn btn-primary">

</form>
<?php
}
?>
</div>
</body>
</html>