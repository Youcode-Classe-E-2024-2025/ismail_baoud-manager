<?php

$total_users = 0;
$accepted = 0;
$refused = 0;
$en_attend = 0;
$users = user::get_users($conn);
foreach ($users as $user) {
   $total_users++; 
   if($user["status"] === 'en attend'){
    $en_attend++; 
   }elseif($user["status"] === 'refuse'){
    $refused++; 
   }else{
    $accepted++;
   }
}
?>
