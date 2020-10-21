<?php

/**
 * MyClass File Doc Comment    
 * PHP version 5
 * 
 * @category MyClass
 * @package  MyPackage
 * @author   Me <me@example.com>
 * @license  http://www.abc.org GNU General Public License
 * @link     http://www.abc.com/
 */

//session_start();

require 'header.php';
require 'sidebar.php';
 
?>

<div id="main-content">
<!-- Main Content Section with everything -->

<!-- Page Head -->
<h2>Welcome John </h2>
<p id="page-intro">What would you like to do?</p>
<div class="clear"></div>
<!-- End .clear -->
<div class="content-box">
    <!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Products</h3>
        <ul class="content-box-tabs">
            <li><a href="#tab1" class="default-tab">Manage</a></li>
            <!-- href must be unique and match the id of target div -->
            <li><a href="#tab2">Add</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <!-- This is the target div. id must match the href of this div's tab -->
            <div class="notification png_bg">
                <a href="#" class="close">
                <img src="resources/images/icons/cross_grey_small.png" 
                     title="Close this notification" alt="close" /></a>
                <div>
                    List of all the products in the database.
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th><input class="check-all" type="checkbox" /></th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Discription</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="bulk-actions align-left">
                                <select name="dropdown">
                                    <option value="option1">Choose an action</option>
                                    <option value="option2">Edit</option>
                                    <option value="option3">Delete</option>
                                </select>
                                <a class="button" href="#">Apply to selected</a>
                            </div>
                            <div class="pagination">
                                <a href="#" title="First Page">&laquo; First</a>
                                <a href="#" title="Previous Page">&laquo;Previous</a>
                                <a href="#" class="number" title="1">1</a>
                                <a href="#" class="number" title="2">2</a>
                                <a href="#" class="number current" title="3">3</a>
                                <a href="#" class="number" title="4">4</a>
                                <a href="#" title="Next Page">Next &raquo;</a>
                                <a href="#" title="Last Page">Last &raquo;</a>
                            </div>
                            <!-- End .pagination -->
                            <div class="clear"></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                <?php 

                require 'config.php';
                $sql2 = "SELECT * FROM Products";
                $result = mysqli_query($conn, $sql2) 
                or die("Error: " . mysqli_error($conn));
                while ($row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><?php echo $row['product_id'] ; ?></td>
                        <td><a href="#" title="title"><?php echo $row['name']; ?>
                        </a></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['long_desc']; ?></td>
                        <td>
                            <!-- Icons  -->
                            <a href="<?php echo "editProduct.php?product_id=$row[product_id]&name=$row[name]&price=$row[price]&long_desc=$row[long_desc]" ?>" title="Edit">
                            <img src="resources/images/icons/pencil.png" alt="Edit"/>
                            </a> 
                             <a href="<?php echo "deleteProduct.php?product_id=$row[product_id]" ?>" title="Delete">
                             <img src="resources/images/icons/cross.png" alt="Delte"/>
                            </a>
                            <a href="#" title="Edit Meta">
                            <img src="resources/images/icons/hammer_screwdriver.png"
                             alt="Edit Meta" /></a>
                        </td>
                    </tr>
                <?php endwhile ; ?>                
                </tbody>
            </table>
        </div>
        <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
            <form action="#tab2"  method="POST">
                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets
                     to divide the form into columns -->
                    <p>
                        <label>Name</label>
                        <input class="text-input small-input" type="text" 
                        id="small-input" name="name" />
                        <!-- <span class="input-notification success png_bg">
                        Successful message</span> -->
                        <!-- Classes for input-notification: success, error,
                         information, attention -->
                    </p>
                    <p>
                        <label>Price</label>
                        <input class="text-input medium-input datepicker"
                         type="text" id="medium-input" name="price" />
                        <!-- <span class="input-notification error png_bg">
                        Error message</span> -->
                    </p>
                    <p>
                        <label>Image</label>
                        <input type="file" id="myFile" name="img" >
                    </p>
            <p>
            <label>Category</label>              
            <select name="category" class="small-input" >
            <!-- <option value="1">Men</option> -->
            <?php
            require 'config.php';
            $sql2 = "SELECT * FROM category";
            $result = mysqli_query($conn, $sql2) 
            or die("Error: " . mysqli_error($conn));
            while ($row = mysqli_fetch_array($result)) :
                ?>
            <option value="<?php echo $row['category_id'] ;?>"><?php echo $row['name'] ;?></option>
            <?php endwhile ; ?>
            </select> 
            </p>
            <!-- <p>
            <label>Tags</label>
            <input type="checkbox" name="short_desc[]" value="Fashion " /> Fashion 
            </p> -->
            <p>
            <label>Tags</label>
            <?php
            require 'config.php';
            $sql2 = "SELECT * FROM tags";
            $result = mysqli_query($conn, $sql2) 
            or die("Error: " . mysqli_error($conn));
            while ($row = mysqli_fetch_array($result)) :
                ?>
            <input type="checkbox" name="short_desc[]" value="<?php echo $row['name'];?>" /> <?php echo $row['name'];?> 
            <?php endwhile ; ?>
            </p>
            <p>
            <label>Discription</label>
            <textarea class="text-input textarea wysiwyg" id="textarea" 
            name="long_desc" cols="79" rows="15"></textarea>
            </p>
            <p>
            <input class="button" type="submit" name="submit" value="Submit" />
            </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->
            </form>
        </div>
        <!-- End #tab2 -->
    </div>
    <!-- End .content-box-content -->
</div>
<!-- End .content-box -->
<div class="clear"></div>
<!-- Start Notifications -->

    <?php 

    require 'config.php';
    if (isset($_POST['submit'])) {
        $category = isset($_POST['category'])?$_POST['category']:'';
        $name = isset($_POST['name'])?$_POST['name']:'';
        $price = isset($_POST['price'])?$_POST['price']:'';
        $img = isset($_POST['img'])?$_POST['img']:'';
        $abc = $_POST["short_desc"];
        $short_desc = implode(",", $abc);
        $long_desc = isset($_POST['long_desc'])?$_POST['long_desc']:'';
    
    
    
        $sql = 'INSERT INTO products 
        (`category_id`, `name`  , `price` , `image`,`short_desc`,`long_desc`)
        VALUES("'.$category.'","'.$name.'","'.$price.'",
        "'.$img.'","'.$short_desc.'","'.$long_desc.'")';
    
        //$conn->close();
    
        if ($conn->query($sql) === true) {
                //"New record created successfully";
                echo '<div class="notification success png_bg">
                <a href="#" class="close">
                <img src="resources/images/icons/cross_grey_small.png"
                title="Close this notification" alt="close" /></a>
                <div>
                    New Product Added.
                </div>
            </div>';
        } else {
                echo '<div class="notification error png_bg">
                <a href="#" class="close">
                <img src="resources/images/icons/cross_grey_small.png"
                title="Close this notification" alt="close" /></a>
                <div>
                    Product not added.
                </div>
                </div>';
        }
    }
    ?>    

    <!-- <div class="notification attention png_bg">
        <a href="#" class="close">
        <img src="resources/images/icons/cross_grey_small.png" 
        title="Close this notification" alt="close" /></a>
        <div>
            Attention notification..
        </div>
    </div>
    
    <div class="notification information png_bg">
        <a href="#" class="close">
        <img src="resources/images/icons/cross_grey_small.png"
         title="Close this notification" alt="close" /></a>
        <div>
            Information notification.
        </div>
    </div> -->
    
    
    
    
<!-- End Notifications
<?php require 'footer.php'?>