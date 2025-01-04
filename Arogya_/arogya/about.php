<?php 
session_start();
?>
<!DOCTYPE html>
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
<div class="about-page">
	<div class="container">
		<h3 class="tittle">About Us</h3>
            <div class="col-md-6 about_img wow fadeInRight animated" data-wow-delay=".5s">
				<img src="images/g1.jpg" alt="">
            </div>
			<div class="col-md-6 about_img about_img_left">
				<div class="choose-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h4>Broad and specialized range of services</h4>
					<p style="text-align:justify">Each year, we treat around 42,000 inpatients and have over 500,000 outpatient visits at our 43 departments and institutes.Our employees guarantee comprehensive and individualized medical support even beyond their specific disciplines. With 980 hospital beds and close to 300,000 inpatient days,Arogya is one of the largest hospitals in Sri lanaka</p>
				</div>
				<div class="choose-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>We persist towards delivering excellence and dependable healthcare </h4>
					<p style="text-align:justify">We offer the best consultants, specialists and employees, all of whom are dedicated to providing exceptional clinical outcomes and utmost customer satisfaction. We also offer a modern radiology unit, Gastroenterology, fully equipped physiotherapy unit and laboratories.</p>
				</div>
            </div>
			<div class="clearfix"></div>
		<p class="para_abt wow fadeInUp animated" data-wow-delay=".5s">Arogya Medical Centre has been a trustworthy
		name in Ginigathena city for more than 10 years.We are a well-established
		reputed private limited company, we have built a reputation for regional
		direction in medical excellence, based on a simple philosophy, that 
		enhancing the health of our community should be driven by passion
		as well as compassion.</p>
	</div>
</div>
<!-- testimonials -->
	<div class="testimonials">
		<div class="container">
			<h3 class="tittle">Testimonials</h3>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid animated wow slideInLeft" data-wow-delay=".5s">
					<div class="testimonials-grid1">
						<img src="images/3.png" alt=" " class="img-responsive" />
						<p>Chandana Herath</p>
					</div>
					<div class="testimonials-grid2">
						<p>"A great benefit of Parkside is its peaceful location and another is 
							the availability of plentiful parking (free!)...as well as 
							impeccable medical and nursing service."</p>
					</div>
				</div>
				<div class="col-md-6 testimonials-grid">
					<div class="testimonials-grid1">
						<img src="images/4.png" alt=" " class="img-responsive" />
						<p>Buwaneka Senevirathne</p>
					</div>
					<div class="testimonials-grid2">
						<p>"I felt so safe and comfortable here, mainly because of the lovely nurses.
							I'm so happy I decided to stay overnight.Nursing care was 
							fantastic, second to none, very friendly and could not have 
							done more for me." </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->



<!-- contact -->
        <?php include './_footer.php'; ?>
        <!-- //contact -->

        <!--login-signup-->
        <?php include_once './_login_signup.php'; ?>
        <!--login-signup-->
        
</body>
</html>

