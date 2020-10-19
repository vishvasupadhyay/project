<?php

    require 'config.php';
    $product_id = $_GET['product_id'];
    $query = "DELETE from products WHERE product_id = '$product_id'";
    $query2 = "ALTER TABLE products DROP `product_id`";
    $query3 = "ALTER TABLE products ADD `product_id`
    int not null auto_increment primary key first" ;
    $data = mysqli_query($conn, $query);
    $data1 = mysqli_query($conn, $query2);
    $data2 = mysqli_query($conn, $query3);

    
if ($data) {
    //echo "delted";
    header('Location: products.php');
} else {
    header('Location: index.php');
} 
?>