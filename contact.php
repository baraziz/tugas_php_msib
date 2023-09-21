<?php

$email = "baharudinaziz483@gmail.com";
$noTelp = "+62 8xx 36xx xxxx";

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

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
                  <a class="nav-link" aria-current="page" href="profile.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link " href="portofolio.php">Portofolio</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="contact.php">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container my-4">
      <form action="" class="border rounded-3 p-4 bg-body-tertiary">
         <div class="row">

            <div class="col bg-primary-subtle border rounded-start">
               <h3 class="mb-4 mt-1">Contact Information</h3>

               <div class="form-floating mb-3">
                  <input type="email" class="form-control" placeholder="name@example.com" value="<?= $email ?>" disabled>
                  <label for="floatingInputDisabled">Email address</label>
               </div>

               <div class="form-floating mb-3">
                  <input type="text" class="form-control" placeholder="name@example.com" value="<?= $noTelp ?>" disabled>
                  <label for="floatingInputDisabled">No. Telp</label>
               </div>

            </div>

            <div class="col-8 border-2 border-start">
               <h3 class="mb-4 mt-1">Contact Us</h3>

               <div class="row mb-3 mx-auto border rounded-3 p-2">
                  <label for="" class="mb-1">Name</label>
                  <div class="col">
                     <label for="exampleFormControlInput1" class="form-label">First</label>
                     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                  </div>
                  <div class="col">
                     <label for="exampleFormControlInput1" class="form-label">Last</label>
                     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                  </div>
               </div>

               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
               </div>

               <div class="text-end mt-5">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit">
               </div>
            </div>
         </div>

      </form>
   </div>

   <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>