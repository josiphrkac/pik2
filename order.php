<?php

class Order  {
    
   public $shipdate; 
   public $street;
   public $city;
   public $customer;
   public $product;

public function __construct($shipdate, $street, $city, $customer, $product) {

    $this->shipdate =$shipdate;
    $this->street = $street;
    $this->city = $city;
    $this->customer = $customer;
    $this->product = $product;
    
}
public function insertrow($shipdate, $street, $city, $customer, $product){

    $insert = new Database();   
    $sql =  $insert->connect()->query("INSERT INTO order_details(ship_date, to_street, to_city, customer_id, product_id) VALUES ('$shipdate','$street','$city','$customer','$product')");
	return $sql;
 
}
}


?>