<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="ns">
    <table class="table">
        <thead class="table-dark">
            <td>Id</td>
            <td>Name</td>
            <td>pass</td>
            <td>Repass</td>
            <td>Add</td>
            <td>Gender</td>
            <td>Start</td>
            <td>Cuntry</td>
            <td>Doj</td>
            <td>Pin</td>
            <td>File</td>
            <td>gamil</td>
            <td>Update</td>
            <td>Delete</td>
        </thead>
        <tbody class="table-primary">
            <?php
            $server="localhost";
            $uname="root";
            $password="";
            $db="ns";
            $con=mysqli_connect($server,$uname,$password,$db) or die("connect connected");
            $query="Select * from sivem";
            $res=mysqli_query($con,$query);
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
                echo"<td> <a href='update_data.php?id=$id' class='btn btn-primary'>Update</a></td>";
                echo"<td> <a href='delete.php?id=$id' class='btn btn-danger'>Drop</a></td>";
                echo"</tr>";
            }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

