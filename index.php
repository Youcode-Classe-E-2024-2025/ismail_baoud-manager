
<?php 
include_once 'src/config/connection.php';
include_once 'src/modules/admin.php';
include_once 'src/modules/user.php';
include_once 'src/controllers/users_statistic.php';

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/"=>"public/index.php",
    "/userPage"=>"src/views/user/home.php",
    "/login"=>"src/views/login/login.php",
    "/signIn"=>"src/views/login/sign_in.php",
    "/adminPage"=>"src/views/super_admin/home.php",
    "/userPage"=>"src/views/user/home.php",
    "/analyse"=>"src/controllers/login.php",
    "/all_users"=>"src/controllers/display_users.php",
    "/changeStatus"=>"src/controllers/handlin_status_users.php",
    "/add_user"=>"src/controllers/add_data.php",
    "/404"=>"error/404.php"
];
if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}
?>