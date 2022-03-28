<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>view_info</title>
</head>



<form action="search1.php" method="post">
<input type="text" name="search">
<input type="submit" name="submit" value="Search">
</form>





<body>

    
    <div class="container">
        <table class='table'>
            <tr>
                <th>S.No</th>
                <th>FirstName</th>
                <th>MiddleName</th>
                <th>LastName</th>
                <th>CurrentAddress</th>
                <th>PermanentAddress</th>
                <th>PhoneNumber</th>
                
            </tr>
<?php
    $connect= mysqli_connect("localhost","root","","user registration");
    if($_GET){
        $FirstName=$_GET['name'];
        $sql="DELETE FROM users_information WHERE FirstName='$FirstName'";
        $connect->query($sql);
    }
    $sql="SELECT * FROM users_information";
    $result=$connect->query($sql);
    $j=1;
    while($row=mysqli_fetch_array($result)){
        $i=$row['FirstName'];
        echo "<tr>";
            echo "<td>".$j."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['MiddleName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['CurrentAddress']."</td>";
            echo "<td>".$row['PermanentAddress']."</td>";
            echo "<td>".$row['PhoneNumber']."</td>";
            echo "<td class='d-flex'><form action='job application.html' method='get'><input type='hidden' name='row' value='$i'><input type='submit' class='btn btn-primary mx-2' value='Edit'></form><form action='' method='get'><input type='hidden' name='name' value='$i'><input type='submit' class='btn btn-danger mx-2' value='Delete'></form>";
        echo "</tr>";
        $j+=1;
    }
?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>