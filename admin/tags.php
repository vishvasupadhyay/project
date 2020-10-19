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
require 'config.php';
require 'header.php';
require 'sidebar.php';


if (isset($_POST['submit'])) {
    $tag_id = isset($_POST['tag_id'])?$_POST['tag_id']:'';
    $name = isset($_POST['name'])?$_POST['name']:'';
    
    $sql = 'INSERT INTO tags (`tag_id`, `name`) VALUES("'.$tag_id.'","'.$name.'")';

    if ($conn->query($sql) === true) {
        //"New record created successfully";
    } else {
        echo "record not created";
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //$conn->close();
}
 
?>
<div id="main-content">
<!-- Main Content Section with everything -->
<noscript>
    <!-- Show a notification if the user has disabled javascript -->
    <div class="notification error png_bg">
        <div>
            Javascript is disabled or is not supported by your browser. Please
            <a href="http://browsehappy.com/" title="Upgrade to a better browser">
            upgrade</a> your browser or 
            <a href="http://www.google.com/support/bin/answer.py?answer=23852"
            title="Enable Javascript in your browser">enable
            </a> Javascript to navigate the interface properly.
        </div>
    </div>
</noscript>
<!-- Page Head -->
<h2>Welcome John</h2>
<p id="page-intro">What would you like to do?</p>
<div class="clear"></div>
<!-- End .clear -->
<div class="content-box">
    <!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Tags</h3>
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
            <table>
                <thead>
                    <tr>
                        <th><input class="check-all" type="checkbox" /></th>
                        <th>Tag ID</th>
                        <th>Tag Name</th>
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
                            
                            <!-- End .pagination -->
                            <div class="clear"></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                <?php 
                $sql2 = "SELECT * FROM tags";
                $result = mysqli_query($conn, $sql2) 
                or die("Error: " . mysqli_error($conn));
                while ($row = mysqli_fetch_array($result)) : ?>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><?php echo $row['tag_id'] ; ?></td>
                        <td><a href="#" title="title"><?php echo $row['name']; ?>
                        </a></td>
                        <td>
                            <!-- Icons  -->
                            <a href="#" title="Edit">
                            <img src="resources/images/icons/pencil.png" alt="Edit"/>
                            </a>
                            <a href="<?php echo "deleteTag.php?tag_id=$row[tag_id]" ?>" title="Delete">
                            <img src="resources/images/icons/cross.png" alt="Delte"/>
                            </a>
                            <a href="#" title="Edit Meta">
                            <img src="resources/images/icons/hammer_screwdriver.png"
                             alt="Edit Meta" /></a>
                        </td>
                    </tr>
                <?php endwhile ;
                ?>
                     
                </tbody>
            </table>
        </div>
        <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
            <form action="#" method="post">
                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Tag ID</label>
                        <input class="text-input small-input" type="text" id="small-input" name="tag_id" />
                        <!-- <span class="input-notification success png_bg">Successful message</span>  -->
                        <br /><small>*enter tad id</small>
                    </p>
                    <p>
                        <label>Tag Name</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input" name="name" />
                         <!-- <span class="input-notification error png_bg">Error message</span> -->
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
<!--
    <div class="notification attention png_bg">
        <a href="#" class="close">
        <img src="resources/images/icons/cross_grey_small.png" 
        title="Close this notification" alt="close" /></a>
        <div>
            Attention notification. Lorem ipsum dolor sit amet,
             consectetur adipiscing elit. Proin vulputate, sapien
              quis fermentum luctus, libero.
        </div>
    </div>
    
    <div class="notification information png_bg">
        <a href="#" class="close">
        <img src="resources/images/icons/cross_grey_small.png"
         title="Close this notification" alt="close" /></a>
        <div>
            Information notification. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Proin vulputate, sapien
            quis fermentum luctus, libero.
        </div>
    </div>
    
    <div class="notification success png_bg">
        <a href="#" class="close">
        <img src="resources/images/icons/cross_grey_small.png"
         title="Close this notification" alt="close" /></a>
        <div>
            Success notification. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Proin vulputate, sapien
            quis fermentum luctus, libero.
        </div>
    </div>
    
    <div class="notification error png_bg">
        <a href="#" class="close">
        <img src="resources/images/icons/cross_grey_small.png"
         title="Close this notification" alt="close" /></a>
        <div>
            Error notification. Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Proin vulputate, sapien quis
            fermentum luctus, libero.
        </div>
    </div>-->
<!-- End Notifications -->
<?php include('footer.php'); ?>