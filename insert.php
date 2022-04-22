<?php
 require_once 'odp.php';

if(isset($_POST["toevoegen"])){ 
    $sql = "INSERT INTO producten
    (naam, beschrijving, prijs, img )
     VALUES 
    (:naam, :beschrijving, :prijs, :img)";
;

$stmt = $connect->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":prijs", $_POST['prijs']);
$stmt->bindParam(":beschrijving", $_POST['beschrijving']);
$stmt->bindParam(":img", $_POST['img']);
$stmt->execute();
header("Location: setting.php")

;}
?>

<form action="" method= "post">
    naam<input type="text" name="naam" id=""><br/>
    Prijs<input type="text" name="prijs" id=""><br/>
    beschrijving<input type="text" name="beschrijving" id=""><br/>
    img<input type="text" name="img" id=""><br/>
    
    <input type="submit" name="toevoegen" value="submit">
    <a href="setting.php">back</a>
</form>