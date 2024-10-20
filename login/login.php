 <html>
    <head>
        <title>User Login</title>
        </head>
        <body>
            <form method="post"action="login.php"align="center">
                <h3 align="center">Enter Login Details</h3>Username:
                <input type="text"name="username">
                <br><br>
                Password:
                <input type="password"name="password">
                <br><br>
                <input type="submit"name="submit"value="Submit"><input type="reset">
            </form>
        </body>
        </html>
        <?php
        session_start();
        if(count($_POST)>0){
            $con=mysqli_connect('localhost','root','','login') or die('Unable To connect');
            $result=mysqli_query($con,"SELECT * FROM loginuser WHERE username='".$_POST["username"]."'and password='".$_POST["password"]."'");
            $row=mysqli_fetch_array($result);
            if(is_array($row)){
                $_SESSION["id"]=$row['id'];
                $_SESSION["name"]=$row['name'];
            }
            else{
                echo"Invalid Username of Password!";
            }
        }
        if(isset($_SESSION["id"]))
        {
            header("Location:welcome.php");
        }
        ?>
       