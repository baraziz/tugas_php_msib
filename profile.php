<?php
$nama = "Baharudin Bariq Aziz";
$universitas = "Universitas Negeri Semarang";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>

<body>

   <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
      <div class="container">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="profile.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="portofolio.php">Portofolio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container mt-4 border p-4 rounded-3 bg-primary-subtle">

      <div class="text-center mb-3">
         <img class="col-3 img-thumbnail" style="height: 325px;" src="https://icon-library.com/images/no-profile-picture-icon/no-profile-picture-icon-12.jpg" alt="">
      </div>

      <div class="col rounded-2 bg-white p-1">
         <p style="text-align: justify; text-justify: inter-word;">
            Perkenalkan Saya <?= $nama ?>. Saya berkuliah di <?= $universitas ?>, Jurusan Ilmu Komputer, prodi Sistem Informasi. Pada semester ini saya mengikuti kegiatan Kampus Merdeka yaitu, MSIB (Magang dan Studi Independen Bersertifikat). Yang mana pada program kali ini saya bermitra dengan PT Hendevane Indonesia dan kelas yang saya ikuti adalah Full-Stack Web Development.
         </p>
      </div>

   </div>

   <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>