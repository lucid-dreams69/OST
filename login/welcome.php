<html>
<head>
    <title>Welcome Login</title>
</head>
<h1>Welcome Page</h1>
<body>
    <?php
    session_start();
    if($_SESSION["name"]){
        ?>
        Welcome<?php echo $_SESSION["name"];?>.Click here to <a href="logout.php">Logout.
            <?php
    }
    else echo"<h1>Please login first</h1>";
    ?>
    </body>
    </html>

    
    
