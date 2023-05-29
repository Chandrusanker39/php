<?php
$server="localhost";
$uname="root";
$password="";
$db="ns";
$con=mysqli_connect($server,$uname,$password,$db) or die("connect connected");
$id=$_POST['id'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$addr=$_POST['addr'];
$gen=$_POST['gen'];
$state=$_POST['state'];
$hob=$_POST['hob'];
$doj=$_POST['doj'];
$pin=$_POST['pin'];
// $fname=$_FILES['file']['name'];
// $tmpf=$_FILES['file']['tmp_name'];
// $fsize=$_FILES['file']['size'];
// $fdir="file/";
// $fpath=$fdir.$fname;
$gmail=$_POST['gmail'];
// if(move_uploaded_file($tmpf,$fpath))
$query="update sivem set uname='$uname',pass='$pass',rpass='$rpass',addr='$addr',gen='$gen',state='$state',hob='$hob',doj='$doj',pin='$pin',gmail='$gmail' where id=$id";
if($res=mysqli_query($con,$query))
{
    echo "<script>alert('success for update');
         window.location.href='fetch.php';</script>";
}
else
{
    echo "<script>alert('Retry for update');
         </script>";
}
?>