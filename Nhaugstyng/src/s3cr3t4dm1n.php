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

$ip = $_SERVER['REMOTE_ADDR'];
if(isset($_GET['unlock']) && !empty($_GET['unlock']) && hash('sha512', $_GET['unlock']) === "7d2a37112f39fbcbecfc16e48df3fee74543707275ddfd340ee4ceb3a25649b93a8900ccf6c08bbbfac9f00d3d2c4d4b62f3a454930db63127639fe3010b426a")
    $_SESSION['admin'] = true;

if(!isset($_SESSION['admin']))
    die('Sorry but not sorry ...');

if(isset($_POST['server'], $_POST['token']) && !empty($_POST['server']) && !empty($_POST['token']))
    if(isset($_SESSION['tokens'][$_POST['server']])) {
        if($_SESSION['tokens'][$_POST['server']]['value'] !== $_POST['token']) $msgE = 'Token invalide';
        else if(strtotime('now') > $_SESSION['tokens'][$_POST['server']]['expiration']) $msgE = 'Token expiré';
        else {
            if($_POST['server'] === '74.51.217.27')
                $msg = 'Congrats, your flag is: MCTF{S3LF_X$$_1NT0_S3_1N70_C$RF_HaHaHa!!}';
            else
                $msg = 'Server deleted.';
        }
    }

unset($_SESSION['tokens']);
$servers = ["74.51.217.25", "74.51.217.26", "74.51.217.27", "74.51.217.28"];
foreach($servers as $server) {
    $_SESSION['tokens'][$server]['value'] = bin2hex(random_bytes(32));
    $_SESSION['tokens'][$server]['expiration'] = strtotime('now + 1 minutes');
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

            <h3>Administration</h3>
        </div>
    </div>
</div>
<!-- Header Ends Here -->
<div class="hd-content">
    <div class="container">
        <?php if(isset($msgE)) echo('<p style="color: red;">'.$msgE.'</p>'); ?>
        <?php if(isset($msg)) echo('<p style="color: green;">'.$msg.'</p>'); ?>
        <!-- dedicated servers -->
        <div id="dedicated_servers">
            <div class="ds_heading">
                <div class="ds_cores">IP</div>
                <div class="ds_processor">Cores</div>
                <div class="ds_ram">RAM</div>
                <div class="ds_diskspace">Disk Space</div>
                <div class="ds_bandwidth">Band width</div>
                <div class="ds_price">Price / month</div>
                <div class="ds_order"></div>
                <div class="clearfix"></div>
            </div>
            <div class="ds">
                <div class="ds_cores">74.51.217.25</div>
                <div class="ds_processor">Intel Xeon E3-1220 Dual Core</div>
                <div class="ds_ram">2GB</div>
                <div class="ds_diskspace">250GB</div>
                <div class="ds_bandwidth">1TB</div>
                <div class="ds_price">$69.95</div>
                <div class="ds_order">
                    <form method="POST">
                        <input type="hidden" name="server" value="74.51.217.25"/>
                        <input type="hidden" name="token" value="<?=$_SESSION['tokens']["74.51.217.25"]['value']?>"/>
                        <button href="#" type="submit" name="delete" class="button">Delete</button>
                    </form>
                    <a href="#" class="button">Control</a></div>
                <div class="clearfix"></div>
            </div>
            <div class="ds">
                <div class="ds_cores">74.51.217.26</div>
                <div class="ds_processor">AMD Quad x8 Opteron 6128</div>
                <div class="ds_ram">8GB</div>
                <div class="ds_diskspace">1TB</div>
                <div class="ds_bandwidth">3TB</div>
                <div class="ds_price">$129.95</div>
                <div class="ds_order">
                    <form method="POST">
                        <input type="hidden" name="server" value="74.51.217.26"/>
                        <input type="hidden" name="token" value="<?=$_SESSION['tokens']["74.51.217.26"]['value']?>"/>
                        <button href="#" type="submit" name="delete"  class="button">Delete</button>
                    </form>
                    <a href="#" class="button">Control</a></div>
                <div class="clearfix"></div>
            </div>
            <div class="ds">
                <div class="ds_cores">74.51.217.27</div>
                <div class="ds_processor">Intel Xeon E5-1650, Hexa Core</div>
                <div class="ds_ram">16GB</div>
                <div class="ds_diskspace">3TB</div>
                <div class="ds_bandwidth">5TB</div>
                <div class="ds_price">$179.95</div>
                <div class="ds_order">
                    <form method="POST">
                        <input type="hidden" name="server" value="74.51.217.27"/>
                        <input type="hidden" name="token" value="<?=$_SESSION['tokens']["74.51.217.27"]['value']?>"/>
                        <button href="#" type="submit" name="delete"  class="button">Delete</button>
                    </form>
                    <a href="#" class="button">Control</a></div>
                <div class="clearfix"></div>
            </div>
            <div class="ds">
                <div class="ds_cores">74.51.217.28</div>
                <div class="ds_processor">Intel Dual Xeon E5-2603 V2 Quad Core</div>
                <div class="ds_ram">8GB</div>
                <div class="ds_diskspace">1TB</div>
                <div class="ds_bandwidth">2TB</div>
                <div class="ds_price">$109.95</div>
                <div class="ds_order">
                    <form method="POST">
                        <input type="hidden" name="server" value="74.51.217.28"/>
                        <input type="hidden" name="token" value="<?=$_SESSION['tokens']["74.51.217.28"]['value']?>"/>
                        <button href="#" type="submit" name="delete"  class="button">Delete</button>
                    </form>
                    <a href="#" class="button">Control</a></div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="clearfix"></div>

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