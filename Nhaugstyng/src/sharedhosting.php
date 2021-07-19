<?php
error_reporting(0);

session_set_cookie_params([
    'lifetime' => 36000,
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => false,
    'httponly' => true
]);

if(!isset($_SESSION)){
    session_start();
}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Nhaugstyng - Evil est bon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Hosting Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!-- webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
    <!-- dropdown -->
    <script src="js/jquery.easydropdown.js"></script>
    <link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- end-smoth-scrolling -->
</head>
<!-- Header Starts Here -->
<div class="banner inner-banner" >
    <div class="header">
        <div class="container">
            <div class="search-bar">
                <input type="text"  value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="" />
            </div>
            <span class="menu"> Menu</span>

            <div class="banner-top">
                <ul class="nav banner-nav">
                    <li><a href="./index.php">Accueil</a></li>
                    <li class="dropdown1"><a class="down-scroll" href="">Hébergements</a>
                        <ul class="dropdown2">
                            <li><a class="active" href="./sharedhosting.php">Shared hosting</a></li>
                            <li><a href="./vps.php">Cloud VPS</a></li>
                            <li><a href="./dedicated-servers.php">Serveurs dédiés</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="./domain.php">Domaines</a>
                    </li>

                    <?php if(isset($_SESSION['admin'])) { ?>
                    <li><a href="./s3cr3t4dm1n.php">Administration</a>
                        <?php }  ?>
                </ul>
                <script>
                    $("span.menu").click(function(){
                        $(" ul.nav").slideToggle("slow" , function(){
                        });
                    });
                </script>
            </div>
            <div class="clearfix"> </div>

        </div>
    </div>
    <!-- page heading -->
    <div id="breadcrumb_wrapper">
        <div class="container">

            <h3>Shared Hosting</h3>
        </div>
    </div>
</div>
<!-- Header Ends Here -->
<div class="container">
    <div class="shared-hosting">
        <h3 class="header-c">Shared Hosting</h3>
        <figure class="float-right"><img src="images/570x330.jpg" alt="Placeholder"></figure>
        <p>Fusce eu ante posuere, aliquam ipsum vitae, convallis diam. Nunc sit amet neque tellus. Curabitur eget ex elit. Phasellus vitae fringilla eros. Cras eu ligula quam. Cras efficitur in odio vitae rhoncus. Integer dui neque, convallis non blandit ac, molestie nec felis.</p>
        <ul class="list-check">
            <li>Proin consectetur lacus malesuada urna congue bibendum posuere eu lacus.</li>
            <li>Donec malesuada nunc vel varius suscipit.</li>
            <li>In nec urna volutpat, viverra enim id, tincidunt massa.</li>
            <li>Duis at elit sit amet mauris convallis lobortis.</li>
        </ul>
    </div>
</div>
<div class="about-quote">
    <div class="col-md-6 abt-quote">
        <h5>Success is a science; if you have the conditions, you get the result.</h5>
        <span>Oscar Wilde</span>
    </div>
