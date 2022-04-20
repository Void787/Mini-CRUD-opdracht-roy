<?php 
include_once 'odp.php';

if($_SESSION['loggedin'] == true){
    echo ("welcome");
}
else{
    die("you are not logged in");
}
?>