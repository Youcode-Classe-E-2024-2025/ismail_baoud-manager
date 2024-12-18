<?php 
include_once "../config/connection.php";
include_once "../modules/user.php";
$new_status = null;
$user_id;
if(isset($_POST["submit_accept"])){
    $user_id = $_POST["id_target"];
    $new_status = $_POST["new_status"];
}

if(isset($_POST["submit_refuse"])){
    $user_id = $_POST["id_target"];
    $new_status = $_POST["new_status"];
}
user::change_status($conn,$user_id,$new_status);
header('location:/adminPage')

?>