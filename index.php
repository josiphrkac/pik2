 <?php

include ('includes/db_connection.php');
include ('includes/order.php');
include ('includes/customer.php');
include ('includes/product.php');

$insert = new Database();

if(isset($_POST['submit'])){

    $shipdate = $_POST['ship_date'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $customer = $_POST['customer_id'];
    $product = $_POST['product_id'];

$order = new Order($shipdate, $street, $city, $customer, $product);
 
$order->insertrow($shipdate, $street, $city, $customer, $product);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method ="POST">
<select name="customer_id" >
<option value="">Select Customer</option>
<?php
$customer = new Customer();
$result = $customer->getCustomers();


    while ($row = $result->fetch_assoc()){
      $customer->id = $row ['customer_id'];
      $customer->username = $row ['username'];

  echo "<option value = '$customer->id'>$customer->username</option>";
    }
?>
</select>
<select name="product_id">
    <option value="">Select Product</option>
<?php

$product = new Product ();
$result1 = $product->getProducts();

        while ($row = $result1->fetch_assoc()){

            $product->product_id = $row['product_id'];
            $product->product_type = $row ['product_type'];

            echo "<option value = '$product->product_id'>$product->product_type</option>";
    }

?>
</select>
<input type="date" name="ship_date">
<input type="text" name="street" placeholder="street">
<input type="text" name="city" placeholder="city">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>