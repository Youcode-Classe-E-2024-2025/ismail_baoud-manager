<?php
// include_once 'config/connection.php';
// include_once 'src/modules/admin.php';
// include_once 'src/modules/user.php';
// include_once 'src/modules/medecin.php';


  $rexName = "/^[a-zA-Z' -]+$/";
  $rexEmail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
  $isvalide = true;
  if(isset($_POST["sign-up-button"])){
    
    $first_name = $_POST["first_name"];

    $last_name = $_POST["last_name"];

    $password = $_POST["user_password"];

    $age = $_POST["user_age"];

    $adress = $_POST["user_address"];

    $phone = $_POST["user_phone"];

    $result = admin::get_admin($conn);

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

  if(isset($_POST["add_med"])){
    $first_name = $_POST["first_name"];

    $last_name = $_POST["last_name"];

    $password = $_POST["user_password"];

    $age = $_POST["user_age"];

    $adress = $_POST["user_address"];

    $phone = $_POST["user_phone"];

    $query = new medecin($first_name,$last_name,$password,$age,$adress,$phone);
    $query->add_user_med($conn);
    header('location:/admin_management');


  }

  
?>