<?php 
  require_once 'odp.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login-Pagina</title>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="loginachtergrondkleur">
  <?php include_once 'nav.php'; ?>
  <main>
    <div class="d-flex justify-content-center">
      <form action="loginV.php" method="post">
        <p>Login for admin</p>
        username <input type="text" name="username" value="" id="form-username"><br/>
        password <input type="text" name="password" value="" id="form-password"><br/>
        <input type="submit" value="login" id="login-button1">
      </form>
    </div>
    <p> 
       
     
    </p>
    <div class="d-flex justify-content-center">
      <form action="loginU.php" method="post">
        <p>Login for users</p>
        <a class="nav-link hover2" href="insertuser.php">no account? click here to make one.</a>
        username <input type="text" name="username" value="" id="form-username2"><br/>
        password <input type="text" name="password" value="" id="form-password2"><br/>
        <input type="submit" value="login" id="login-button2">
      </form>
    </div>
  </main>
  <script src="js/loginhulp.js"></script>
</body>
</html>