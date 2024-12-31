<?php
session_start();
$url=$_SERVER['REQUEST_URI'];
$_SESSION['url']=$url;
$uid=$_SESSION['uid'];
require_once "function.php";
/**
 * Created by PhpStorm.
 * User: priyanklad
 * Date: 2019-03-25
 * Time: 10:44
 */
require_once "./connection.php";


if (isset($_SESSION["username"])) {
    //validation();
    $uname = $_SESSION["username"];
    $uid=$_SESSION["uid"];
    $welcome = "<a href='logout.php'><span>$uname, Logout</span></a>";
} else {
    header("location:login.php");
    $welcome = "<a href='login.php'><span>Hello,Sign in</span></a>";

}


//product data fetch
?>
    <!DOCTYPE html>
    <html lang="en-US" class="scheme_original">
    <head>
        <title>Cart &#8211; details</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Average|Droid+Serif:400,700|Libre+Baskerville:400,400i,700|Open+Sans:300,400,600,700,800|Oswald:300,400,700|Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext' type='text/css' media='all' />
        <link rel='stylesheet' href='css/layout.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/ui/default-skin.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/prettyPhoto/ver/prettyPhoto.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/woo/woocommerce-layout.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/woo/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
        <link rel='stylesheet' href='js/vendor/woo/woocommerce.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/core.animation.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/woo/plugin.woocommerce.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/bootstrap-table.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/bootstrap.css' type='text/css' media='all' />

    </head>

    <body class="product-template-default single single-product woocommerce woocommerce-page body_style_wide body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide vc_responsive">

    <a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.php" data-separator="yes"></a>
    <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap top_panel_style_1 scheme_original"  data-animation="animated fadeInDown normal">
                <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
                    <div class="top_panel_top">
                        <div class="content_wrap clearfix">
                            <div class="top_panel_top_contact_area icons icon-phone-1">+91 6362510146 </div>
                            <div class="top_panel_top_open_hours icons icon-clock-1">Mn-Sn: 8am - 8pm.</div>
                            <div class="top_panel_top_user_area">
                                <div class="top_panel_top_socials"
