<?php

$total_medecins = 0;
$accepted = 0;
$refused = 0;
$en_attend = 0;
$users = medecin::get_medecin($conn);
foreach ($users as $user) {
   $total_medecins++; 
   if($user["status"] === 'en attend'){
    $en_attend++; 
   }elseif($user["status"] === 'refuse'){
    $refused++; 
   }else{
    $accepted++;
   }
}
?>