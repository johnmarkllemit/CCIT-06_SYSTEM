<?php 
try {
    $host = "localhost";
    $dbname = "db_group";
    $user = "root";
    $password = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $err) {
    echo $err->getMessage();
}

?>
