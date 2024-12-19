<?php 


if(isset($_POST["submit-btn"])){
    session_start();
  $name = $_POST["name"];  
  $appointment_date = $_POST["appointment_date"];
  $result = medecin::compare_med($conn,$name);
  $id=$_SESSION["user"];
  var_dump($id);
  foreach($result as $res){
    $med_id = $res["med_id"];
    $class = new appointment($appointment_date,$med_id,$id);
    $class->add_appointment($conn);
      }
  }
  
 

?>