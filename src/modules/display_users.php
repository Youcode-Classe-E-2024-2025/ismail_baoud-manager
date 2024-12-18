<?php 
$setc = "mysql:host=localhost;dbname=gestion_des_rendezVous";
$user_name = "root";
$password = "";

$conn = new PDO($setc, $user_name, $password);

require_once "user.php";
$users = user::get_users($conn);
               
foreach ($users as $user) {
   $color = null;
   $status = null;
   if($user["status"] === 'REFUSE'){
       $status = 'REFUSE';
       $color = 'danger';
   }else{
       $status = 'ACCEPT';
       $color = 'success';
   }
   echo "<tr><td>".$user["user_id"]."</td>
   <td>".$user["First_name"]."</td>
   <td>".$user["last_name"]."</td>
   <td>".$user["user_age"]."</td>
   <td>".$user["user_address"]."</td>
   <td>".$user["user_phone"]."</td>
   <td><span class='badge bg-".$color."'>". $status ."</span></td>
   <td>
       <button class='btn btn-sm btn-info'>accept</button>
       <button class='btn btn-sm btn-danger'>REFUSE</button>
   </td></tr>";}
   
?>