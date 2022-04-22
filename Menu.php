<?php include_once 'odp.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu-Pagina</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</head>

<body class="loginachtergrondkleur">
  <?php include_once 'nav.php'; ?>
  <table class="m-1 table" id="center_flex">
    <tr scope="col">
      <td scope="row">
        <div class="card me-3 menulist">
          <div id="Img1"></div>
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 1";
                $smt = $connect->query($sql);
                $smt->execute();
                $result = $smt->fetchAll();
                foreach ($result as $re) { ?>
                <img class="card-img-top" src="img/pizza/Salami.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Prosciutto.webp" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 2";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
          <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Vulcano.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 3";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Vesuvio.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 4";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
    </tr>
    <tr scope="col">
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Svedese.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 5";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Carbonara.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 6";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Campagnola.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 7";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Santa Luci.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 8";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
    </tr>
    <tr scope="col">
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Milanese.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 9";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
      <td scope="row">
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/pizza/Sveltina.jpg" alt="Card image cap">
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 10";
                $result = $connect->query($sql);
                foreach ($result as $re) { ?>
          <div class="card-body">
            <h5 class="card-title"><?php echo "naam: ",$re["naam"]; ?></h5>
            <ul class="listofproduct card-text">
              <li><?php echo "beschrijving: ",$re["beschrijving"]; ?></li>
              <li><?php echo "prijs: €",$re["prijs"]; ?></li>
            </ul>
            <?php
            }
            ?>
          </div>
        </div>
      </td>
    </tr>

  </table>
</body>
</html>