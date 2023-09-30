<?php
require_once "KonversiSuhu.php";

$dataKonversiSuhu1 = new KonversiSuhu("celcius", 15, "fahrenheit");
$dataKonversiSuhu2 = new KonversiSuhu("celcius", 32, "fahrenheit");
$dataKonversiSuhu3 = new KonversiSuhu("celcius", 15, "rheamur");
$dataKonversiSuhu4 = new KonversiSuhu("celcius", 30, "rheamur");
$dataKonversiSuhu5 = new KonversiSuhu("rheamur", 15, "celcius");
$dataKonversiSuhu6 = new KonversiSuhu("rheamur", 44, "celcius");
$dataKonversiSuhu7 = new KonversiSuhu("fahrenheit", 66, "celcius");
$dataKonversiSuhu8 = new KonversiSuhu("fahrenheit", 86, "celcius");

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 5</title>
</head>

<body>
   <table border="1" cellpadding=10 cellspacing=1 style="margin-left: auto; margin-right: auto; margin-top: 3rem;">
      <thead>
         <tr>
            <th>
               Satuan Suhu Awal
            </th>
            <th>
               Besaran Suhu
            </th>
            <th>
               Satuan Suhu Tujuan
            </th>
            <th>
               Hasil Konversi
            </th>
         </tr>
      </thead>

      <tbody>
         <?= $dataKonversiSuhu1->cetak() ?>
         <?= $dataKonversiSuhu2->cetak() ?>
         <?= $dataKonversiSuhu3->cetak() ?>
         <?= $dataKonversiSuhu4->cetak() ?>
         <?= $dataKonversiSuhu5->cetak() ?>
         <?= $dataKonversiSuhu6->cetak() ?>
         <?= $dataKonversiSuhu7->cetak() ?>
         <?= $dataKonversiSuhu8->cetak() ?>
      </tbody>
   </table>
</body>

</html>