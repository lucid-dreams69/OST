<html>
<head>
    <title>Database Program</title>
</head>
<body>
    <h2>Database Program</h2>
    <form method="POST">
        Select an Option:
        <input type="radio"name="data"value="createdatabase">Create Database
        <input type="radio"name="data"value="selectdatabase">Select Database
        <input type="radio"name="data"value="dropdatabase">Drop Database
        <br><br>
        <input type="submit"name="submit"value="Submit">
    </form>
</body>
</html>
<?php
$mysqli=new mysqli("localhost","root","")or die("ERROR: Could not connect. ".$mysqli->connect_error);
if(isset($_POST['data']))
{
    $data=$_POST['data'];
    if($data=='createdatabase')
    {
        echo"<h2>Creating Database</h2>";
        $sql="CREATE DATABASE demo";
        if($mysqli->query($sql)===true)
        {
            echo"Database created successfully";
        }
        else
        {
            echo"ERROR: Could not able to excute $sql.".$mysqli->error;
        }
    }
    elseif($data=='selectdatabase')
    {
        echo"<h2> Selecting Database</h2>";
        $mysqli->select_db("demo");
        if($result=$mysqli->query("SELECT DATABASE()"))
        {
            $row=$result->fetch_row();
            echo "The database name is".$row[0];
            $result->close();
        }
    }
    elseif($data=='dropdatabase')
    {
        echo"<h2> Dropping Database</h2>";
        $sql="DROP DATABASE demo";
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
