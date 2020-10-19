<?php

    require 'config.php';
    $tag_id = $_GET['tag_id'];
    $query = "DELETE from tags WHERE tag_id = '$tag_id'";
    // $query2 = "ALTER TABLE tags DROP `tag_id`";
    // $query3 = "ALTER TABLE tags ADD `tag_id`
    // int not null auto_increment primary key first" ;
    $data = mysqli_query($conn, $query);
    // $data1 = mysqli_query($conn, $query2);
    // $data2 = mysqli_query($conn, $query3);

if ($data) {
    //echo "delted";
    header('Location: tags.php');
} else {
    header('Location: index.php');
} 

?>