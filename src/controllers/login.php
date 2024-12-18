<?php 


if(isset($_POST["login_btn"])){
    $login_name = $_POST["username"];
    $login_password = $_POST["password"];
    // echo $login_name;
    // echo $login_password;


    $users = user::get_accept_users($conn);
    $admins = admin::get_admin($conn);
    foreach($admins as $admin){
        if($admin["First_name"] === $login_name && $admin["admin_password"] === $login_password){
            header('location:/adminPage');

        }else{
            foreach($users as $user){
                if($user["First_name"] === $login_name && $user["user_password"] === $login_password){
                    header('location:/userPage');
                }else{
                    header('location:/404');
                }
            };
        };
    };

} 
?>
