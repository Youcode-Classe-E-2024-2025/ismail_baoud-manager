<?php 
include "admin.php";
class medecin extends admin{
    public function __construct($first_name,$last_name,$password,$age,$adress,$phone){
        parent::__construct($first_name,$last_name,$password,$age,$adress,$phone);
    }
    public function add_user_med($connection){
        $query = $connection->prepare("INSERT INTO medecin (First_name,last_name,med_password,med_age,med_address,med_phone) VALUES (?,?,?,?,?,?)");
        $query->bindparam(':first_name', $this->first_name);
        $query->bindparam(':last_name', $this->last_name);
        $query->bindparam(':password', $this->password);
        $query->bindparam(':age', $this->age);
        $query->bindparam(':adress', $this->adress);
        $query->bindparam(':phone', $this->phone);
        $query->execute();
    }
}
?>