</div>
<div class="container">

    <div class="row PageHead">
        <div class="col-md-12">
            <h1>Compare Plans</h1>
            <h3>Another Plans page with comparison table</h3>
        </div>
    </div>
    <div class="row ComparePlans">
        <div class="col-md-3 CompareList hidden-sm hidden-xs">
            <div class="planHead1"></div>
            <div class="planFeatures">
                <ul>
                    <li>Setup Fee</li>
                    <li> Multi Domain </li>
                    <li> Storage Space</li>
                    <li>Monthly Bandwidth</li>
                    <li> MySQL Databases</li>
                    <li>Sub-domains</li>
                    <li>Email Accounts</li>
                    <li> Shared 128bit SSL</li>
                    <li>Control panel</li>
                    <li>24/7 Support</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 pricing1">
            <div class="planHead2">
                <h3>STANDARD</h3>
            </div>
            <div class="planFeatures">
                <ul class="visible-sm visible-xs">
                    <li>Setup Fee : NA</li>
                    <li> Multi Domain : Up to 2 </li>
                    <li> Storage Space 1 GB</li>
                    <li>Monthly Bandwidth 10 GB</li>
                    <li> MySQL Databases : 5</li>
                    <li>Sub-domains : 2</li>
                    <li>Email Accounts : 25</li>
                    <li> Shared 128bit SSL : No</li>
                    <li>Control panel : Yes</li>
                    <li>24/7 Support : No</li>
                </ul>
                <ul class="hidden-sm hidden-xs">
                    <li>NA</li>
                    <li> Up to 2 </li>
                    <li> 1 GB</li>
                    <li>10 GB</li>
                    <li> 5</li>
                    <li>2</li>
                    <li>25</li>
                    <li><img src="images/cross.png" alt="cross"> </li>
                    <li> <img src="images/tick.png" alt="tick"></li>
                    <li><img src="images/cross.png" alt="cross"> </li>
                </ul>
            </div>
            <p> <a href="#" role="button" class="btn btn-success btn-lg">Sign Up </a> </p>
        </div>
        <div class="col-sm-6 col-md-3 pricing2">
            <div class="planHead3">
                <h3>DEDICATED</h3>
            </div>
            <div class="planFeatures">
                <ul class="visible-sm visible-xs">
                    <li>Setup Fee : NA</li>
                    <li> Multi Domain : Up to 2 </li>
                    <li> Storage Space 1 GB</li>
                    <li>Monthly Bandwidth 10 GB</li>
                    <li> MySQL Databases : 5</li>
                    <li>Sub-domains : 2</li>
                    <li>Email Accounts : 25</li>
                    <li> Shared 128bit SSL : No</li>
                    <li>Control panel : Yes</li>
                    <li>24/7 Support : Yes</li>
                </ul>
                <ul class="hidden-sm hidden-xs">
                    <li>NA</li>
                    <li> Up to 2 </li>
                    <li> 1 GB</li>
                    <li>10 GB</li>
                    <li> 5</li>
                    <li>2</li>
                    <li>25</li>
                    <li><img src="images/cross.png" alt="cross"> </li>
                    <li> <img src="images/tick.png" alt="tick"></li>
                    <li><img src="images/tick.png" alt="tick"> </li>
                </ul>
            </div>
            <p> <a href="#" role="button" class="btn btn-danger btn-lg">Sign Up </a> </p>
        </div>
        <div class="col-sm-6 col-md-3 col-sm-offset-3 col-md-offset-0 pricing1">
            <div class="planHead2">
                <h3>MANAGED</h3>
            </div>
            <div class="planFeatures">
                <ul class="visible-sm visible-xs">
                    <li>Setup Fee : NA</li>
                    <li> Multi Domain : Up to 2 </li>
                    <li> Storage Space 1 GB</li>
                    <li>Monthly Bandwidth 10 GB</li>
                    <li> MySQL Databases : 5</li>
                    <li>Sub-domains : 2</li>
                    <li>Email Accounts : 25</li>
                    <li> Shared 128bit SSL : Yes</li>
                    <li>Control panel : Yes</li>
                    <li>24/7 Support : Yes</li>
                </ul>
                <ul class="hidden-sm hidden-xs">
                    <li>NA</li>
                    <li> Up to 2 </li>
                    <li> 1 GB</li>
                    <li>10 GB</li>
                    <li> 5</li>
                    <li>2</li>
                    <li>25</li>
                    <li><img src="images/tick.png" alt="tick"> </li>
                    <li> <img src="images/tick.png" alt="tick"></li>
                    <li><img src="images/tick.png" alt="tick"> </li>
                </ul>
            </div>
            <p> <a href="#" role="button" class="btn btn-success btn-lg">Sign Up </a> </p>
        </div>
    </div>
</div>
<!-- #Footer -->
<footer>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/605e3677067c2605c0bcaaae/1f1o09hbp';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-6 col-sm-4">
                <ul class="footerMenu">
                    <li class="title">What we do</li>
                    <li><a href="#">Plans</a></li>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Features Tour</a></li>
                    <li><a href="#">CloudFlare's Network</a></li>
                    <li><a href="#">CloudFlare Apps</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
                <ul class="footerMenu">
                    <li class="title">Services</li>
                    <li><a href="#">Virtual Private Servers</a></li>
                    <li><a href="#">Dedicated Servers</a></li>
                    <li><a href="#">cloud vps</a></li>
                    <li><a href="#">Server Management</a></li>
                    <li><a href="#">Script Installation</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
                <ul class="footerAddress">
                    <li class="title">Contact Us</li>
                    <li><strong>Address:</li>
                    <li>45 Moogda Road, Russia, LP4 2P8</li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="copyrights">
        <div class="container">
            <p>Design by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</footer>
<!-- /#Footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>