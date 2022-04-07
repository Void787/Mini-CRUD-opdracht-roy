<?php 
include_once "odp.php";
 
$sql = "SELECT * FROM webshop.admin WHERE username = :username AND passwd = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetchAll();
// var_dump($result);
if(count($result) > 0){
    echo "username gevonden";
} else {
    echo "username niet gevonden";
}
//var_dump($_POST);
 
 ;
 
?>
 
