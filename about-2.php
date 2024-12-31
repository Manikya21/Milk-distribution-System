<?php
session_start();
$_SESSION['uid']="";
    require_once "connection.php";?>
<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
   <?php
    if (isset($_COOKIE["username"]))
        {
        $uname=$_COOKIE["username"];
        $welcome="<a href='logout.php'><span>$uname, Logout</span></a>";
        
    } else {
        $welcome="<a href='login.php'><span>Hello,Sign in</span></a>";
    }
    ?> 
    <head>
        <title>About 2 &#8211; Dairy Farm</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Average|Droid+Serif:400,700|Libre+Baskerville:400,400i,700|Open+Sans:300,400,600,700,800|Oswald:300,400,700|Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext' type='text/css' media='all' />
        <link rel='stylesheet' href='css/layout.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/core.animation.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/theme.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/woo/plugin.woocommerce.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom.css' type='text/css' media='all' /> 
        <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/comp/comp.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/prettyPhoto/prettyPhoto.css' type='text/css' media='all' />

    </head>

    <body class="page ab2 body_style_wide body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide vc_responsive">

        <a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.php" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

        <div class="body_wrap">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                <header class="top_panel_wrap top_panel_style_1 scheme_original"  data-animation="animated fadeInDown normal">
                    <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
                        <div class="top_panel_top">
                            <div class="content_wrap clearfix">
                                <div class="top_panel_top_contact_area icons icon-phone-1">+91 6362510146</div>
                                <div class="top_panel_top_open_hours icons icon-clock-1">Mn-Sn: 8am - 8pm.</div>
                                <div class="top_panel_top_user_area">
                                    <div class="top_panel_top_socials"
