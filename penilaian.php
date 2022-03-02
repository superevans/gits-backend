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
        $var = 70;
    ?>
    <?php 
        //if
        if ($var >= 80 and $var <=100){
            echo "Nilai Anda A";
        }else if ($var >= 60){
            echo "Nilai Anda B";
        }else{
            echo "Nilai Anda C";
        }
    ?>
</body>
</html>
