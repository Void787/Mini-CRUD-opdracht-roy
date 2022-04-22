<?php
 require_once 'odp.php';

if(isset($_POST["toevoegen"])){ 
    $sql = "INSERT INTO producten
    (naam, beschrijving, prijs )
     VALUES 
    (:naam, :beschrijving, :prijs)";
;

$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":prijs", $_POST['prijs']);
$stmt->bindParam(":beschrijving", $_POST['beschrijving']);
$stmt->execute();
header("Location: setting.php")

;}
?>

<form action="" method= "post">
    naam<input type="text" name="naam" id=""><br/>
    Prijs<input type="text" name="prijs" id=""><br/>
    beschrijving<input type="text" name="beschrijving" id=""><br/>
    
    <input type="submit" name="toevoegen" value="submit">
    <a href="setting.php">back</a>
</form>