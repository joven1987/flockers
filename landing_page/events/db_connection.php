<?php
$servername = "localhost";
$user = "root";
$pass = "ambunganz071587";

try {
    $db = new PDO("mysql:host=$servername;dbname=flockers", $user, $pass);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>
