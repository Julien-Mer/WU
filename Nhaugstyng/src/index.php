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
Author: W3layouta
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
<div class="banner" >
		<div class="header">
	<div class="container">
		<div class="search-bar">
			<input type="text"  value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			<input type="submit" value="" />
	   </div>
		<span class="menu"> Menu</span>
			
		<div class="banner-top">
								<ul class="nav banner-nav">
									<li><a class="active" href="./index.php">Accueil</a></li>
									<li class="dropdown1"><a class="down-scroll" href="">Hébergements</a>
										<ul class="dropdown2">
											<li><a href="./sharedhosting.php">Shared hosting</a></li>
											<li><a href="./vps.php">Cloud VPS</a></li>
											<li><a href="./dedicated-servers.php">Serveurs dédiés</a></li>
										</ul>
									</li>
									<li><a href="./domain.php">Domaines</a>
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
			<div class="banner-info">
			<h1>Faites ce que bon vous semble</h1>
			<p>Choisissez nos serveurs bulletproof, DMCA ignored, spoofing allowed, hébergés en Russie et aux Pays-Bas.</p>
		</div>
</div>
<div class="clearfix"> </div>
<!-- Header Ends Here -->	
<div class="best">
	<div class="container">
		<article>
			<figure class="float-left"><img src="images/470x240.jpg" alt="Placeholder"></figure>
			<h2><span>Le meilleur</span> pour vous</h2>
			<p>Nos serveurs sont ce qu'il se fait de mieux, nos composants sont de dernière génération,
				la qualité est notre fer de lance. Notre système de refroidissement est en collaboration avec l'unité de
				sapeurs pompiers locale, au même titre que certains hébergeurs, le watercooling est pour nous l'avenir des datacenters.</p>
		</article>	
	</div>	
</div>

<div class="plans">
		<div class="container">

			<!-- pricing table -->
			<h1 class="heading">Services populaires</h1>

			<div class="col-md-4 one_third pricing">
				<div class="pricing_top">
					<h6>Kiddie</h6>
					<p><sup>$</sup>85.95</p>
				</div>
				<div class="pricing_middle">
					<ul>
						<li>2 CPU Cores 4Ghz+</li>
						<li>10GB SSD</li>
						<li>2GB DDR4 RAM</li>
						<li>Unmetered Bandwidth</li>
						<li>1Gb/s Port</li>
						<li>Free DDoS Protection</li>
						<li>Free Daily Backups</li>
						<li>Bulletproof</li>
						<li>DMCA Ignored</li>
						<li>Spoofing allowed</li>
					</ul>
				</div>
				<div class="pricing_bottom">
					<a href="#">Order</a>
				</div>
			</div>

			<div class="col-md-4 one_third pricing">
				<div class="pricing_top">
					<h6>H4X0R</h6>
					<p><sup>$</sup>180.95</p>
				</div>
				<div class="pricing_middle">
					<ul>
						<li>4 CPU Cores 4Ghz+</li>
						<li>60 GB SSD</li>
						<li>8GB DDR4 RAM</li>
						<li>Unmetered Bandwidth</li>
						<li>5Gb/s Port</li>
						<li>Free DDoS Protection</li>
						<li>Free Daily Backups</li>
						<li>Bulletproof</li>
						<li>DMCA Ignored</li>
						<li>Spoofing allowed</li>
					</ul>
				</div>
				<div class="pricing_bottom">
					<a href="#">Order</a>
				</div>
			</div>

			<div class="col-md-4 one_third last pricing">
				<div class="pricing_top">
					<h6>8474RD</h6>
					<p><sup>$</sup>390.95</p>
				</div>
				<div class="pricing_middle">

					<ul>
						<li>10 CPU Cores 4Ghz+</li>
						<li>250GB SSD</li>
						<li>16GB DDR4 RAM</li>
						<li>Unmetered Bandwidth</li>
						<li>10Gb/s Port</li>
						<li>Free DDoS Protection</li>
						<li>Free Daily Backups</li>
						<li>Bulletproof</li>
						<li>DMCA Ignored</li>
						<li>Spoofing allowed</li>
					</ul>
				</div>
				<div class="pricing_bottom">
					<a href="#">Order</a>
				</div>
			</div>

			<div class="clearfix"></div>
			
		</div>
	</div>
	<div class="fullwidth-section semi-background">
                        <div class="fullwidth-bg">	  
                            <div class="overlay left-aligned">
                            	<div class="dt-sc-one-half column first">
                                	<div class="dt-support">
                                        <h2>Un hébergement eco-friendly</h2>
                                        <p>Nous sommes conscients de l'impact que peuvent avoir des datacenters sur l'écologie, c'est pourquoi nous nous engageons
										à éteindre les lumières après 21 heures et à planter un arbre tous les mois.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
