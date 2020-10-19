<?php

    require 'config.php';
    $category_id = $_GET['category_id'];
    $query = "DELETE from category WHERE category_id = '$category_id'";
    $query2 = "ALTER TABLE category DROP `category_id`";
    $query3 = "ALTER TABLE category ADD `category_id`
    int not null auto_increment primary key first" ;
    $data = mysqli_query($conn, $query);
    $data1 = mysqli_query($conn, $query2);
    $data2 = mysqli_query($conn, $query3);

    
if ($data) {
    //echo "delted";
    header('Location: categories.php');
} else {
    header('Location: index.php');
} 

?>