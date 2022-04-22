<?php 
include 'odp.php';
var_dump($_GET['id']);


$stmt = $connect->query("SELECT `naam`, `prijs`, `beschrijving` FROM `producten` WHERE ID = 11");
$stmt->execute(['id' => $_GET['id']]);
$result = $stmt->fetch();
?>

<form action="" method="">
    naam<input type="text" name="name" id="" value="<?php echo $result['naam'] ?>" ><br />
    prijs<input type="text" name="price" id="" value=""><br />
    beschrijving<input type="text" name="details" id="" value=""><br />
    ID<input type="text" name="id" id="" value=""><br />

</form>