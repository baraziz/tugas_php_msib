<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

   <div class="container mt-4">

      <form action="" method="post" class="border rounded-3 p-3 bg-body-tertiary">

         <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
         </div>
         <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <select class="form-select" id="pekerjaan" name="pekerjaan" aria-label="Default select example">
               <option selected disabled>Open this select menu</option>
               <option value="1">Pekerjaan 1</option>
               <option value="2">Pekerjaan 2</option>
               <option value="3">Pekerjaan 3</option>
               <option value="4">Pekerjaan 4</option>
               <option value="5">Pekerjaan 5</option>
               <option value="6">Pekerjaan 6</option>
               <option value="7">Pekerjaan 7</option>
               <option value="8">Pekerjaan 8</option>
               <option value="9">Pekerjaan 9</option>
               <option value="10">Pekerjaan 10</option>
            </select>
         </div>
         <div class="mb-3 border rounded-3 bg-body-secondary bg-opacity-50">
            <label for="" class="form-label ms-3 mt-1">Hobi</label>
            <div class="px-3 pb-3">
               <div class="row">
                  <div class="col">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault1" value="1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           Hobi 1
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault2" value="2">
                        <label class="form-check-label" for="flexRadioDefault2">
                           Hobi 2
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault3" value="3">
                        <label class="form-check-label" for="flexRadioDefault3">
                           Hobi 3
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault4" value="4">
                        <label class="form-check-label" for="flexRadioDefault4">
                           Hobi 4
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault5" value="5">
                        <label class="form-check-label" for="flexRadioDefault5">
                           Hobi 5
                        </label>
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault6" value="6">
                        <label class="form-check-label" for="flexRadioDefault6">
                           Hobi 6
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault7" value="7">
                        <label class="form-check-label" for="flexRadioDefault7">
                           Hobi 7
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault8" value="8">
                        <label class="form-check-label" for="flexRadioDefault8">
                           Hobi 8
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault9" value="9">
                        <label class="form-check-label" for="flexRadioDefault9">
                           Hobi 9
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="hobi" id="flexRadioDefault10" value="10">
                        <label class="form-check-label" for="flexRadioDefault10">
                           Hobi 10
                        </label>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="container text-center">
            <input class="btn btn-primary col-2" name="submit" type="submit" value="Submit">
         </div>

      </form>

   </div>

   <?php if (isset($_POST['submit'])) : ?>
      <?php
      $nama = $_POST["nama"];
      $pekerjaan = $_POST["pekerjaan"];
      $hobi = $_POST["hobi"];
      ?>

      <div class="container my-5 border rounded-3 col-9">
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Hobi</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><?= $nama ?></td>
                  <td><?= $pekerjaan ?></td>
                  <td><?= $hobi ?></td>
               </tr>
               <tr>
            </tbody>
         </table>
      </div>
   <?php endif ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>