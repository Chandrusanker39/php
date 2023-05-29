<?php
session_start();

?>
<?php
$server="localhost";
$duname="root";
$pass="";
$db="ns";
$con=mysqli_connect($server,$duname,$pass,$db)or die("not connected");
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$query="select * from sivem where uname='$uname'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
           if($row['pass']==$pass)
           {
            echo "<script>alert('Login Successful');</script>";     
            }
           else
           {
            echo "<script>alert('Login Unsuccessful');</script>";;
           }
}
else
{
    
    echo" <script>alert('invalied data'); 
	window.location.href='login.html';
	</script>";
   
}

?>
<html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	
	<!-- <div class="container">
		<div class="row-12">
			<div class="col"> -->
<form target="_blank">
	<table class="table table-bordered table-hover ">
		<thead class="table-dark">
			    <th>Id</th>
				<th>firstname</th>
				<th>pass</th>
				<th>rpass</th>
				<th>addr</th>
				<th>gen</th>
				<th>cuntry</th>
				<th>hob</th>
				<th>doj</th>
				<th>pin</th>
				<th>file</th>
				<th>gmail</th>
				<th>update</th>
				<th>delete</th>
				</thead>
<tbody class="table bg-primary"> 
<?php
$server="localhost";
$uname="root";
$pwd="";
$db="ns";
$con=mysqli_connect("$server","$uname","$pwd","$db")or die("db not connected");
$unamef=$_POST['uname'];
$que="select * from sivem where uname='$unamef' and pass='$pass'";
$res=mysqli_query($con,$que);
while($row=mysqli_fetch_array($res))
{
	$id=$row[11];
	echo"<tr>";
    echo"<td>".$row[11]."</td>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	echo"<td>".$row[3]."</td>";
	echo"<td>".$row[4]."</td>";
	echo"<td>".$row[5]."</td>";
	echo"<td>".$row[6]."</td>";
	echo"<td>".$row[7]."</td>";
	echo"<td>".$row[8]."</td>";
	echo"<td>".$row[9]."</td>";
	echo"<td>".$row[10]."</td>";
	echo"<td> <a href='update_data.php?id=$id' class='btn btn-warning'>Update</a></td>";
    echo"<td> <a href='delete.php?id=$id' class='btn btn-danger'>Drop</a></td>";
	echo"</tr>";
}
?>
</form>
</tbody>
</tabel>
</html>
