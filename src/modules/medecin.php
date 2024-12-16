<?php 
include "admin.php";
class medecin extends admin{
    public function __construct($first_name,$last_name,$password,$age,$adress,$phone){
        parent::__construct($first_name,$last_name,$password,$age,$adress,$phone);
    }
    public function add_med($connection){

        $query = $connection->prepare("INSERT INTO medecin (First_name,last_name,med_password,med_age,med_address,med_phone) VALUES (?,?,?,?,?,?)");
        $query->execute([$this->first_name,$this->last_name,$this->password,$this->age,$this->adress,$this->phone]);
        
    }
}
?>