<?php 
class admin {
    protected $first_name;
    protected $last_name;
    protected $password;
    protected $age;
    protected $adress;
    protected $phone;

    public function __construct($first_name,$last_name,$password,$age,$adress,$phone){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->password = $password;
        $this->age = $age;
        $this->adress = $adress;
        $this->phone = $phone;
    }
    public function add_user($connection){
        $query = $connection->prepare("INSERT INTO admins (First_name,last_name,admin_password,admin_age,admin_address,admin_phone) VALUES (:first_name,:last_name,:password,:age,:adress,:phone)");
        $query->bindparam(':first_name', $this->first_name);
        $query->bindparam(':last_name', $this->last_name);
        $query->bindparam(':password', $this->password);
        $query->bindparam(':age', $this->age);
        $query->bindparam(':adress', $this->adress);
        $query->bindparam(':phone', $this->phone);
        $query->execute();
    }

    public static function get_admin($connection){
        $query = $connection->prepare("SELECT admin_id, First_name,last_name,admin_password,admin_age,admin_address,admin_phone FROM admins");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

}
?>