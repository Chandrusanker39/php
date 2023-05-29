<?php
$server="localhost";
$uname="root";
$pass="";
$db="ns";
$con=mysqli_connect($server,$uname,$pass,$db) or die("cont connected datbase");
$id=$_GET['id'];
$query="delete from sivem where id=$id";
if($res=mysqli_query($con,$query))
{
    echo "<script> alert('deleted data'); 
    window.location.href='fetch.php';
    </script>" ;
}
else
{
    echo "<script> alert('delete field !'); 
    window.location.href='delete.php';
    </script>";
}
?>