<div class="service-section" id="service">
				<div class="container">
					<div class="service-section-head text-center wow fadeInRight" data-wow-delay="0.4s">
						<h3>Payez moins, profitez de plus</h3>
						<p>Le client est au coeur de nos préoccupations</p>
					</div>
					<div class="service-section-grids">
						<div class="col-md-6 service-grid">
							<div class="service-section-grid wow bounceIn" data-wow-delay="0.4s">
								<div class="icon">
									<i class="s1"></i>
								</div>
								<div class="icon-text">
									<h4>Instant Setup</h4>
									<p>Le déploiement de nos serveurs est instantané, vous recevrez par mail les informations de connexion à votre service.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="service-section-grid wow bounceIn" data-wow-delay="0.4s">
								<div class="icon">
									<i class="s2"></i>
								</div>
								<div class="icon-text">
									<h4>Backups régulières</h4>
									<p>Nous effectuons régulièrement des backups de vos serveurs pour vous fournir la possibilité de restaurer une version antécédante de votre serveur.</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="service-section-grid wow bounceIn" data-wow-delay="0.4s">
								<div class="icon">
									<i class="s3"></i>
								</div>
								<div class="icon-text">
									<h4>Une forte sécurité</h4>
									<p>Nous estimons que la sécurité est primordiale dans notre métier, c'est pourquoi nous mettons un point d'honneur à constamment tester et améliorer la sécurité de nos systèmes.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 service-grid">
							<div class="service-section-grid wow bounceIn" data-wow-delay="0.4s">
								<div class="icon">
									<i class="s4"></i>
								</div>
								<div class="icon-text">
									<h4>280+ Scripts d'installations</h4>
									<p>Nous vous fournissons plus de 280 scripts d'installations pour divers types de services: Wordpress, Apache, Docker ...</p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="service-section-grid wow bounceIn" data-wow-delay="0.4s">
								<div class="icon">
									<i class="s5"></i>
								</div>
								<div class="icon-text">
									<h4>Techniciens compétents</h4>
									<p>Nos techniciens sont d'une très grande technicité, sélectionnés rudement, ils vous garantiront une uptime proche de 99%. </p>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="service-section-grid wow bounceIn" data-wow-delay="0.4s">
								<div class="icon">
									<i class="s6"></i>
								</div>
								<div class="icon-text">
									<h4>PHP & MySQL</h4>
									<p>Nous mettons à disposition des scripts d'installation et de mise en compatibilité avec les dernières version de PHP et MySQL.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
<div class="services-bottom">
	<p>Nous avons plus de <span>2500 clients</span>dans le Monde !</p>
</div>
<!--/srvices-->
<!-- #Testimonials -->
		<div id="testimonialWrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-md-offset-1">
						<img style="border-radius: 150px" src="./images/huriken.png"></img>
					</div>
					<div class="col-md-7 col-md-offset-1">
						<h2>Ce que nos clients en pensent</h2>
						<h3>“J'adore Nhaugstyng, c'est le meilleur hébergeur de tous les temps, je n'ai eu aucune hésitation A PAYER le prix fort pour une qualité inédite. Merci !”</h3>
						<a href="https://www.youtube.com/watch?v=Lrj2Hq7xqQ8">Huriken aka "Coco tu vas payer"</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- /#Testimonials -->
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