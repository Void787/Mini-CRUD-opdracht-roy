<?php
 require_once 'odp.php';

if(isset($_POST["toevoegen"])){ 
    $sql = "INSERT INTO users
    (username, password)
     VALUES 
    (:username, :password)";
;

$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
header("Location: login.php")

;}
?>

<form action="" method= "post">
    naam<input type="text" name="username" id=""><br/>
    Prijs<input type="text" name="password" id=""><br/>
    
    <input type="submit" name="toevoegen" value="submit">
    <a href="setting.php">back</a>
</form>