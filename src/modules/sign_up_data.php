<?php 
   include_once "connection.php";
   include_once 'user.php';
   include_once 'admin.php';




   if(isset($_POST["sign-up-button"])){

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $password = $_POST["user_password"];
    $age = $_POST["user_age"];
    $adress = $_POST["user_address"];
    $phone = $_POST["user_phone"];
    $query = "SELECT * FROM admins";
    $result = connect()->query($query);
    if(($row = $result->fetch(PDO::FETCH_COLUMN)) === false){
      $queryy = new admin($first_name,$last_name,$password,$age,$adress,$phone);
      $queryy->add_admin(connect());
    }else{
      $queryy = new user($first_name,$last_name,$password,$age,$adress,$phone);
      $queryy->add_user(connect());
    }
    
   }
?>