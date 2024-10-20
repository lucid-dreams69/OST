<html>
    <body>
        <form method="POST" action="">
            <h1><b>Student Mark Statement</h1>
            <br>
            Enter your name along with marks</b>
            <br><br>
            <table>
                <table border="1">
                    <tr>
                        <td>Name</td>
                        <td><input type="text"name="txtname"></td>
</tr>
<tr>
    <td>Tamil</td>
    <td><input type="text"name="txttamil"></td>
</tr>
<tr>
    <td>English</td>
    <td><input type="text"name="txtenglish"></td>
</tr>
<tr>
    <td>Maths</td>
    <td><input type="text"name="txtmaths"></td>
</tr>
<tr>
    <td>Science</td>
    <td><input type="text"name="txtscience"></td>
</tr>
<tr>
<td>Social</td>
<td><input type="text"name="txtsocial"></td>
</tr>
<tr><td colspan="2"><center><input type="submit"value="submit"></center></td></tr>
</table>
</form>
</body>
</html>
<?php
if($_POST){
$name=$_POST['txtname'];
$tamil=$_POST['txttamil'];
$eng=$_POST['txtenglish'];
$maths=$_POST['txtmaths'];
$sci=$_POST['txtscience'];
$soc=$_POST['txtsocial'];
echo"<b>Name:</b>$name<br>";
echo"<b>Marks Details</b><br>";
echo"Tamil:$tamil<br>";
echo"English:$eng<br>";
echo"Maths:$maths<br>";
echo"Science:$sci<br>";
echo"Social:$soc<br>";
$total=$tamil+$eng+$maths+$sci+$soc;
echo"Total marks:$total<br><br>";
$per=$total/5;
echo"Percentage:$per%<br><br>";
if($tamil<=34||$eng<=34|| $maths<=34|| $sci<=34|| $soc<=34)
{
    echo"Grade:Fail";
}
else if($tamil>=34||$eng>=34|| $maths>=34|| $sci>=34|| $soc>=34)
{
    if($per<="100" && $per>="90")
    {
        echo"Grade:A";

    }
    else if($per<="89" && $per>="70")
    {
        echo"Grade:B";
    }
    else if($per<="69" && $per>="50")
    {
        echo"Grade:C";
    }
    else if($per<="49" && $per>="35")
    {
        echo"Grade:D";

    }
}
}

?>




