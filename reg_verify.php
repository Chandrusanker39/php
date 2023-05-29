<?php
$server="localhost";
$uname="root";
$passw="";
$db="ns";
$con=mysqli_connect($server,$uname,$passw,$db) or die("con't connect for database");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$nam=$fname.$lname;
$pass1=$_POST['pass'];
// $pass=sha1($pass1);
$rpass1=$_POST['rpass'];
// $rpass=sha1($rpass1);
// $mother=$_POST['mother'];
$addr=$_POST['addr'];   
$gen=$_POST['gen'];
$state=$_POST['state'];
$hob=$_POST['hob'];
$doj=$_POST['doj'];
$pin=$_POST['pin'];
$fname=$_FILES['fil']['name'];
$tmpf=$_FILES['fil']['tmp_name'];
$fsize=$_FILES['fil']['size'];
$fdir="file/";
$fpath=$fdir.$fname;
$gmail=$_POST['email'];
$id=$_POST['id'];
// $hob=$_POST['hob'];



if(move_uploaded_file($tmpf,$fpath))

$query="insert into sivem values('$nam','$pass1','$rpass1','$addr','$gen','$state','$hob','$doj','$pin','$fpath','$gmail','$id')";


if($res=mysqli_query($con,$query))
{
  echo"<script>alert('success');
  window.location.href='reg.html';
  </script>";
}
else
{
    echo"<script>alert('unsuccess');       
    </script>";
}

?>