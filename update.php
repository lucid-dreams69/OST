<?php
include"config.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $id=$_POST["id"];
    $input_name=$_POST["name"];
    $name=$input_name;
    $input_address=$_POST["address"];
    $address=$input_address;
    $input_salary=$_POST["salary"];
    $salary=$input_salary;
    $sql="UPDATE employees SET name=?,address=?,salary=?WHERE id=?";
    if($stmt=$mysqli->prepare($sql)){
        $stmt->bind_param("sssi",$param)
    }
}