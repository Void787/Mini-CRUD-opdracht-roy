<?php

require_once'odp.php';
// if ($_SESSION['loggedin'] == true ){
//     echo "Welcome";
// ;}else{
//     header("Location: login.php");
//  ;}
 

$sql = "DELETE FROM producten WHERE id=:ID;
";
$stmt = $connect ->prepare($sql);
$stmt->bindParam(':ID', $_GET['id']);
$stmt->execute();
header("Location: setting.php")
?>