data-animation="animated fadeInDown normal">
                                    <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_twitter">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_facebook">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_gplus-1">
                                                <span class="icon-gplus-1"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item">
                                            <a href="#" target="_blank" class="social_icons social_linkedin">
                                                <span class="icon-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul id="menu_user" class="menu_user_nav">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="columns_wrap columns_fluid">
                                <div class="column-4_5 contact_logo">
                                    <div class="logo">
                                        <a href="index.php"><img src="image/logo2.png" class="logo_main" alt="" width="239" height="59"></a>
                                    </div>
                                </div>

                                <?php
                                $uid=$_SESSION['uid'];
                                $showcart="select count(*) as c from tblcart where customerid='$uid'";
                                $cartres=$con->query($showcart);
                                $cartrow=$cartres->fetch_array();
                                ?>
                                <div class="column-1_5 contact_field contact_cart">
                                    <a href="cart.php">
                                        <span class="contact_icon icon-1"></span>
                                        <span class="contact_label contact_cart_label">cart:</span>
                                        <span class="cart_summa"><?php echo $cartrow['c']; ?>&nbsp;items</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top_panel_bottom" data-animation="animated fadeInDown normal">
                        <div class="content_wrap clearfix">
                            <nav class="menu_main_nav_area menu_hover_fade">
                                <ul id="menu_main" class="menu_main_nav">
                                    <li class="menu-item"><a href="index.php"><span>Home</span></a>
                                    </li>
                                    <li class="menu-item"><a href="about-2.php"><span>About us</span></a>

                                    </li>
                                    <!-- <li class="menu-item"><a href="farm.php"><span>Farm</span></a></li> -->

                                    <li class="menu-item"><a href="shop-list.php"><span>Products</span></a></li>
                                    <li class="menu-item"><a href="grid.php"><span>Gallery</span></a></li>
                                    <li class="menu-item"><a href="contacts.php"><span>Contacts</span></a></li>
                                    <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><?php echo $welcome ?></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="index.php">
                            <img src="image/logo2.png" class="logo_main" alt="" width="239" height="59">
                        </a>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                            <ul id="menu_mobile" class="menu_main_nav">
                                <li class="menu-item"><a href="login.php"><span>Login</span></a></li>
                                <li class="menu-item"><a href="index.php"><span>Home</span></a></li>
                                <li class="menu-item"><a href="about-2.php"><span>About us</span></a>

                                </li>
                                <li class="menu-item"><a href="farm.php"><span>Farm</span></a></li>

                                <li class="menu-item"><a href="shop-list.php"><span>Products</span></a></li>
                                <li class="menu-item"><a href="grid.php"><span>Gallery</span></a></li>
                                <li class="menu-item"><a href="contacts.php"><span>Contacts</span></a></li>
                                <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><?php echo $welcome ?></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="panel_bottom"></div>
                </div>
                <div class="mask"></div>
            </div>
            <div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
                <div  class="bg_cust_1 top_panel_title_inner top_panel_inner_style_1 title_present_inner breadcrumbs_present_inner">
                    <div class="content_wrap">
                        <h1 class="page_title">CART</h1>
                        <div class="breadcrumbs">
                            <a class="breadcrumbs_item home" href="index.php">Home</a>
                            <span class="breadcrumbs_delimiter"></span>
                            <span class="breadcrumbs_item current">cart</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Data Fetch-->
            <?php

                $sql="SELECT C.id, PC.imagepath, PC.name, M.type, P.price, C.qty, P.price*C.qty as 'total', P.quntity from tblCart C inner join tblproduct P on C.productid=P.id inner join tblproductcategory PC on P.productcategoryid = PC.id inner join tblmeasurement M on P.measurementid= M.id where C.customerid=$uid";
                $cartRES=$con->query($sql);
                $total_amt=0;
            ?>
            

            <?php

                $order_sql="select B.no, DATE_FORMAT(B.date,'%d/%m/%Y') as date, PC.name, M.type, C.qty, S.fname, B.status from tblcustomerorder C inner join tblproduct P on C.productid = P.id inner join tblproductcategory PC on P.productcategoryid = PC.id inner join tblmeasurement M on P.measurementid = M.id INNER JOIN tblbill B on C.billno = B.no  INNER JOIN tblcustomer S on B.customerid = S.id where S.id = ' $uid' and  B.status = 0 ORDER BY B.no ASC";
                $order_query1=$con->query($order_sql);
                $num_order1=mysqli_num_rows($order_query1);
            ?>
            <?php
				$order_sql2="select B.no, DATE_FORMAT(B.date,'%d/%m/%Y') as date, PC.name, M.type, C.qty, S.fname, B.status from tblcustomerorder C inner join tblproduct P on C.productid = P.id inner join tblproductcategory PC on P.productcategoryid = PC.id inner join tblmeasurement M on P.measurementid = M.id INNER JOIN tblbill B on C.billno = B.no  INNER JOIN tblcustomer S on B.customerid = S.id where S.id = ' $uid' and B.status = 1  ORDER BY B.no ASC";
                $order_query2=$con->query($order_sql2);
                $num_order2=mysqli_num_rows($order_query2);

			?>
            <?php
                $order_sql3="select B.no,C.billno, DATE_FORMAT(B.date,'%d/%m/%Y') as date, PC.name, M.type, C.qty, S.fname, B.status from tblcustomerorder C inner join tblproduct P on C.productid = P.id inner join tblproductcategory PC on P.productcategoryid = PC.id inner join tblmeasurement M on P.measurementid = M.id INNER JOIN tblbill B on C.billno = B.no  INNER JOIN tblcustomer S on B.customerid = S.id where S.id = ' $uid' and B.status = 2  ORDER BY B.no ASC";
                $order_query3=$con->query($order_sql3);
                $num_order3=mysqli_num_rows($order_query3);

            ?>
            

            <div class="page_paddings_yes">
                <div class="content_wrap">
                    <div class="content_container">
                        <article class="post_item post_item_single post_featured_default post_format_standard page type-page hentry">
                            <section class="post_content">
                                <div class=" wpb_row vc_row-fluid">


                                    <div class="wpb_wrapper">
                                        <h2 class="sc_title sc_title_regular">Cart Details</h2>
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div class="sc_table margin_bottom_medium">
                                                    <form class="sc_form" action="#" method="post">
                                                        <?php
                                                            if(!$count_row=mysqli_num_rows($cartRES)>0)
                                                            {
                                                                ?>
                                                                <h3><label>Your Bag is empty.</label></h3>
                                                                <a href="shop-list.php" class="button icon-basket"> &nbsp;Continue Shopping</a>
                                                                <?php
                                                            }else {
                                                        ?>
                                                                <div style="margin-left: 45% ; margin: auto; color: red;"><?php echo $_SESSION['msg'];$_SESSION['msg']="";?></div>
                                                            
                                                                <table class="shop_table_responsive">
                                                        <tbody>
                                                        <tr>
                                                            <th><label>Sr.No.</label></th>
                                                            <th><label>Image</label></th>
                                                            <th><label>Product Name</label></th>
                                                            <th><label>Product Type</label></th>
                                                            <th><label>Purchase Date</label></th>
                                                            <th><label>Qty</label></th>
                                                            <th><label>Rate</label></th>
                                                            <th><label>Total</label></th>
                                                            <th><label>Action</label></th>
                                                        </tr>
                                                        <?php
                                                            $count=1;
                                                            $flag=0;
                                                            while ($row=$cartRES->fetch_array()){
                                                        ?>
                                    
                                                        <tr align="center">
                                                            <?php
                                                             $qnt=$row["qty"];
                                                             $qnt2=$row["quntity"];
                                                             ?>
                                                             <td><?php echo $count;?></td>
                                                            <td><img src="admin/<?php echo $row['imagepath']?>" width="54" height="54" style="border-radius: 50%"></td>
                                                            <td><label><?php echo $row['name'];?></label></td>
                                                            <td><label><?php echo $row['type'];?></label></td>
                                                            <td><label><?php echo date("d-m-Y");?></label></td>
                                                            <?php  
                                                            if($qnt>$qnt2){ 
                                                             $flag++
                                                            ?>
                                                            <td><label style="color:red"><?php echo $row['qty'];?>
                                                            <!-- <?php echo $qnt2;?></label></td> -->
                                                            <?php  }
                                                            else{ 
                                                            ?>                                                           
                                                            <td><label><?php echo $row['qty'];?></label></td>
                                                            <?php } 
                                                            ?>
                                                            <td><label>₹<?php echo $row['price'];?></label></td>
                                                            <td><label>₹<?php
                                                                    $total=$row['total'];
                                                            $rounded = number_format($total, 2);
                                                            echo $rounded;
                                                            echo "   ";  $total_amt=$total_amt+$row['total'];?></label></td>
                                                            <td><a href="delete-to-cart.php?did=<?php echo $row['id'];?>" class="contact_icon icon-trash"></a>
                                                                <!--&nbsp;&nbsp;&nbsp;<a href="#" class="icon-note-light"></a>-->
                                                            </td>
                                                        </tr>
                                                        <?php $count++;}?>
                                                        <!--tr>
                                                            <td colspan="7" align="right">Shipping Charge:</td>
                                                            <td align="center">₹0.00</td>
                                                            <td></td>
                                                        </tr-->
                                                        
                                                        <tr>
                                                            <td colspan="7" align="right">Total Amount:</td>
                                                            <td align="center">₹<?php
							                                    $total_amt = number_format($total_amt, 2);
																echo $total_amt; ?></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td colspan="4" align="left"><a href="shop-list.php" class="button icon-basket"> &nbsp;Continue Shopping</a></td>
                                                           <?php
                                                            if($flag==0){ 
                                                           ?>
                                                            <td colspan="5" align="right"><a href="checkout.php" class="button icon-dropbox"> Process to Checkout</a></td>
                                                           <?php
                                                           }
                                                           else{
                                                            $_SESSION["msg"]="Stock is less Your chosed item";
                                                            ?>
                                                            <td colspan="5" align="right" ><a href="cart.php" class="button icon-dropbox" style="background-color:red"> Process to Checkout</a></td>
                                                           <?php }
                                                            ?>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                        <?php }?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                          <center>  <h2>MY ORDERS</h2>
                            <!--div class="col-md-12 col-xs-12" style="margin: auto;padding: 5%"-->
                                <?php
                                    echo $_SESSION['msg'];
                                    if($num_order1 < 1 && $num_order2 < 1 ){
                                        echo "<h5>NO CUSTOMER ORDER.</h5>";
                                    }
                                    else{
                                    ?>
                                        <table class="table table-hover">
                                            <thead >
                                                <th>sr. No</th>
                                                <th>Bill No.</th>
                                                <th>Bill Date</th>
                                                <th>Product Name</th>
                                                <th>Product Type</th>
                                                <th>Quantity</th>
                                                <th>Action</th>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $count=1;
                                                while ($row=mysqli_fetch_array($order_query1)){
                                                    $billno=$row['no'];
                                                       
                                                      
                                      
                                                    echo "<tr><h1>
                                                            <td>$count</td>
                                                            <td>".$row['no']."</td>
                                                            <td>".$row['date']."</td>
                                                            <td>".$row['name']."</td>
                                                            <td>".$row['type']."</td>
                                                            <td>".$row['qty']."</td>
                                                            <td>Pending</td>
                                                            </h1></tr>";
                                                          $count++;

                                                    
                                                
                                            ?>
                                            <?php
                                                }
                                            ?>

                                        <?php
                                            
                                                while ($row=mysqli_fetch_array($order_query2)){
                                                    $billno=$row['no'];
                                                       
                                                      
                                      
                                                    echo "<tr><h1>
                                                            <td>$count</td>
                                                            <td>".$row['no']."</td>
                                                            <td>".$row['date']."</td>
                                                            <td>".$row['name']."</td>
                                                            <td>".$row['type']."</td>
                                                            <td>".$row['qty']."</td>
                                                            <td><a href='delivery_status.php?billno=$billno'>Deliverd</a></td>
                                                            </h1></tr>";
                                                          $count++;

                                                    
                                                
                                            ?>
                                              <?php
                                    }
                                    ?>

                                            </tbody>

                                            
                                  
                                        </table></center>
                                  
                            </div>
                        </div>
                    <!--/div-->
                </div>
            </div>
                <?php 
                }
                ?>

            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body easypiechart-panel">
                          <center>  <h3>DELIVERED ORDERS</h3>
                            <div class="col-md-12 col-xs-12" style="margin: auto;padding: 5%">
                                <?php
                                    
                                    if($num_order3 < 1){

                                        echo "<h4>NO  ORDERS.</h4>";
                                    }
                                    else{
                                    ?>
                                        <table class="table table-hover">
                                            <thead >
                                                <th>SR. No</th>
                                                <th>Bill No.</th>
                                                <th>Bill Date</th>
                                                <th>Product Name</th>
                                                <th>Product Type</th>
                                                <th>Quantity</th>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $count=1;
                                                while ($row=mysqli_fetch_array($order_query3)){
                                                    $billno=$row['no'];
                                                    echo "<tr>
                                                            <td>$count</td>
                                                            <td>".$row['no']."</td>
                                                            <td>".$row['date']."</td>
                                                            <td>".$row['name']."</td>
                                                            <td>".$row['type']."</td>
                                                            <td>".$row['qty']."</td>
                                                            <td><a href='./download/invoice".$row['billno'].".pdf'>View Bill</a></td>
                                                            </tr>";
                                                          $count++;
                                                }
                                            ?>
                                            </tbody>
                                           
                                        </table>
                                        </center>
                                    <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <?php include_once "footer.php";?>
        </div>
    </div>

    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
    <div class="custom_html_section"></div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>
    <script type='text/javascript' src='js/vendor/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/vendor/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/custom/custom.js'></script>
    <script type='text/javascript' src='js/vendor/woo/add-to-cart.min.js'></script>
    <script type='text/javascript' src='js/vendor/woo/woocommerce-add-to-cart.js'></script>
    <script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
    <script type='text/javascript' src='js/vendor/prettyPhoto/ver/jquery.prettyPhoto.min.js'></script>
    <script type='text/javascript' src='js/vendor/prettyPhoto/jquery.prettyPhoto.init.min.js'></script>
    <script type='text/javascript' src='js/vendor/ui/jquery.zoom.min.js'></script>
    <script type='text/javascript' src='js/vendor/comp/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='js/vendor/woo/single-product.min.js'></script>
    <script type='text/javascript' src='js/vendor/ui/jquery.blockUI.min.js'></script>
    <script type='text/javascript' src='js/vendor/jquery/js.cookie.min.js'></script>
    <script type='text/javascript' src='js/vendor/woo/woocommerce.min.js'></script>
    <script type='text/javascript' src='js/vendor/woo/cart-fragments.min.js'></script>
    <script type='text/javascript' src='js/vendor/superfish.js'></script>
    <script type='text/javascript' src='js/custom/core.reviews.js'></script>
    <script type='text/javascript' src='js/custom/core.utils.js'></script>
    <script type='text/javascript' src='js/custom/core.init.js'></script>
    <script type='text/javascript' src='js/custom/init.js'></script>
    <script type='text/javascript' src='js/custom/comment-reply.min.js'></script>
    <script type='text/javascript' src='js/custom/core.debug.js'></script>
    <script type='text/javascript' src='js/custom/embed.min.js'></script>
    <script type='text/javascript' src='js/custom/shortcodes.js'></script>
    <script type='text/javascript' src='js/vendor/underscore.min.js'></script>
    <script type='text/javascript' src='js/custom/util.min.js'></script>
    <script type='text/javascript' src='js/vendor/woo/add-to-cart-variation.min.js'></script>

    </body>

    </html>
