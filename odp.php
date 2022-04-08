<?php 
    // definiër de server
    $host = 'localhost';
    $db = 'webshop';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    // de server aanspreken
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    
    //
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    // probeer een connectie te krijgen met de server.
    try
    {
        $connect = new PDO($dsn, $user, $pass, $opt);
        echo "verbinding is gemaakt.";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        die("sorry, database problem");
    }

    // $sql = "SELECT id, firstname, lastname FROM MyGuests";
    // $result = mysqli_query($mysqli, $dsn);

    // if (mysqli_num_rows($result) > 0) {
    // // output data of each row
    // while($row = mysqli_fetch_assoc($result)) {
    //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    // }
    // } else {
    // echo "0 results";
    // }
?>
