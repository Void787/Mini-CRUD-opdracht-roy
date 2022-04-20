<?php 
include_once 'odp.php';

$sql = "DELETE FROM Producten where ID=id;";
    $smt = $connect->prepare($sql);
    $smt ->bindParam('id', $get('id'));
    $smt ->execute();
    header("location: setting.php")
?>