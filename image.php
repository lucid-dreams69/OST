<html>
    <head>
<title>Image Upload</title>
</head>
<body>
    <h1>Upload and Download Image</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="file"name="uploadfile"/>
        <button type="submit"name="upload">UPLOAD</button>
</form>
    </body>
    </html>
    <?php
    error_reporting(0);
    if(isset($_POST['upload']))
    {
        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder="images/".$filename;
        $db=mysqli_connect("localhost","root","","photos");
        $sql="INSERT INTO images(filename) VALUES('$filename')";
        mysqli_query($db,$sql);
        if(move_uploaded_file($tempname,$folder))
        {
            echo"<div>Image uploaded successfully</div>";
        }
        else{
            echo"<div>Failed to upload image</div>";
        }
    }
    $result=mysqli_query($db,"SELECT * FROM images");
    while($rs=mysqli_fetch_array($result))
    {
        echo"<h3> Downloaded Images</h3>";
        echo"<img src='images/".$rs['filename']."'>";
    }
    ?>