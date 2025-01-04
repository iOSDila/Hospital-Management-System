<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
<title>Arogya</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

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

	<script src="js/responsiveslides.min.js"></script>
</head>
<body>

        <!-- //header -->
        <?php
        if (isset($_SESSION['userbean'])) {
            include './_header_top.php';
            include './_header.php';
        } else {
            include './_top_pre_login.php';
            include './_header_pre_login.php';
        }
        ?>

<!-- banner -->
<div class="banner page_head">

</div>
<!-- //banner -->
<div class="map_contact">
	<div class="container">
		
		<h3 class="tittle">Contact</h3>
		<div class="contact-grids">
			
			<div class="col-md-6 contact-grid ">
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Send" >
				</form>
			</div>
			<div class="col-md-6 contact-left-map ">
				<p style="text-align:justify">"Located within the hospital, and in 67 locations Island wide, the laboratory & diagnostic is managed by an experienced team of pathologists and laboratory scientists, who handle thousands of samples on daily basis.Committed to being the finest in the fields such as biochemistry, microbiology and genetics; the laboratory& diagnostic staff work in close collaboration with our clinicians to deliver comprehensive and reliable diagnostic results."</p>
				<ul class="contact-list">
					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>No.43, Colombo Rd, Ginigathena.</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com"> arogyahospital@gmail.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Channeling Hotline : +94 (0) 51 2242238</li>
                                        <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Fax : +94 (0) 81 3620406</li>
				</ul>
			</div>						
			<div class="clearfix"> </div>
		</div>
		<h3 class="tittle">View On map</h3>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9694.868798014066!2d80.48939722811521!3d6.9917141309394095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae39fd1182a74ef%3A0xb92ff5cc1e0cb781!2sAROGYA+MEDICLE+CENTRE!5e0!3m2!1sen!2slk!4v1533989954062" style="border:0"></iframe>
		</div>
	</div>
</div>
<!-- //contact -->



<!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->



        <!--login-signup-->
        <?php include_once './_login_signup.php'; ?>
        <!--login-signup-->
</body>
</html>

