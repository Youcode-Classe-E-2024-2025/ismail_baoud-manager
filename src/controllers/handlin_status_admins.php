<?php 
include_once "../../config/connection.php";
include_once "../modules/medecin.php";

$new_status = null;
$med_id;
if(isset($_POST["submit_accept_med"])){
    $med_id = $_POST["id_target"];
    $new_status = $_POST["new_status"];
}

if(isset($_POST["submit_refuse_med"])){
    $med_id = $_POST["id_target"];
    $new_status = $_POST["new_status"];
}
medecin::change_status($conn,$med_id,$new_status);
header('location:/admin_management');

?>