<html>
    <body>
        <?php
        echo"<h2>String Operation</h2>";
        $str="Welcome to PHP Programming";
        echo"Length of the String is:".strlen($str)."<br/>";
        echo"Number of words in the Sting are:" .str_word_count($str)."<br/>";
        echo"Reverse:".strrev($str)."<br/>";
        echo"Position of PHP Programming'in String:".strpos($str,'PHP Programming')."<br/><br/>";
        $str=str_replace("PHP Programming","PHP Programming.com","Welcome to PHP Programming"."<br/>");
        echo $str;
        echo strtoupper($str);
        echo ucwords($str);
        echo strtolower($str);
        echo"<br><br>";
        $str="PHP Programming";
        echo str_repeat($str, 4);
        echo"<br><br>";
        $str1="PHP Programming";
        $str2="PHP Programming.com";
        echo strcmp($str1,$str2);
        echo"<br>";
        echo strcmp($str2,$str1);
        echo"<br>";
        echo strcmp($str1,$str1);
        echo"<br><br>";
        $str="Welcome to PHP Programming";
        echo substr($str,0,7);
        echo"<br><br>";
        $str1="  Hello World  ";
        echo trim($str1)."<br/>";
        echo "<br>";
        $str2="Hello! Hello";
        echo trim($str2,"Hel");
        echo "<br>";
        $str="It's a beautiful day";
        print_r(explode(" ",$str));
        echo"<br>";
        $arr=array("It's","a","beautiful","day");
        echo implode(" ",$arr)."<br>";
        echo implode("-",$arr)."<br>";
        echo implode("/",$arr)."<br>";
        echo nl2br("It's a\nbeautiful day");
        echo "<br>";
        $string1="Hello World";
        $string2="1234";
        echo $string1." ".$string2;
        echo"<br>";
        ?>
    </body>
    </html>