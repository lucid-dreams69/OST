<html>
    <body>
        <form action="sortarray.php" method="POST">
            <h1>Sorting array</h1>
            How many TextBoxes you want to appear:
            <input type="text"name="howmany"/><br><input type=submit value="Get Textbox" name=submit>
        </form>
        <?php
        if(isset($_POST['howmany']))
        {
            $howmany=$_POST['howmany'];
            echo'<form method="POST">';
                for($i=0;$i<$howmany;$i++)
                {
                    echo"Array[$i]:<input type=text name=myarray[$i]><br/>";
                
                }
                echo'<input type="submit"name=text></form>';            
            }?>
        
    </body>
    </html>
    <?php
    if(isset($_POST['myarray'])){
        $myarray=$_POST['myarray'];
        echo'<h3>Original array</h3>';
        echo"<pre>".print_r($myarray,true)."</pre>";
        echo"<br><br><h3>Sorted Array</h3>";
        implode(bubbleSort($myarray));
    }
    function bubbleSort($myarray)
    {
        do{
            $swapped=false;
            for($i=0,$c=count($myarray)-1;$i<$c;$i++)
            {
                if($myarray[$i]>$myarray[$i+1])
                {
                    list($myarray[$i+1],$myarray[$i])=array($myarray[$i],$myarray[$i+1]);
                    $swapped=true;
                }
            }
    }
    while($swapped);
    echo"<pre>".print_r($myarray,true)."</pre>";
    return $myarray;
    }
    ?>