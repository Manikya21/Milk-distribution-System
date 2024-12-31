
<?php
session_start();
$url=$_SERVER['REQUEST_URI'];
$_SESSION['url']=$url;
include "connection.php";
require_once "function.php";
if (isset($_COOKIE["username"])) {
    $uname = $_COOKIE["username"];
    $welcome = "<a href='logout.php'><span>$uname, Logout</span></a>";
} else {
    $welcome = "<a href='login.php'><span>Hello,Sign in</span></a>";
}


//product data fetch

if (!isset($_GET['id'])) {
    header("location:shop-list.php");
} else {
    $id = $_GET['id'];
    $sql = "select * from tblproductcategory where id=$id";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($query)
    ?>


    <!DOCTYPE html>
    <html lang="en-US" class="scheme_original">
        <head>
            <title> <?php echo $result['name']; ?> &#8211;Milky</title>
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
                                    <div class="top_panel_top_open_hours icons icon-clock-1">Mn-Sn: 8am - 8pm</div>
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
                                        if(isset($_SESSION['uid'])) {
                                            $uid=$_SESSION['uid'];
                                            $showcart="select count(*) as c from tblcart where customerid='$uid'";
                                            $cartres=$con->query($showcart);
                                            $cartrow=$cartres->fetch_array();
                                        }
                                        ?>
                                        <div class="column-1_5 contact_field contact_cart">
                                            <a href="cart.php">
                                                <span class="contact_icon icon-1"></span>
                                                <span class="contact_label contact_cart_label">cart:</span>
                                                <span class="cart_summa"><?php  if(isset($_SESSION['uid'])) { echo $cartrow['c']; }?>&nbsp;items</span>
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
                                            <li class="menu-item menu-item-has-children"><a href="about-2.php"><span>About us</span></a>

                                            </li>
                                            <!-- <li class="menu-item"><a href="farm.php"><span>Farm</span></a></li> -->

                                            <li class="menu-item current-menu-ancestor current-menu-parent"><a href="shop-list.php"><span>Products</span></a></li>
                                            <!--<li class="menu-item"><a href="grid.php"><span>Gallery</span></a></li>-->
                                            <li class="menu-item"><a href="contacts.php"><span>Contacts</span></a></li>
                                            <li class="menu-item menu-item-has-children"><?php echo $welcome ?>
                                                <ul>
                                                <li><a href="cart.php">Cart</a></li>
                                                </ul>
                                            </li>
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
                                        <li class="menu-item menu-item-has-children"><a href="about-2.php"><span>About us</span></a>

                                        </li>
                                        <!-- <li class="menu-item"><a href="farm.php"><span>Farm</span></a></li> -->

                                        <li class="menu-item"><a href="shop-list.php"><span>Products</span></a></li>
                                        <!--<li class="menu-item"><a href="grid.php"><span>Gallery</span></a></li>-->
                                        <li class="menu-item"><a href="contacts.php"><span>Contacts</span></a></li>
                                        <li class="menu-item menu-item-has-children"><?php echo $welcome ?>
                                            <ul>
                                                <li></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="panel_bottom"></div>
                        </div>
                        <div class="mask"></div>
                    </div>
                    <!-- Product Data Fetch-->
                    <?php
                    if ($result) {
                        $id = $result['id'];
                        //echo $id;
                        ?>

                        <div class="top_panel_title top_panel_style_1 title_present navi_present breadcrumbs_present scheme_original">
                            <div class="bg_cust_1 top_panel_title_inner top_panel_inner_style_1 title_present_inner breadcrumbs_present_inner">
                                <div class="content_wrap">
                                    <h1 class="page_title"><?php echo $result['name'] ?></h1>
                                    <div class="breadcrumbs">
                                        <a class="breadcrumbs_item home" href="index.php">Home</a>
                                        <span class="breadcrumbs_delimiter"></span>
                                        <a class="breadcrumbs_item all" href="shop-list.php">Shop</a>
                                        <span class="breadcrumbs_delimiter"></span>
                                        <a class="breadcrumbs_item cat_post" href="#"><?php echo $result['name'] ?></a>
                                        <!--<span class="breadcrumbs_delimiter"></span>
                                        <span class="breadcrumbs_item current">Parmesan Cheese</span>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page_content_wrap page_paddings_yes">
                            <div class="content_wrap">
                                <div class="content">
                                    <article class="post_item post_item_single post_item_product">
                                        <nav class="woocommerce-breadcrumb">
                                            <a href="index.php">Home</a>&nbsp;&#47;&nbsp;
                                            <a href="shop-list.php">shop</a>&nbsp;&#47;&nbsp;
                                            <a href="#"><?php echo $result['name']; ?></a>
                                        </nav>
                                        <?php 
                                        if ($_SESSION['msg']==1)
                                        {
                                        ?>
                                        <div style="margin-left: 45% ; margin: auto; color: rgb(00,100,400);font-size:23px;"><?php echo "Thank you!  Product is added in your cart.";$_SESSION['msg']="";?></div><br>
                                        <?php }
                                        else{ ?>
                                            <div style="margin-left: 45% ; margin: auto; color: rgb(400,00,00);font-size:23px;"><?php echo $_SESSION['msg'];$_SESSION['msg']="";?></div><br>
                                        <?php } ?>
                                        <div class="product has-post-thumbnail first instock purchasable">
                                            
                                            <div class="images">
                                                <a href="<?php echo $result['imagepath']; ?>" class="woocommerce-main-image zoom"
                                                   title="" data-rel="prettyPhoto">
                                                    <img width="600" height="765" src="admin/<?php echo $result['imagepath']; ?>" class="attachment-shop_single size-shop_single " alt=""/></a>
                                            </div>
                                            <div class="summary entry-summary">
                                                <h1 class="product_title entry-title"><?php echo $result['name'] ?></h1>
                                                <div class="woocommerce-product-details__short-description">
                                                    <p>
                                                        <?php echo $result['description']; ?>
                                                    </p>
                                                </div>
                                                <form class="variations_form cart" method="post"
                                                      enctype='multipart/form-data' data-product_id="<?php echo $id; ?>"
                                                      action="addtocart.php">
                                                    <table class="variations">
                                                        <tbody>
                                                            <tr>
                                                                <td class="label">
                                                                    <label>Weight</label>
                                                                </td>
                                                                <td class="value">
                                                                    <select required name="ddweight" id="ddweight">
                                                                        
                                                                        <?php
                                                                            $price="Product is not Available.";
                                                                            $flag=0;
                                                                        $sql2 = "SELECT tblproduct.*,tblmeasurement.type from tblproduct inner join tblmeasurement on tblproduct.measurementid=tblmeasurement.id WHERE tblproduct.productcategoryid=$id and expire_date between CURRENT_DATE and expire_date  and quntity>0 ";
                                                                        $query2 = mysqli_query($con, $sql2);
                                                                        if (mysqli_num_rows($query2) > 0) {
                                                                            $price="";
                                                                            while ($result2 = mysqli_fetch_array($query2)) {
                                                                                $totalquntity=$result2['quntity'];
                                                                           
                                                                                if (!empty($result2['type'])) {
                                                                                    ?>
                                                                                    <option value="<?php echo $result2['id']; ?>"><?php echo $result2['type']; ?></option>
                                                                                    <?php
                                                                                    $type .="<p><b><span>".$result2['type']."&nbsp;</span>&nbsp;</b></p>";
                                                                                    $price .="<p><b><span>₹".$result2['price']."&nbsp;</span>&nbsp;</b></p>";
                                                                                    $quantity .="<p><b><span>".$result2['quntity']."&nbsp;</span></b></p>";
                                                                                    $flag++;
                                                                                }
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                            <option selected disabled><?php echo "Product Not Available" ?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                            <?php   if (mysqli_num_rows($query2) > 0){ ?> 
                                                            <td class="label">
                                                                    <label>Quantity</label>
                                                                </td>
                                                                <td>
                                                                    <input type="text" id="b"
                                                                           min="1" max="20" name="qty" value="" placeholder="Select Quantity"
                                                                           title="Qty" requered="">
                                                                </td>
                                                            </tr>
                                                            <tr>

                                                                <th> TYPE</th>
                                                                <th>AMOUNT</th>
                                                                <th>QUANTITY</th>
                                                            </tr><center>     
                                                            <tr>
                                                                <!-- <td class="label">
                                                                    <label>Price & Avalability</label>
                                                                </td> -->
                                                                <td><div id="show_price"> <?php echo $type; ?></div></td>
                                                                <td><div id="show_price" style="padding-left:90px"> <?php echo $price; ?></div></td>
                                                                <td><div id="show_price"> <?php echo $quantity; ?></div></td>
<?php } ?>
                                                            </tr>  </center>
                      
                                                        </tbody>

                                                        <?php //echo $measureData;     ?>
                                                    </table>
                                                    <br><br>
                                                    <div class="single_variation_wrap">
                                                        <div class="woocommerce-variation single_variation">
                                                            <div class="form-control">
                                                                <?php if($flag!="0"){?>
                                                                <input type="submit" class="single_add_to_cart_button button alt" title="Add to Cart" name="btnCart" value="Add to Cart">
                                                                <?php }?>
                                                            </div>
                                                            <br><br>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="product_meta">

                                                        <span class="posted_in">Category: <a href="#" rel="tag"><?php echo $result['name'] ?></a></span>

                                                        <span class="product_id">Product ID: <span><?php echo $result['id'] ?></span></span>
                                                    </div>

                                            </div>
                                            </form>
                                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                                <ul class="tabs wc-tabs" role="tablist">
                                                    <li class="description_tab" id="tab-title-description" role="tab"
                                                        aria-controls="tab-description">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                    <li class="additional_information_tab"
                                                        id="tab-title-additional_information" role="tab"
                                                        aria-controls="tab-additional_information">
                                                        <a href="#tab-additional_information">Additional information</a>
                                                    </li>

                                                </ul>
                                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab"
                                                     id="tab-description" role="tabpanel"
                                                     aria-labelledby="tab-title-description">
                                                    <h2>Description</h2>
                                                    <p><?php echo $result['description']; ?></p>
                                                </div>
                                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab"
                                                     id="tab-additional_information" role="tabpanel"
                                                     aria-labelledby="tab-title-additional_information">
                                                    <h2>Additional information</h2>
                                                    <table class="shop_attributes">
                                                        <tr>
                                                            <th>Weight</th>
                                                            <td>
                                                                <p>1 lb, 3 lb, 5 lb</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fat</th>
                                                            <td>
                                                                <p>2%, 3.5%, Low Fat</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        <div class="sc_section_button sc_item_button">
                            <a href="shop-list.php" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large">view all products</a>
                        
                    </div> 
                                    </article>
                                </div>
                            </div>
                        </div>
                    <?php } else { echo"<h1>Product Not Available</h1>";}?>
                                        
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
<?php }
?>