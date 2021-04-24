<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SECURE-LOGIN-SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-BmbxuPwQa21c/FVzBcNJxM6wUqIj61tLrc4wSX0szH/Ev+nYRRuWlo
  lflfl" crossorigin="anonymous">

</head>
<body>
<div class="d-flex justify-content-center
          align-items-center flex-column" style="min-height: 100vh;">
    <form class="p-5 rounded shadow" 
          action="auth.php"
          method="post"
          style="width: 30rem">
    <hl class="text-center pb-5 display-4">
    LOGIN</hl>
    <?PHP if (isset($_GET['error'])) { ?>
    <div class="alert alert-danger" role="alert">
      <?=$_GET['error']?>
    </div>
    <?php } ?>
    <div class="mb-3">
        <label for="exampleInputEmail1"
               class="form-label">Email address<br><br. 
        </label>
    <input type="email"
           name="email" 
           class="form-control" 
           id="exampleInputEmail1"  
           aria-describedby="emailHelp"><br><br>
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" 
           class="form-label">Password<br><br>
      </label>
    <input type="password"
           class="form-control"  
           name="password"
           id="exampleInputPassword1"><br><br>
    </div>
    <button type="submit"
            class="btn btn-primary">LOGIN
    </button>
</form>
    </div>
</body>
</html>
<?php
}else {
    header("Location: index.php");
}
?>



