<?php
require_once "Lingkarang.php";
require_once "PersegiPanjang.php";
require_once "Segitiga.php";

$lingkaran = new Lingkaran(7);
$persegiPanjang = new PersegiPanjang(10, 5);
$segitiga = new Segitiga(6, 4);

$heads = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
$bidang = [$lingkaran, $persegiPanjang, $segitiga];
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pewarisan</title>
</head>

<body>

   <table border="1" cellpadding=15 cellspacing=1 style="margin-left: auto; margin-right: auto; margin-top: 5rem;">
      <thead>
         <tr>
            <?php foreach ($heads as $head) : ?>
               <th><?= $head ?></th>
            <?php endforeach ?>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($bidang as $value) { ?>
            <tr>
               <td><?= $no ?></td>
               <td><?= $value->namaBidang() ?></td>
               <td><?= $value->keterangan() ?></td>
               <td><?= $value->luasBidang() ?></td>
               <td><?= $value->kelilingBidang() ?></td>
            </tr>
         <?php $no++;
         } ?>
      </tbody>
   </table>

</body>

</html>