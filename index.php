
<?php 
require_once 'config/connection.php';
include_once 'src/modules/admin.php';
include_once 'src/modules/user.php';
include_once 'src/modules/medecin.php';
include_once 'src/controllers/users_statistic.php';

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/"=>"public/index.php",
    "/userPage"=>"src/views/user/home.php",
    "/login"=>"src/views/login/login.php",
    "/signUp"=>"src/views/login/sign_up.php",
    "/adminPage"=>"src/views/super_admin/home.php",
    "/userPage"=>"src/views/user/home.php",
    "/analyse"=>"src/controllers/login.php",
    "/all_users"=>"src/controllers/display_users.php",
    "/changeStatus"=>"src/controllers/handlin_status_users.php",
    "/add_user"=>"src/controllers/add_data.php",
    "/user_management"=>"src/views/super_admin/home.php",
    "/sign_up_admin"=>"src/views/super_admin/sign_up.php",
    "/admin_management"=>"src/views/super_admin/admins_management.php",
    "/user_contacts"=>"src/views/sous_admin/les_contact_des_client.php",
    "/medecin_page"=>"src/views/sous_admin/home.php",
    "/404"=>"error/404.php"
];
if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    require "error/404.php";
}
?>