<?php 

/**
 * MyClass File Doc Comment    
 * PHP version 5
 * 
 * @category MyClass
 * @package  MyPackage
 * @author   My Name <my.name@example.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
require 'config.php';
require 'products.php';

$pnm = $_GET['name'];
$pid = $_GET['product_id'];
$ppr = $_GET['price'];

?>
<?php

$errors = array();
$message = '';

if (isset($_POST['submit'])) {
    $pname = isset($_POST['name'])?$_POST['name']:'';
    $pid = isset($_POST['product_id'])?$_POST['product_id']:'';
    $pprice = isset($_POST['price'])?$_POST['price']:'';

    $query = "UPDATE product SET name='$pname' , price='$pprice' 
              WHERE product_id = '$pid' " ;
    
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "record updated successfully";
        echo $uid ;
    } else {
        $errors[] = array('input' => 'form', 'msg' => $conn->error);
    }
}


?>