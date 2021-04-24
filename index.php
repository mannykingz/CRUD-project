<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-BmbxuPwQa21c/FVzBcNJxM6wUqIj61tLrc4wSX0szH/Ev+nYRRuWlo
  lflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
     <div class="d-flex justify-content-center
          align-items-center flex-column" style="min-height: 100vh;">
          <i class="bi bi-person-fill" style="font size: 14rems"></i>
          <hl class="text-center display-4" style="margin-top: -70px;font-size: 2rem"><?$_SESSION['user_full_name']?></hl>
          <a href="logout.php" class=btn-btn warning>LOGOUT</a>

     </div>
</body>
</html>
<?php
}else {
    header("Location: login.php");
}
?>
