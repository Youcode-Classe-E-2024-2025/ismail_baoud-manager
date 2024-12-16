<?php 
include "admin.php";
class user extends admin{

    public function __construct($first_name,$last_name,$password,$age,$adress,$phone){
        parent::__construct($first_name,$last_name,$password,$age,$adress,$phone);

    }

    public function add_user($connection){
        $query = $connection->prepare("INSERT INTO users (First_name,last_name,user_password,user_age,user_address,user_phone) VALUES (?,?,?,?,?,?)");
        $query->execute([$this->first_name,$this->last_name,$this->password,$this->age,$this->adress,$this->phone]);
    }


}
?>