<?php

class Product  {

public $product_id;
public $product_type;

public function getProducts(){

    $sql2 = "SELECT * FROM product";
    $conn = new Database();
    $result2 = $conn->connect()->query($sql2);
  
 return $result2;
    
}

}



?>