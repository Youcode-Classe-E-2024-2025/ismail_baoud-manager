<?php 
include_once '../config/connection.php';
include_once '../modules/admin.php';
include_once '../modules/user.php';

if(isset($_POST["login_btn"])){
    $login_name = $_POST["username"];
    $login_password = $_POST["password"];
    // echo $login_name;
    // echo $login_password;

    //affichie la list des utilisateurs
    $users = user::get_users($conn);
    $admins = admin::get_admin($conn);
    foreach($admins as $admin){
        if($admin["First_name"] === $login_name && $admin["admin_password"] === $login_password){
            header('location: ../views/super_admin/home.php');

        }else{
            foreach($users as $user){
                if($user["First_name"] === $login_name && $user["user_password"] === $login_password){
                    header('location:../views/user/home.php');
                }
            };
        };
    };

} 
?>
