<?php 
include_once "admin.php";
class user extends admin{

    public function __construct($first_name,$last_name,$password,$age,$adress,$phone){
        parent::__construct($first_name,$last_name,$password,$age,$adress,$phone);

    }

    public function add_user($connection){
        $query = $connection->prepare("INSERT INTO users (First_name,last_name,user_password,user_age,user_address,user_phone) VALUES (:first_name,:last_name,:password,:age,:adress,:phone)");
        $query->bindparam(':first_name', $this->first_name);
        $query->bindparam(':last_name', $this->last_name);
        $query->bindparam(':password', $this->password);
        $query->bindparam(':age', $this->age);
        $query->bindparam(':adress', $this->adress);
        $query->bindparam(':phone', $this->phone);
        $query->execute();
    }
    public static function get_users($connection){
        $query = $connection->prepare("SELECT user_id, First_name,last_name,user_password,user_age,user_address,user_phone,status FROM users");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public static function en_attend($connection){
        $query = $connection->prepare("SELECT user_id, First_name,last_name,user_password,user_age,user_address,user_phone,status FROM users where status = 'en attend'");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public static function change_status($connection,$id,$new_status){
        $query = $connection->prepare("UPDATE users SET status = '$new_status' WHERE user_id=$id;");
        $query->execute();
    }
    public static function get_accept_users($connection){
        $query = $connection->prepare("SELECT user_id, First_name,last_name,user_password,user_age,user_address,user_phone,status FROM users where status = 'accept'");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
}
?>