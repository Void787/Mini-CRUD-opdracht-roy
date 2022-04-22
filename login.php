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
  <link rel="stylesheet" href="main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</head>

<body>

  <?php include_once 'nav.php'; ?>
  <main>
    <div class="d-flex justify-content-center">
      <form action="loginV.php" method="post" id="login form">
        <p>Login for admin</p>
        username <input type="text" name="username" value="" /><br />
        password <input type="text" name="password" value=""><br/>
        <input type="submit" value="login"/>
      </form>
    </div>
    <p> 
       
     
    </p>
    <div class="d-flex justify-content-center">
      <form action="loginU.php" method="post" id="login form">
        <p>Login for users</p>
        username <input type="text" name="username" value="" /><br />
        password <input type="text" name="password" value=""><br/>
        <input type="submit" value="login"/>
        <a href="insertuser.php?id=<?php echo $re["ID"]; ?>">no account yet click here!</a>
      </form>
    </div>
  </main>
</body>
</html>