<?php
$m1 = ['nim' => '0111111', 'nama' => 'Andi Setyo', 'nilai' => 95];
$m2 = ['nim' => '0111112', 'nama' => 'Rafael', 'nilai' => 80];
$m3 = ['nim' => '0111113', 'nama' => 'Ali Hakim', 'nilai' => 78];
$m4 = ['nim' => '0111114', 'nama' => 'Ari', 'nilai' => 76];
$m5 = ['nim' => '0111115', 'nama' => 'Ani', 'nilai' => 86];
$m6 = ['nim' => '0111116', 'nama' => 'Aji', 'nilai' => 50];
$m7 = ['nim' => '0111117', 'nama' => 'Budi Santoso', 'nilai' => 20];
$m8 = ['nim' => '0111118', 'nama' => 'Chandra', 'nilai' => 30];
$m9 = ['nim' => '0111119', 'nama' => 'Dewi', 'nilai' => 70];
$m10 = ['nim' => '0111110', 'nama' => 'Elisa', 'nilai' => 65];

$ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$nilaiMahasiswa = array_column($mahasiswa, "nilai");
$nilaiTertinggiMahasiswa = max($nilaiMahasiswa);
$nilaiTerendahMahasiswa = min($nilaiMahasiswa);
$nilaiTotal = array_sum($nilaiMahasiswa);
$jumlahMahasiswa = count($mahasiswa);
$nilaiRata_rata = $nilaiTotal / $jumlahMahasiswa;

$keterangan = [
   "Nilai Tertinggi" => $nilaiTertinggiMahasiswa,
   "Nilai Terendah" => $nilaiTerendahMahasiswa,
   "Nilai Rata-rata" => $nilaiRata_rata,
   "Jumlah Mahasiswa" => $jumlahMahasiswa,
   "Total Nilai Mahasiswa" => $nilaiTotal
];

$num = 0;
foreach ($mahasiswa as $mhs) {

   $nilai = $mhs["nilai"];

   //Lulus atau tidak
   $mahasiswa[$num]["keterangan"] = $nilai < 60 ? "Tidak Lulus" : "Lulus";

   //Menentukan Grade Mahasiswa
   if ($nilai >= 90) {
      $mahasiswa[$num]["grade"] = "A";
   } else if ($nilai >= 80) {
      $mahasiswa[$num]["grade"] = "B";
   } else if ($nilai >= 70) {
      $mahasiswa[$num]["grade"] = "C";
   } else if ($nilai >= 60) {
      $mahasiswa[$num]["grade"] = "D";
   } else {
      $mahasiswa[$num]["grade"] = "E";
   }

   //Melakukan Predikat Mahasiswa
   $grade = $mahasiswa[$num]["grade"];
   switch ($grade) {
      case 'A':
         $mahasiswa[$num]["predikat"] = "Sangat Baik";
         break;
      case 'B':
         $mahasiswa[$num]["predikat"] = "Baik";
         break;
      case 'C':
         $mahasiswa[$num]["predikat"] = "Cukup";
         break;
      case 'D':
         $mahasiswa[$num]["predikat"] = "Kurang";
         break;
      case 'E':
         $mahasiswa[$num]["predikat"] = "Gagal";
         break;
   }

   $num++;
}

$num = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <table border="1" cellpadding=10 cellspacing=1 style="margin-left: auto; margin-right: auto;">

      <thead>
         <tr>
            <?php foreach ($ar_judul as $judul) { ?>
               <th><?= $judul ?></th>
            <?php } ?>
         </tr>
      </thead>

      <tbody>
         <?php foreach ($mahasiswa as $mhs) { ?>
            <tr>
               <td><?= $num ?></td>
               <td><?= $mhs["nim"] ?></td>
               <td><?= $mhs["nama"] ?></td>
               <td><?= $mhs["nilai"] ?></td>
               <td><?= $mhs["keterangan"] ?></td>
               <td><?= $mhs["grade"] ?></td>
               <td><?= $mhs["predikat"] ?></td>
               <?php $num++; ?>
            </tr>
         <?php } ?>
      </tbody>

      <tfoot>
         <?php foreach ($keterangan as $key => $value) { ?>
            <tr>
               <td colspan="4">
                  <?= $key ?>
               </td>
               <td colspan="3" align="center">
                  <?= $value ?>
               </td>
            </tr>
         <?php } ?>
      </tfoot>

   </table>
</body>

</html>