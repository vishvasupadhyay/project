<?php 
require 'admin/config.php';
     
$row_page = 10;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
 $start =($page = 1)* $row_page;
if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql= "SELECT * FROM products where category_id='$category' LIMIT $start, $row_page";
} else if (isset($_GET['tags'])) {
    $tags = $_GET['tags'];
    $sql= "SELECT * FROM products where tags LIKE '%($tags)%' LIMIT $start, $row_page";
} else {
    $sql= "SELECT * FROM products where LIMIT $start, $row_page";
}
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc());
}
?>