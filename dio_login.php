<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/dio_style.css">
    <link rel="stylesheet" href="assets/css/dio_grid.css">
</head>
<body>
<?php include("dio_header.php") ?>
<form method="post" action="dio_ceklog.php">
<div class="bg-img" data-stellar-background-ratio="0.5">
  <div class="container">
    <h1>Login</h1>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </div>
</div>
</form>

<?php include("dio_footer.php") ?>
</body>
</html>