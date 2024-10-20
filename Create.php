<?php
include"config.php";
echo"<h2>Inserting Data</h2>";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $address=$_POST["address"];
    $salary=$_POST["salary"];
    $sql="INSERT INTO employees(name,address,salary)VALUES('$name','$address','$salary')";
    if($stmt=$mysqli->prepare($sql)){
        $stmt->bind_param($param_name,$param_address,$param_salary);
        $param_name=$name;
        $param_address=$address;
        $param_salary=$salary;
        if($stmt->execute()){
            header("location:index.php");
            exit();
        }
    }
}
?>
<html>
    <head>
        <title>Create Record</title>
</head>
<body>
    <p>Please  fill this form and submit to add employee record to the database.</p>
    <form action="create.php"method="post">
        <label>Name</label>
        <input type="text"name="name">
        <label>Address</label>
        <textarea name="address"></textarea>
        <label>Salary</label>
        <input type="text"name="salary">
        <input type="submit"value="Submit">
        <a href="index.php">Cancel</a>
</form>
</body>
</html>