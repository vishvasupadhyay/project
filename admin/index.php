<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<div id="main-content">
<!-- Main Content Section with everything -->
<noscript>
    <!-- Show a notification if the user has disabled javascript -->
    <div class="notification error png_bg">
        <div>
            Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
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
        <h3>Content box</h3>
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
            <div class="notification attention png_bg">
                <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                <div>
                    This is a Content Box. You can put whatever you want in it. By the way, you can close this notification with the top-right cross.
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th><input class="check-all" type="checkbox" /></th>
                        <th>Column 1</th>
                        <th>Column 2</th>
                        <th>Column 3</th>
                        <th>Column 4</th>
                        <th>Column 5</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="bulk-actions align-left">
                                <select name="dropdown">
                                    <option value="option1">Choose an action...</option>
                                    <option value="option2">Edit</option>
                                    <option value="option3">Delete</option>
                                </select>
                                <a class="button" href="#">Apply to selected</a>
                            </div>
                            <div class="pagination">
                                <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                <a href="#" class="number" title="1">1</a>
                                <a href="#" class="number" title="2">2</a>
                                <a href="#" class="number current" title="3">3</a>
                                <a href="#" class="number" title="4">4</a>
                                <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                            </div>
                            <!-- End .pagination -->
                            <div class="clear"></div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Lorem ipsum dolor</td>
                        <td><a href="#" title="title">Sit amet</a></td>
                        <td>Consectetur adipiscing</td>
                        <td>Donec tortor diam</td>
                        <td>
                            <!-- Icons -->
                            <a href="#" title="Edit"><img src="resources/images/icons/pencil.png" alt="Edit" /></a>
                            <a href="#" title="Delete"><img src="resources/images/icons/cross.png" alt="Delete" /></a>
                            <a href="#" title="Edit Meta"><img src="resources/images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End #tab1 -->
        <div class="tab-content" id="tab2">
            <form action="#" method="post">
                <fieldset>
                    <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Name</label>
                        <input class="text-input small-input" type="text" id="small-input" name="small-input" />
                        <!-- <span class="input-notification success png_bg">Successful message</span> -->
                        <!-- Classes for input-notification: success, error, information, attention -->
                    </p>
                    <p>
                        <label>Price</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input" name="medium-input" />
                        <!-- <span class="input-notification error png_bg">Error message</span> -->
                    </p>
                    <p>
                        <label>Image</label>
            <form action="">
            <input type="file" id="myFile" name="filename">
            </form>
            </p>
            <p>
            <label>Category</label>              
            <select name="dropdown" class="small-input">
            <option value="1">Men</option>
            <option value="2">Women</option>
            <option value="3">Kids</option>
            <option value="4">Electronics</option>
            <option value="5">Sports</option>
            </select> 
            </p>
            <p>
            <label>Tags</label>
            <input type="checkbox" name="fashion" /> Fashion 
            <input type="checkbox" name="ecommerce" /> Ecommerce
            <input type="checkbox" name="shop" /> Shop
            <input type="checkbox" name="handbag" /> Hand Bag
            <input type="checkbox" name="laptop" /> Laptop
            <input type="checkbox" name="headphone" /> Headphone
            </p>
            <p>
            <label>Discription</label>
            <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
            </p>
            <p>
            <input class="button" type="submit" value="Submit" />
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
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
        <div>
            Attention notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
        </div>
    </div>
    
    <div class="notification information png_bg">
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
        <div>
            Information notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
        </div>
    </div>
    
    <div class="notification success png_bg">
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
        <div>
            Success notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
        </div>
    </div>
    
    <div class="notification error png_bg">
        <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
        <div>
            Error notification. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, sapien quis fermentum luctus, libero.
        </div>
    </div>-->
<!-- End Notifications -->
<?php include('footer.php'); ?>