<?php 


if(isset($_POST["login_btn"])){
    $login_name = $_POST["username"];
    $login_password = $_POST["password"];


    $users = user::get_accept_users($conn);
    $admins = admin::get_admin($conn);
    $medecin = medecin::get_accept_meds($conn);
    foreach($admins as $admin){
        if($admin["First_name"] === $login_name && $admin["admin_password"] === $login_password){
            header('location:/adminPage');

        }else{
            foreach($users as $user){
                if($user["First_name"] === $login_name && $user["user_password"] === $login_password){
                    header('location:/userPage');
                }else{
                    foreach($medecin as $med){
                        if($med["First_name"] === $login_name && $med["med_password"] === $login_password){
                            header('location:/medecin_page');
                        }
                    }
                }
            }
        }
            
        
    };

} 
?>
