<?php
$servername = "localhost";
$user = "root";
$pass = "";

try {
    $dbConnection = new PDO("mysql:host=$servername;dbname=flockers", $user, $pass);
    // set the PDO error mode to exception
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>
