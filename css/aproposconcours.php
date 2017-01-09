<!DOCTYPE html>
<html lang="zxx">
<head>
<title></title>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->
</head>
<body>
	<div class="w3-slider">	
	<!-- header -->


		<?php include_once ('includes/header.php'); ?>



		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- Services-page -->
		<section class="agileits Services-page">
			<div class="container">
				<h2 class="agile-inner-title">A propos du concours</h2><div class="service-section" id="service">
					<div class="w3ls-service-header">
						<p>Just-startup-challenge est un concours de nouvelles entreprises. Le but est d'élire par un jury de professionnelles dans la création d'entreprise, la startup ayant la meilleure idée ainsi que la meilleure réalisation final. </p>
						</div>
						
				</div>
				</div>
				<!-- services-bottom -->
				<div class="w3layouts-services-bottom">
					<div class="container">
						<div class="services-bottom-grids">
							<div class="col-md-8 w3ls-services-bottom-grid">
								<h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</h3>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
									blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi sint occaecati cupiditate non provident, standard dummy text ever 
									similique. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse</p>
								<ul>
									<li><a href="single.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> sint occaecati cupiditate non provident</a></li>
									<li><a href="single.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> aut reiciendis voluptatibus maiores</a></li>
									<li><a href="single.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> ut et voluptates repudiandae sint</a></li>
									<li><a href="single.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Et harum quidem rerum facilis est</a></li>
									<li><a href="single.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> ut et voluptates repudiandae sint</a></li>
									<li><a href="single.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> sint occaecati cupiditate non provident</a></li>
								</ul>
							</div>
							<div class="col-md-4 w3ls-services-bottom-grid">
								<!--<img src="images/1.png" alt=" "  class="img-responsive" />-->
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<!-- //services-bottom -->

		</section>		
		<!-- /.Services-page -->
		</div>
		<!-- //main-content -->
		<!-- footer -->
		<footer>
			<div class="container">
				<div class="w3ls-footer-grids">					
					<div class="col-md-3 w3l-footer-grid">
						<h4>ADDRESS</h4>
						<ul>
							<li>BS Business Strategy</li>
							<li>4111 Deer Haven Drive Greenville, SC 29601 </li>
							<li>Hours: Mon-Fri 9am - 6:00pm</li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>GET IN TOUCH</h4>
						<ul>
							<li>Tel: +1 234-567-890</li>
							<li>Fax: +1 646-216-9789</li>
							<li>Email: <a href="mailto:info@example.com">info@yourdomain.com </a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>SUBSCRIBE NOW</h4>
						<form action="#" method="post">
							<input type="email" name="email" placeholder="Enter your email" required="required">
							<input type="submit" value=" ">
						</form>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>Copy Rights</h4>
						<p>&copy; 2016 Just Startup Challenge. All Rights Reserved | Design by <a href="http://just-startup-challenge.fr/"> Just Startup Challenge</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
		<!-- //footer -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
					$().UItoTop({ easingType: 'easeOutQuart' });
										
					});
			</script>
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
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->	
</body>
</html>