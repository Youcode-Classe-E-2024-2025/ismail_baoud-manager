<?php 

$medecin = medecin::get_medecin($conn);
foreach ($medecin as $user) {
   $status = null;
   $color = null;
   if($user["status"] === 'refuse'){
    $status = 'refuse';
    $color = 'danger';

    }else{
       $status = 'accept';
         $color = 'success';
   }
   echo "<tr><td>".$user["med_id"]."</td>
   <td>".$user["First_name"]."</td>
   <td>".$user["last_name"]."</td>
   <td>".$user["med_age"]."</td>
   <td>".$user["med_address"]."</td>
   <td>".$user["med_phone"]."</td>
   <td><span class='badge bg-". $color ."'>". $status ."</span></td>
   <td>

       <div class='d-flex'>
            <form action='src/controllers/handlin_status_admins.php' method='post'>
                <input name='id_target' class='d-none' value='" . $user["med_id"] ."'>
                <input name='new_status' class='d-none' value='accept'>
                <input type='submit' name='submit_accept_med' name='submit_accept' class='btn btn-sm btn-success' value='accept'>
            </form>
            <form action='src/controllers/handlin_status_admins.php' method='post'>
                <input name='id_target' class='d-none' value='" . $user["med_id"] ."'>
                <input name='new_status' class='d-none' value='refuse'>
                <input type='submit' name='submit_refuse_med' class='btn btn-sm btn-danger' value='refuse'>
            </form>
        </div>
   </td></tr>";}
   
?>