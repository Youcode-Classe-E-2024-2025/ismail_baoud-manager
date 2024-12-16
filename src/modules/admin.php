<?php 
class admin{
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
    public function getfirstname(){
        return $this->first_name;
    }
}
?>