<head>
<title>Dashboard</title>
</head>
<body>
    <h2>Employees Details</h2>
    <?php
    include "config.php";
    $sql="SELECT * FROM employees";
    if($result=$mysqli->query($sql)){
        if($result->num_rows>0){
            echo"<table border=1>";
            echo"<tr>";
            echo"<th>#</th>";
            echo"<th>Name</th>";
            echo"<th>Address</th>";
            echo"<th>Salary</th>";
            echo"<th>Action</th>";
            echo"</tr>";
            while($row=$result->fetch_array()){
                echo"<tr>";
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['name']."</td>";
                echo"<td>".$row['address']."</td>";
                echo"<td>".$row['salary']."</td>";
                echo"<td>";
                echo"<a href='read.php?id=".$row['id'].'">Read</a>";
                echo"<a href='update.php?id=".$row['id'].'">Update</a>";
                echo"<a href='delete.php?id=".$row['id'].'">Delete</a>";
                echo"</td>";
                echo"</tr>";
            }
            echo"</table>";
            echo"<a href=çreate.php'>Add New Employee</a>";
            $result->free();
        }
        else{
            echo"<p>No records were found.</p>";
        }
    }
    else{
        echo"ERROR:Could not able to execute $sql.".$mysqli->error;
    }
        $mysqli->close();
        ?>
</body>
</html>
