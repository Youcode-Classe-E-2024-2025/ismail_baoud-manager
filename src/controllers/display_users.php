<?php 

$users = user::get_users($conn);
foreach ($users as $user) {
   $status = null;
   $color = null;
   if($user["status"] === 'en attend'){
       $status = 'en attend';
         $color = 'warning';

   }elseif($user["status"] === 'refuse'){
    $status = 'refuse';
    $color = 'danger';

    }else{
       $status = 'accept';
         $color = 'success';
   }
   echo "<tr><td>".$user["user_id"]."</td>
   <td>".$user["First_name"]."</td>
   <td>".$user["last_name"]."</td>
   <td>".$user["user_age"]."</td>
   <td>".$user["user_address"]."</td>
   <td>".$user["user_phone"]."</td>
   <td><span class='badge bg-". $color ."'>". $status ."</span></td>
   <td>

       <div class='d-flex'>
            <form action='src/controllers/handlin_status_users.php' method='post'>
                <input name='id_target' class='d-none' value='" . $user["user_id"] ."'>
                <input name='new_status' class='d-none' value='accept'>
                <input type='submit' name='submit_accept' name='submit_accept' class='btn btn-sm btn-success' value='accept'>
            </form>
            <form action='src/controllers/handlin_status_users.php' method='post'>
                <input name='id_target' class='d-none' value='" . $user["user_id"] ."'>
                <input name='new_status' class='d-none' value='refuse'>
                <input type='submit' name='submit_refuse' class='btn btn-sm btn-danger' value='refuse'>
            </form>
        </div>
   </td></tr>";}
   
?>