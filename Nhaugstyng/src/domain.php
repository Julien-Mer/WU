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
                            <li><a href="./sharedhosting.php">Shared hosting</a></li>
                            <li><a href="./vps.php">Cloud VPS</a></li>
                            <li><a href="./dedicated-servers.php">Serveurs dédiés</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a class="active" href="./domain.php">Domaines</a>
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

            <h3>Domaines</h3>
        </div>
    </div>
</div>
<!-- Header Ends Here -->
<div class="domain-section">
    <div class="domain">
        <div class="container">
            <div class="row PageHead">
                <div class="col-md-12">
                    <h1>Enregistrer un nom de domaine</h1>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php if(isset($_POST['domain']) && !empty((string)$_POST['domain'])) { ?>
                        <div style="display: flex; justify-content: center">
                            <p class="label-danger" style="color: white;text-align:center;border: 1px solid white; width: 75%;">Ce service est momentanément indisponible, merci de votre compréhension.</p>
                        </div>
                        </br>
                    <?php } ?>
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <div class="input-group">
                                    <input name="domain" placeholder="Votre nom de domaine" value="<?=isset($_POST['domain']) && !empty((string)$_POST['domain']) ? $_POST['domain'] : "";?>" class="form-control" type="text" size="20"/>
                                    <span class="input-group-btn">
<select class="btn btn-default" name="ext">
<option selected>.com</option>
<option>.net</option>
<option>.org</option>
<option>.biz</option>
<option>.com.au</option>
<option>.net.au</option>
<option>.info</option>
<option>.asia</option>
<option>.co.nz</option>
<option>.org.au</option>
</select>
</span> </div>
                            </div>
                        </div>
                        <div class="submitbtn">
                            <input type="submit" class="btn btn-success btn-lg" value="Enregister"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="new-domains">
        <div class="container">
            <h4 class="domain-head1">Nouveaux domaines</h4>
            <div class="new_domain">
                <div class="col-md-6">
                    <ul class="list_3">
                        <li><span>.nyc</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.vegas</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.website</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.app</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.ask</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list_3">
                        <li><span>.lip</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.wiki</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.do</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.go</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                        <li><span>.zipo</span><a class="dt-sc-button small" href="#" target="_blank">Register</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
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