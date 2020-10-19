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
require '../config.php';
require 'products.php';

$pnm = $_GET['pname'];
$pid = $_GET['pid'];
$ppr = $_GET['pprice'];

?>
<?php

$errors = array();
$message = '';

if (isset($_POST['submit'])) {
    $pname = isset($_POST['pname'])?$_POST['pname']:'';
    $pid = isset($_POST['p_id'])?$_POST['p_id']:'';
    $pprice = isset($_POST['pprice'])?$_POST['pprice']:'';

    $query = "UPDATE product SET pname='$pname' , pprice='$pprice' 
              WHERE pid = '$pid' " ;
    
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "record updated successfully";
        echo $uid ;
    } else {
        $errors[] = array('input' => 'form', 'msg' => $conn->error);
    }
}


?>