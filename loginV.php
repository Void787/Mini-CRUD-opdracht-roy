<?php 
include_once "odp.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();

if($result == 0){
    echo "sorry login incorrect";
    echo "  ";
}
?>
<a class="nav-link hover1" href="index.php">go back</a>
<?php
include_once "odp.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetch();

if(count($result) > 0){
    header("Location: setting.php");

} else {
    echo "username or password not found";
}

?>
 
