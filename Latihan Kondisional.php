<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-eqipv="X-UA-Compatible" content="IE=Edge">
    <title>Belajar</title>
</head>
<body>
    <h1>Penilaian</h1>
    <?php
        $var = 59;
        $var1 = "Mesin Jelek";
        $var2 = "Body Jelek";
    ?>
    <?php 
        //Nilai
        echo "Nilai Time<br>";
        if ($var >= 80 and $var <=100){
            echo "Nilai Anda A";
        }else if ($var >= 60){
            echo "Nilai Anda B";
        }else{
            echo "Nilai Anda C";
        }
        echo "<br><br>";
    ?>
    <?php 
        //Kondisi Mobil
        echo "Kondisi Mobil <br>";
        echo "var1 = $var1, var2 = $var2 <br>";
        if ($var1 == "Mesin Bagus" and $var2 == "Body Bagus"){
            echo "Kondisi Mobil Bagus";
        }else if ($var1 == "Mesin Bagus" or $var2 == "Body Bagus"){
            echo "Kondisi Mobil Menengah";
        }else{
            echo "Kondisi Mobil Jelek";
        }
    ?>
</body>
</html>
