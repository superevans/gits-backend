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

        class Motor{

        private $nama = 'Brian Abraham'; // buat public property

        public function jalan() { // buat public method
            return $this->nama;
        }
        }

        $aksi_motor = new Motor(); // buat objek dari class motor (instansiasi)

        echo $aksi_motor->jalan(); // jalankan method dari class motor
    ?>

</body>
</html>
