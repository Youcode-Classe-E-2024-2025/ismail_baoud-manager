<?php
include_once '../config/connection.php';
include_once '../modules/admin.php';
include_once '../modules/user.php';


  if(isset($_POST["sign-up-button"])){

    $first_name = $_POST["first_name"];

    $last_name = $_POST["last_name"];

    $password = $_POST["user_password"];

    $age = $_POST["user_age"];

    $adress = $_POST["user_address"];

    $phone = $_POST["user_phone"];

    $query = "SELECT * FROM admins";

    $result = $conn->query($query);

    $row = $result->fetch(PDO::FETCH_ASSOC);

    if ($row === false) {

      $query1 = new admin($first_name,$last_name,$password,$age,$adress,$phone);

      $query1->add_admin($conn);

    }else{

      $query2 = new user($first_name,$last_name,$password,$age,$adress,$phone);

      $query2->add_user($conn);

    }

   }
   header('location:/login');



?>