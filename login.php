<?php 
  require_once'odp.php';
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
  <div class="position-absolute top-50 start-10 translate-middle">
    <p></p>
  </div>
  <!--<form class="position-absolute top-50 start-50 translate-middle"name="oefen" action="form.php" method="post">
      <p>geef je naam <input type="text" name="naam"></p>
      <p><input type="submit" name="sent" value="Verstuur"></p>
    </form> , <p><input type="submit" ></p> -->
    <div class="card text-white bg-warning mb-3 cv1">
    <!--<img class="card-img-top" src="img/corto-restaurant.jpg" alt="Card image cap">-->
      <div class="card-img-overlay">
        <!--<form onsubmit="submitForm(event)" class="position-absolute top-50 start-50 translate-middle" id="my-form">-->
          <p>username: <input type="text" id="username"></p>
          <p>password: <input type="text" id="password"></p>
          <button onclick="clicked()" id="login-button" >inloggen</button>
        <!--</form>-->
      </div>
    </div>
  <script src="E-functies.js"></script>
</body>
</html>