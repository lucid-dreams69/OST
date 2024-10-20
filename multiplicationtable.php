<html>
<body>
    <form method="POST">
        <h1><b>Multiplication Table</b></h1>
        <h2><b>Input</b></h2>
        X value:
        <input type="number" name="column">
        <br><br>
        Y value:
        <input type="number" name="row">
        <br><br>
        <input type="submit" value="Generate">
        </form>
    
</body>
</html>
<?php
if($_POST){
    $col=$_POST['column'];
    $row=$_POST['row'];
    echo'<h2><b>Output:</b></h2>';
    echo"<b>X value:$col</b><br>";
    echo"<b>Y value:$row</b><br>";
    echo'<table border="4" cellpadding="22">';
    for($r=1;$r<=$row;$r++){
        echo'<tr>';
        for($c=1;$c<=$col;$c++){
            echo sprintf('<td>%d</td>',$c*$r);}
            echo'</tr>';
    }
        echo'</table>';
    }
?>
