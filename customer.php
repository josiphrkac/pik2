<?php

class Customer{
    
   public $id;
   public $username;

    public function getCustomers(){

     $sql1 = "SELECT * FROM customer";
     $conn = new Database();
     $result1 = $conn->connect()->query($sql1);
          
     return $result1;
            
        

        }
    


    }



?>