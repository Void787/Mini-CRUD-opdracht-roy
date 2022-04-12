<?php
 require_once 'odp.php';
// if($_SESSION['loggedin'] == true){
//     echo "Welkom " . $_SESSION['username']
// ;}

// else{
//     header("Location: inloggen.php")
// ;}

if(isset($_POST["naam"])){ 
    $sql = "INSERT INTO products
    (naam, voorraad, prijs ) VALUES (:naam, :voorraad, :prijs,)";
;

$stmt = $conn->prepare($sql);
$stmt->bindParam(":naam", $_POST['naam']);
$stmt->bindParam(":prijs", $_POST['prijs']);
$stmt->bindParam(":voorraad", $_POST['voorraad']);
$stmt->execute();
header("Location: admin.php")



//
//$stmt->execute(array(':naam' => $_POST['naam'], ':voorraad' => $_POST['voorraad'], ':prijs' => $_POST['prijs'], ':ID' => $_POST['ID']));

//header('Location: admin.php');
;}
?>

<form action="" method= "post">
    Prijs<input type="text" name="prijs" id=""><br/>
    voorraad<input type="text" name="voorraad" id=""><br/>
    naam<input type="text" name="naam" id=""><br/>

</form>