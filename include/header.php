
<?php include_once("dbconnect.php");?>

<?php
$page_link = pathinfo(curPageURL(),PATHINFO_FILENAME);
function curPageURL() {
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>vsoft technologies</title>
    <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favitest.png">

    <!-- CSS Style -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        
.banner{ background-image: url("images/slider/VsoftBannerP.png");
                background-repeat: no-repeat;
                background-size: cover; 
                background-position: center;
            }
    </style>
</head>

<body class="contact_us_page">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<div id="page">

    <!-- Header -->
    <header id="header"  >
        <div style="background-color: #f5f5f5" class="header-container">

            <div class="container-fluid">
            
                    <!-- Header Logo -->
             <div class="banner">


                 <div class="logo" style="font-size: 23px;height: 100px; text-shadow:2px 2px blue;"><a title="" href="index.php"><img alt="e-commerce" src="images/slider/Vsoft.png" style="height:300px; width: 500px; margin-top: -70px;"></a>
            </div>
<!--                       <h1 style="height: 100px ;text-shadow:2px 2px red";> VSOFT Technologies</h1>-->

            </div>

<!--                <div class="fl_right">-->
<!---->
<!--                    --><?php
//                    $sql = "SELECT * FROM contact_info";
//                    $result = mysqli_query($conn, $sql);
//
//                    if (mysqli_num_rows($result) > 0) {
//                        // output data of each row
//                        while($row = mysqli_fetch_assoc($result)) {
//                            ?>
<!--                            <div style="display: inline;">-->
<!--                    <ul class="nospace" style="margin-top:30px; margin-left: 400px;">-->
<!--                        <span><i class="fa fa-envelope"></i>--><?php //echo $row["email"] ?><!--</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa fa-phone"></i>--><?php //echo $row["numb1"] ?><!--</span>-->
<!---->
<!--                        <div class="social">-->
<!--                            <ul class="inline-mode" style="margin-top:-40px;">-->
<!--                                <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>-->
<!--                                <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/u/4/102551568188987403300"><i class="fa fa-google-plus"></i></a></li>-->
<!--                                <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/vsoftlimited"><i class="fa fa-twitter"></i></a></li>-->
<!--                                <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.linkedin.com/feed/"><i class="fa fa-linkedin"></i></a></li>-->
<!--                                <li class="social-network rss"><a title="Connect us on Instagram" target="_blank" href="https://github.com/VSoft-Tech"><i class="fa fa-github"></i></a></li>-->
<!--                                <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </ul>-->
<!--                                </div>-->
<!--                    --><?php //} ?>
<!--                    --><?php //} ?>
<!--                </div>-->

            </div>
            </div>
        </div>

        <nav>
            <!-- Start Menu Area -->
            <div class="menu-area" style="background-color:#6495ED">
                <div class="container">
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="main-menu" style="position:center; ">
                                <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                                    <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                                </div>
                                <ul class="hidden-xs">

                                    <li class="custom-menu <?php if($page_link != '' && $page_link=='index'){echo 'active';} ?> "><a href="index.php">Home</a>
                                    </li>

                                    <li class=" custom-menu  <?php if($page_link != '' && $page_link=='about_us'){echo 'active';} ?>"><a href="about_us">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="about_us">Our  Mission &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="about_us">Our  Vission  </a></li>
                                            <li><a href="about_us"> Core Objectives  </a></li></ul>
                                    </li>


                                    <li class="custom-menu <?php if($page_link != '' && $page_link=='services'){echo 'active';} ?>"><a href="services">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="#">IT Consultancy</a></li>
                                            <li><a href="#training">Helpdesk Maintainance</a></li>
                                            <li><a href="#helpdesk">system & data Recovery</a></li>
                                            <li><a href="#recovery">Data Analytics</a></li>
                                        </ul>
                                    </li>
                                    <li class="custom-menu  <?php if($page_link != '' && $page_link=='products'){echo 'active';} ?>"><a href="products">Products</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Web-based Applications</a></li>
                                            <li><a href="#web">Mobile Development</a></li>
                                            <li><a href="#mobile">Application Development</a></li>
                                            <li><a href="#app">E-commerce Applications</a></li>
                                            <li><a href="#mobile">Backend Development</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu  <?php if($page_link != '' && $page_link=='pricing'){echo 'active';} ?>"><a href="pricing">Pricing</a>
                                    </li>
                                    <li class=" megamenu <?php if($page_link != '' && $page_link=='contact_us'){echo 'active';} ?>"><a href="contact_us">Contact</a></li>

                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> </header></div>