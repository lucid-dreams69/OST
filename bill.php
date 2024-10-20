<html>
<head>
    <title> Electricity Bill Calculator</title>
    <style>
        .input{
            outline:none;
            border:1px solid Red;
        }
        </style>
        </head>
        <?php
        $fc=$ec=$total="";
        if($_POST){
            $pr=$_POST['pr'];
            $cr=$_POST['cr'];
            $units=$cr-$pr;
            if($units<=100){
                $fc=0;
                $ec=$units*1.50;
                $total=($fc+$ec)-150;
            }
            else if($units<=500){
                $fc=30;
                $temp=(100*1.5)+(100*2);
                $ru=$units-300;
                $ec=$temp+($ru*3);
                $total=($fc+$ec)-150;
            }
            else if($units>500)
            {
                $fc=50;
                $temp=(100*1.5)+(100*3.5)+(300*4.6);
                $ru=$units-500;
                $ec=$temp+($ru*6.6);
                $total=($fc+$ec)-150;
            }
        }
        ?>
        <body bgcolor="Aqua">
            <form method="POST">
    <center>
        <h1><b>Electricity Bill(EB) Calculator</h1></b>
        <br>
        <b><h3>Electricity Bill Calculation</h3><b>
            <br><div style="width:500px;height:230;border:5px solid DarkBlue;background-color:MediumSlateBlue">
                <pre>
                    Enter previous Reading:<input type="number"name="pr">
                    Enter Current Reading:<input type="number"name="cr">
                    Fixed Charges:<input type="text" name="fc" value="<?php echo $fc ?>"class="input" readonly>
                    Energy Calculation:<input type="text" name="ec"value="<?php echo $ec ?>"class="input" readonly>
                        Total:<input type="text"name="total"value="<?php echo $total ?>"class="input" readonly>
                        <br><button type="submit"style="background-color:red;border-color:red;color:white;height:30px;width:70px;">Calculate
    </button><button type="reset" style="background-color:black;border-color:black;color:white;height:30px;width:70px;">Reset</button></div>
    </pre>
    </center>
    </form>
    </body>
    </html>