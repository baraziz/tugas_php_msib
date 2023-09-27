<?php
function cekLogin($username, $password)
{
   if ($username == "admin" && $password == "mimin") {
      header("Location: login.php?user=\"masuk\"");
      exit();
   } else {
      echo '<div class="alert alert-danger" role="alert">
            Username atau Password Salah
            </div>';
   }
}

if (isset($_POST["submit"])) {
   cekLogin($_POST["username"], $_POST["password"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

   <div class="container">
      <form class="mt-4 border rounded-3 p-4 px-5 bg-secondary-subtle" action="" method="post">
         <h3 class="text-center mt-4">LOGIN</h3>
         <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
         </div>
         <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
         </div>

         <input class="btn btn-primary mb-4" type="submit" value="Login" name="submit">
      </form>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>