data-animation="animated fadeInDown normal">
                                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
                                            <div class="sc_socials_item">
                                                <a href="" target="_blank" class="social_icons social_twitter">
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
                                    <ul id="menu_user" class="menu_user_nav"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="top_panel_middle">
                            <div class="content_wrap">
                                <div class="columns_wrap columns_fluid">
                                    <div class="column-4_5 contact_logo">
                                        <div class="logo">
                                            <a href="index.php">
                                                <img src="image/logo2.png" class="logo_main" alt="" width="239" height="59">
                                            </a>
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
                                        <li class="menu-item current-menu-ancestor current-menu-parent"><a href="about-2.php"><span>About us</span></a>

                                        </li>
                                        <!-- <li class="menu-item"><a href="farm.php"><span>Farm</span></a></li> -->

                                        <li class="menu-item"><a href="shop-list.php"><span>Products</span></a></li>
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
                                    <li class="menu-item"><a href="about-2.php"><span>About us</span></a>

                                    </li>
                                    <!-- <li class="menu-item"><a href="farm.php"><span>Farm</span></a></li> -->

                                    <li class="menu-item"><a href="shop-list.php"><span>Products</span></a></li>
                                    <li class="menu-item"><a href="grid.php"><span>Gallery</span></a></li>
                                    <li class="menu-item"><a href="contacts.php"><span>Contacts</span></a></li>
                                    <li class="menu-item menu-item-has-children"><?php echo $welcome ?>
                                        <ul>
                                            
                                            <li><a href="cart.php">Cart</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="panel_bottom">
                        </div>
                    </div>
                    <div class="mask"></div>
                </div>
                <div class="top_panel_title top_panel_style_1  title_present breadcrumbs_present scheme_original">
                    <div  class="bg_cust_1 top_panel_title_inner top_panel_inner_style_1  title_present_inner breadcrumbs_present_inner">
                        <div class="content_wrap"  data-animation="animated fadeInLeft normal">
                            <h1 class="page_title">PRESIDENCY COLLEGE,BANGALORE<b> 580027</b></h1><br>
                <p class="page_title" style="font-size:25px;color:rgb(500,150,150)">Under Gudience of<p><i><p class="page_title" style="font-size:40px;color:rgb(500,50,50)">~DR.JITHA JANARDHANAN~</p></i>

                            <!-- <div class="breadcrumbs"><a class="breadcrumbs_item home" href="index.php">Home</a> <span class="breadcrumbs_delimiter"></span> <span class="breadcrumbs_item current">About Us</span></div> -->
                        </div>
                    </div>
                </div>
                <div class="page_content_wrap page_paddings_no">
                    <div class="content_wrap">
                        <div class="content">
                            <article class="post_item post_item_single post_featured_default post_format_standard page type-page hentry">
                                <section class="post_content">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="sc_section sc_section_block margin_bottom_huge aligncenter" data-animation="animated fadeInUp normal">
                                                        <div class="sc_section_inner">
                                                            <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">About Us<span></span></h2>
                                                            <div class="sc_section_content_wrap">
                                                                <div class="sc_promo sc_promo_size_large">
                                                                    <div class="sc_promo_inner">
                                                                    <div class="sc_promo_image" style="background-image:url(images/photo/aboutus.jpg);width:50%;left: 0;"></div>
                                                                        <div class="sc_promo_block sc_align_left">
                                                                            <div class="sc_promo_block_inner">
                                                                                <div class="sc_promo_content">
                                                                                    <div id="sc_tabs_215" class="sc_tabs sc_tabs_style_1" data-active="0">
                                                                                        <ul class="sc_tabs_titles">
                                                                                            <li class="sc_tabs_title">
                                                                                                <a href="#sc_tab_315_1_19" class="theme_button" id="sc_tab_315_1_19_tab">~2023</a>
                                                                                            </li>
                                                                                            <li class="sc_tabs_title">
                                                                                                <a href="#sc_tab_315_2_67" class="theme_button" id="sc_tab_315_2_67_tab">June</a>
                                                                                            </li>
                                                                                            <li class="sc_tabs_title">
                                                                                                <a href="#sc_tab_473_0" class="theme_button" id="sc_tab_473_0_tab">July</a>
                                                                                            </li>
                                                                                            <li class="sc_tabs_title">
                                                                                                <a href="#sc_tab_649_10" class="theme_button" id="sc_tab_649_10_tab">August</a>
                                                                                            </li>
                                                                                            <!-- <li class="sc_tabs_title">
                                                                                                <a href="#sc_tab_625_4" class="theme_button" id="sc_tab_625_4_tab">2022</a>
                                                                                            </li> -->
                                                                                        </ul>
                                                                                        <div id="sc_tab_315_1_19" class="sc_tabs_content odd first">
                                                                                            <div class="sc_section aligncenter">
                                                                                                <div class="sc_section_inner">
                                                                                                    <div class="sc_section_content_wrap">
                                                                                                        <h4 class="sc_title sc_title_regular cmrg_1">Our Story</h4>
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <p>For Better Milk we buy a one cow. Then we started increasing  milk collection & Distribution.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="sc_tab_315_2_67" class="sc_tabs_content even">
                                                                                            <div class="sc_section aligncenter">
                                                                                                <div class="sc_section_inner">
                                                                                                    <div class="sc_section_content_wrap">
                                                                                                        <h4 class="sc_title sc_title_regular cmrg_1">Starting a Project</h4>
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <p>In 2023, We think a new  dairy product distribution management project.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="sc_tab_473_0" class="sc_tabs_content odd">
                                                                                            <div class="sc_section aligncenter">
                                                                                                <div class="sc_section_inner">
                                                                                                    <div class="sc_section_content_wrap">
                                                                                                        <h4 class="sc_title sc_title_regular cmrg_1">The Best Milk in the sale</h4>
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <p>We Started distributing our product.Our milk is pure so everyone reference to our milk in BANGALORE.</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="sc_tab_649_10" class="sc_tabs_content even">
                                                                                            <div class="sc_section aligncenter">
                                                                                                <div class="sc_section_inner">
                                                                                                    <div class="sc_section_content_wrap">
                                                                                                        <h4 class="sc_title sc_title_regular cmrg_1">Online Shop and Shipment</h4>
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <p> We  will launch our website and giving online delivery in particular area in BANGALORE district. </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="sc_tab_625_4" class="sc_tabs_content odd">
                                                                                            <div class="sc_section aligncenter">
                                                                                                <div class="sc_section_inner">
                                                                                                    <div class="sc_section_content_wrap">
                                                                                                        <h4 class="sc_title sc_title_regular cmrg_1">Online Shop and Shipment</h4>
                                                                                                        <div class="wpb_text_column wpb_content_element ">
                                                                                                            <div class="wpb_wrapper">
                                                                                                                <p> We will launch our website and giving door to door delivery in particular area in Bangalore City. </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_empty_space h_11r">
                                                                                        <span class="vc_empty_space_inner"></span>
                                                                                    </div>
                                                                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small">read more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
            <div  class="bg_cust_1 top_panel_title_inner top_panel_inner_style_1 title_present_inner breadcrumbs_present_inner" style="	overflow:hidden;background-size: cover;padding: 1em ;">
                <div class="content_wrap"  data-animation="animated fadeInLeft normal">
                <h1 class="page_title">Kle's GH BCA College, Haveri</h1><br>
                <p class="page_title" style="font-size:25px;color:rgb(500,150,150)">Under Gudience of<p><i><p class="page_title" style="font-size:40px;color:rgb(500,50,50)">~Abhishek Karur~</p></i>
  
                </div>
            </div>
        </div> -->
        <div class="page_content_wrap page_paddings_yes">
            <div class="content_wrap">
                <div class="content">
                    <article class="post_item post_item_single_team post_featured_right post_format_standard team type-team has-post-thumbnail hentry">
                        <section class="post_featured single_team_post_featured">
                            <div class="post_thumb" data-image="image/man.jpg" data-title="SRIRAM T">
                                <a class="hover_icon hover_icon_view" href="image/man.jpg" title="SRIRAM T">
                                <img alt="" src="">
                                <!-- <img alt="" src="images/team-3-770x434.jpg"> -->
                                </a>
                            </div>
                            <div class="socials_single_team">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
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
                                </div>
                            </div>
                        </section>
                        <section class="single_team_post_description">
                            <h2 class="team_title">SRIRAM T</h2>
                            <h6 class="team_position">Executer</h6>
                            <div class="team_meta">
                            <p>E-mail: <a href="https://sriramtalluri5@gmail.com" class="__cf_email__" data-cfemail="9cf5f2faf3dce5f3e9eeeff5e8f9b2fff3f1" taget="_blank">SRIRAMTALLURI5@gmail.com</a></p>
                            <p>Student ID: 22P01082 </p>
                            </div>
                            <div class="team_brief_info">
                                <h5 class="team_brief_info_title">Brief info</h5>
                                <div class="team_brief_info_text">
                                    <p>
                                    The dairy industry is an important sector in agriculture and food production. A dairy 
                                    management system is a web application that assists in the management of dairy farms and the 
                                    monitoring of financial transactions. This system is designed to connect customers and 
                                    distributors for the purpose of buying and selling milk products. The system provides a user friendly interface for customers to browse and purchase milk and milk products, as well as a 
                                    streamlined process for distributors to manage their inventory and orders                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="post_content">
                        </section>
                    </article>
                </div>
            </div>

        <div class="page_content_wrap page_paddings_yes">
            <div class="content_wrap">
                <div class="content">
                    <article class="post_item post_item_single_team post_featured_right post_format_standard team type-team has-post-thumbnail hentry">
                        <section class="post_featured single_team_post_featured">
                            <div class="post_thumb" data-image="image/.jpg" data-title="SRIRAM">
                                <a class="hover_icon hover_icon_view" href="image/sm.jpg" title="SRIRAM">
                                    <img alt="" src="image/.jpg">
                                </a>
                            </div>
                            <div class="socials_single_team">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
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
                                </div>
                            </div>
                        </section>
                        <section class="single_team_post_description">
                            <h2 class="team_title"></h2>
                            <h6 class="team_position"></Co-Exicuter></h6>
                            <div class="team_meta">
                                <p><a href="" class="__cf_email__" data-cfemail="9cf5f2faf3dce5f3e9eeeff5e8f9b2fff3f1"></a></p>
                                <p> </p>
                        </div>
                            <div class="team_brief_info">
                                <h5 class="team_brief_info_title"></h5>
                                <div class="team_brief_info_text">
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </section>
                        <section class="post_content">
                        </section>
                    </article>
                </div>
            </div>
        </div>

                                    <div class="vc_row-full-width"></div>
                                </section>
                            </article>
                            <section class="related_wrap related_wrap_empty"></section>
                        </div>
                    </div>
                </div>
                <?php include_once "footer.php";?>
            </div>
        </div>

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
        <div class="custom_html_section"></div>

        <script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script type='text/javascript' src='js/vendor/jquery/jquery.js'></script>
        <script type='text/javascript' src='js/vendor/jquery/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='js/custom/custom.js'></script>
        <script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
        <script type='text/javascript' src='js/vendor/jquery/js.cookie.min.js'></script>
        <script type='text/javascript' src='js/vendor/superfish.js'></script>
        <script type='text/javascript' src='js/custom/core.utils.js'></script>
        <script type='text/javascript' src='js/custom/core.init.js'></script>
        <script type='text/javascript' src='js/custom/init.js'></script>
        <script type='text/javascript' src='js/custom/core.debug.js'></script>
        <script type='text/javascript' src='js/custom/embed.min.js'></script>
        <script type='text/javascript' src='js/custom/shortcodes.js'></script>
        <script type='text/javascript' src='js/vendor/comp/comp_front.min.js'></script>
        <script type='text/javascript' src='js/vendor/ui/core.min.js'></script>
        <script type='text/javascript' src='js/vendor/ui/widget.min.js'></script>
        <script type='text/javascript' src='js/vendor/ui/tabs.min.js'></script>
        <script type='text/javascript' src='js/vendor/isotope.pkgd.min.js'></script>
        <script type='text/javascript' src='js/vendor/prettyPhoto/jquery.prettyPhoto.min.js'></script>

    </body>

</html>
