<html>
<head>
    <title>Database Program</title>
</head>
<body>
    <h2>Database Program</h2>
    <form method="POST">
        Select an Option:
        <input type="radio"name="data"value="createtable">Create Table
        <input type="radio"name="data"value="insertdata">Insert Data
        <input type="radio"name="data"value="droptable">Drop Table
        <br><br>
        <input type="submit"name="submit"value="Submit">
    </form>
</body>
</html>
<?php
$mysqli=new mysqli("localhost","root","","demo");
if($mysqli==false)
{

die("ERROR: Could not connect. ".$mysqli->connect_error);
}
if(isset($_POST['data']))
{
    $data=$_POST['data'];
    if($data=='createtable')
    {
        echo"<h2>Creating Table</h2>";
        $sql="CREATE TABLE MyGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if($mysqli->query($sql)===TRUE)
        {
            echo"Table created successfully";
        }
        else
        {
            echo"Error creating table:". $mysqli->error;
        }
    }
    elseif($data=='insertdata')
    {
        echo"<h2> Inserting Data</h2>";
        $sql="INSERT INTO MyGuests(firstname,lastname,email)
        VALUES('John','Doe','john@example.com');";
        $sql.="INSERT INTO MyGuests(firstname,lastname,email)
        VALUES('Mary','Moe','mary@example.com');";
        $sql.="INSERT INTO MyGuests(firstname,lastname,email)
        VALUES('Julie','Dooley','julie@example.com')";
        if($mysqli->multi_query($sql)===TRUE){
            echo"New records created successfull";
        }else{
            echo"Error:".$sql."<br>".$mysqli->error;
        }
        
    }
    elseif($data=='droptable')
    {
        echo"<h2> Dropping table</h2>";
        $sql="DROP TABLE MyGuests";
        if($mysqli->query($sql)===true)
        {
            echo "Database dropped successfully";
        }
        else{
            echo"ERROR: Could not able to execute $sql.".$mysqli->error;
        }
    }
    $mysqli->close();
}
else{
    echo "You must enter an option";
}
