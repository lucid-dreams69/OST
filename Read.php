<?php
include"config.php";
echo"<h2>View Record</h2>";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT*FROM employees WHERE id=?";
    if($stmt=$mysqli->prepare($sql)){
        $stmt->bind_param("i",$param_id);
        $param_id=$id;
        if($stmt->execute()){
            $result=$stmt->get_result();
            if($result->num_rows==1){
                $row=$result->fetch_array();
                $name=$row["name"];
                $address=$row["address"];
                $salary=$row["salary"];
                echo"<table border=1>";echo"<tr>";
                echo"<th>#</th>";
                echo"<th>Name</th>";
                echo"<th>Address</th>";
                echo"<th>Salary</th>";
                echo"<th>Action</th>";
                echo"</tr>";echo"<tr>";
                echo"<td>".$row['id']."</td>"; 
                echo"<td>".$row['name']."</td>";
                echo"<td>".$row['address']."</td>";
                echo"<td>".$row['salary']."</td>";
                echo"<td>";
                echo"<a href='index.php?id=".$row['id']."'>Back</a>";
                echo"</td>";
                echo"</tr>";
                echo"</table>";   
            }
        }else{
            echo"Oops!Something went wrong.Please try again later.";
        }
    }
    $smt->close();
    $mysqli->close();
}
?>
