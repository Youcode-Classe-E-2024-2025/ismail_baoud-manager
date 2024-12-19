<?php 
include_once "admin.php";
class medecin extends admin{
    public function __construct($first_name,$last_name,$password,$age,$adress,$phone){
        parent::__construct($first_name,$last_name,$password,$age,$adress,$phone);
    }
    
    public function add_user_med($connection){
        $query = $connection->prepare("INSERT INTO medecin (First_name,last_name,med_password,med_age,med_address,med_phone) VALUES (:first_name,:last_name,:password,:age,:adress,:phone)");
        $query->bindparam(':first_name', $this->first_name);
        $query->bindparam(':last_name', $this->last_name);
        $query->bindparam(':password', $this->password);
        $query->bindparam(':age', $this->age);
        $query->bindparam(':adress', $this->adress);
        $query->bindparam(':phone', $this->phone);
        $query->execute();
    }
    public static function get_medecin($connection){
        $query = $connection->prepare("SELECT med_id, First_name,last_name,med_password,med_age,med_address,med_phone,status FROM medecin");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    public static function change_status($connection,$id,$new_status){
        $query = $connection->prepare("UPDATE medecin SET status = '$new_status' WHERE med_id=$id;");
        $query->execute();
    }
    public static function get_accept_meds($connection){
        $query = $connection->prepare("SELECT med_id, First_name,last_name,med_password,med_age,med_address,med_phone,status FROM medecin where status = 'accept'");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
    
}
?>