<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-eqipv="X-UA-Compatible" content="IE=Edge">
    <title>Belajar</title>
</head>
<body>
    <h1>Yo</h1>
    <?php
        $varBaru = "Evans";
        $var = "12223";
        $var1 = 12223;
        $var2 = 1221;
        $var2 += 4; 
        $var3 = 5;
        $var4 = 10;
        $cars = array("Volvo", "BMW", "Toyota");
    ?>
    <?php 
        echo "Hello, nama saya ".$varBaru."<br>"; 
        echo "\r\nHello $var"."<br>";
        echo "$var1 - $var2 = ".($var1 - $var2) ."<br>";
        echo "$var1 % $var2 = ".($var1 % $var2) ."<br>";
        echo "$var1 ** $var2 = ".($var1** $var2) ."<br>";
        echo "$var1 %= $var2 = ".($var1 %= $var2) ."<br>";
        echo "$var1 == $var2 = ".($var1 == $var2 ? 'True' : 'False') ."<br>";

        //testing if
        if ($var1 > 1000){
            echo "var1 is above 1000<br>";
        }else{
            echo "var1 is below 1000<br>";
        }

        //testing switch
        echo "testing switch<br>";
        switch($var4){
            case 5:
                echo "5";
                break;
            case 10:
                echo "10";
                break;
            default:
                echo "kamu siapa?";
        }
        echo "<br>";
    ?>


    <?php echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; ?>
</body>
</html>
