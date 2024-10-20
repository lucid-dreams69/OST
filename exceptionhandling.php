<html>
<body><h2>Function with Exception Handling</h2>
<form method="POST">
    Dividend1:
    <input type="text" name="de1">
    Divisor1:
    <input type="text" name="dr1"><br>
    Dividend2:
    <input type="text" name="de2">
    Divisor2:
    <input type="text" name="dr2"><br>
    Dividend3:
    <input type="text" name="de3">
    Divisor3:
    <input type="text" name="dr3"><br>
    <input type="submit" value="submit">
    </form>
<?php
if($_POST){
    $de1=$_POST['de1'];
    $dr1=$_POST['dr1'];
    $de2=$_POST['de2'];
    $dr2=$_POST['dr2'];
    $de3=$_POST['de3'];
    $dr3=$_POST['dr3'];
    class DivideByZeroException extends Exception{}
    class DivideByNegativeNoException extends Exception{}
    function checkdivisor($dividend,$divisor){
        try{
            if($divisor==0){
                throw new DivideByZeroException;
            }
            else if($divisor<0){
                throw new DivideByNegativeNoException;
            }
            else{
                $result=$dividend/$divisor;
                echo "<h1><b>Output:</b></h1>";
                echo"Result of divison=$result<br>";
            }
        }
        catch(DivideByNegativeNoException $dnne){
            $result=$dividend/$divisor;
            echo"Result of divison=$result<br>";
            echo "Divide by Negative Number Exception<br>";
        }
        //catch(DivideByZeroError $ex){
           // echo"Divide By Zero Error<br>";
        //}
        catch(Exception $ex){
            echo "Unknown Exception";
        }
    }
    checkdivisor($de1,$dr1);
    checkdivisor($de2,$dr2);
    checkdivisor($de3,$dr3);
}
?>
    </body>
    </html>