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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php include_once 'nav.php'; ?>
  <table class="m-1" id="center_flex">
  <input type="file" id="image_input" accept="img/png, img/jpg">
    <tr>
      <td>
        <div class="card me-3 menulist">
          <div id="Img1"></div>
          <?php $sql = "SELECT `naam`, `prijs`, `beschrijving`, 'img' FROM `producten` WHERE ID = 11";
                $smt = $connect->query($sql);
                $smt->execute();
                $result = $smt->fetchAll();
                foreach ($result as $re) { ?>
                <?php echo $re["img"]; ?></li>
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
    </tr>
    <tr>
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
      <td>
        <div class="card me-3 menulist">
          <img class="card-img-top" src="img/Schermafbeelding kleuren keuze.png" alt="Card image cap">
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
  <script src="js/E-functies.js"></script>
</body>
</html>