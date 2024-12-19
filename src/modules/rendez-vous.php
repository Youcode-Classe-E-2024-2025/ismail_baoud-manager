<?php 

class appointment{
    private $date;
    private $user_id;
    private $med_id;
    public function __construct($date,$med_id,$user_id) {
        $this->date = $date;
        $this->med_id = $med_id;
        $this->user_id = $user_id;
   
    }

    public function add_appointment($connection){
        $query = $connection->prepare("INSERT INTO appointment (visit_date,med_id,user_id) VALUES (:visit_date,:med_id,:user_id)");
        $query->bindparam(':visit_date', $this->date);
        $query->bindparam(':med_id', $this->med_id);
        $query->bindparam(':user_id', $this->user_id);
        $query->execute();
    }


}
?>