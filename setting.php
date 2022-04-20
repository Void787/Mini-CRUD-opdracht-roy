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

    <p>dit is settings</p>
    <?php
require_once "odp.php";
//  if($_SESSION['login'] == true){
//      echo "Welkom " . $_SESSION['username']
//  ;}

//  else{
//     header("Location: inloggen.php")
//  ;}

$sql = "SELECT * FROM producten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<table>
    <tr>
        <th>titel</th>
        <th>Prijs</th>
        <th>beschrijving</th>
        <th>img</th>
        
    </tr>
    <?php
    foreach ($result as $re) { ?>
        <tr>
            <td><?php echo $re["naam"]; ?></td>
            <td><?php echo $re["prijs"]; ?></td>
            <td><?php echo $re["beschrijving"]; ?></td>
            <td><?php echo $re["img"]; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $re["ID"]; ?>"> edit </a>
                <a href="delete.php?id=<?php echo $re["ID"]; ?>"> delete</a>
            </td>
        </tr>

    <?php
    }
    ?>
    <a href="insert.php?id=<?php echo $re["ID"]; ?>">insert</a>
    <a href="index.php?id=<?php echo $re["ID"]; ?>">home</a>
</table>
  
</body>
</html>