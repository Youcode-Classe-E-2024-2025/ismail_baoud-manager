<?php 

function connect(){
    $setc = "mysql:host=localhost;dbname=gestion_des_rendezVous";
$user_name = "root";
$password = "";

$conn = new PDO($setc, $user_name, $password);
return $conn;
}
?>