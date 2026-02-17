<?php
ob_start();
include "include/connect.php";
session_start();
if(isset($_SESSION["name"])){
 header("Location: index-architect.php");
}else{
?>
<!DOCTYPE html>

<html lang="en">

	
<!-- login17:43 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Palathra- Construction Template for Architect and Construction</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
		<link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/animate.css" type="text/css" rel="stylesheet">
		<link href="assets/css/jquery-ui.min.css" type="text/css" rel="stylesheet">

		<!--Main Slider-->
		<link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">

		<link href="assets/css/style.css" type="text/css" rel="stylesheet">
		<link href="assets/css/header.css" type="text/css" rel="stylesheet">
		<link href="assets/css/footer.css" type="text/css" rel="stylesheet">
		<link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />

	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->

		<!-- header Start -->
			<?php include 'header.html';?>
		<!--Header End-->
		
		
		<!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Login"><span>Architect Login</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Login</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->

        	
  <!-- Login Section -->
  <div id="login" class="ptb ptb-xs-40 page-signin">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        	<div class="main-body">
        	  <div class="body-inner">
        	    <div class="card bg-white">
        	      <div class="card-content">
        	        <section class="logo text-center">
        	          <h2>Architect Login</h2>
        	        </section>
					<center>
								Please enter your name and password to log in.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p></center>
					        <form class="form-horizontal ng-pristine ng-valid" action="login_architect_code.php" method="POST">
        	          <fieldset>
        	            <div class="form-group">
        	              <div class="ui-input-group">
        	                <input type="text" required class="form-control" id="user" name="user" required="required" autofocus="autofocus">
        	                <span class="input-bar"></span>
        	                <label>Email</label>
        	              </div>
        	            </div>
        	            <div class="form-group">
        	              <div class="ui-input-group">
        	                <input type="password" required class="form-control" id="pass" name="pass" required="required">
        	                <span class="input-bar"></span>
        	                <label>Password</label>
        	              </div>
        	            </div>
        	          </fieldset>
					 <center><input type="submit" name="submit"  value="Login" class="color-primary"></center>
        	        </form>
        	      </div>
        	    <!--  <div class="card-action no-border text-right"> <a href="#/" class="color-primary">Sign in</a> </div>-->
        	    </div>
        	    <div class="additional-info"> <a href="architect_forgotpassword.php">Forgotpassword?</a></div>
				 <div class="additional-info"> <a href="architect_signup.php">Architect's Click here to Register</a></div>
				<!--<span class="divider-h"></span><a href="#/page/forgot-password">Forgot your password?</a>--> 
        	  </div>
        	</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Login Section --> 
  
  
 <!-- footer -->
		<!-- FOOTER -->
		<footer class="footer pt-80 pt-xs-60">
			<div class="container">
				<!--Footer Info -->
				<div class="row footer-info mb-60">
					<div class="col-lg-3 col-md-4 col-xs-12 mb-sm-30">
						<h4 class="mb-30">CONTACT Us</h4>
						<address>
							<i class="ion-ios-location fa-icons"></i>A:
Palathra Constructions Pvt. Ltd. , Palathra buildings, Thuruthy P.O, Changanacherry, Kottayam.
						</address>
						<ul class="link-small">
							<li>
								<a href="mailto:business@support.com"><i class="ion-ios-email fa-icons"></i>E:
palathracontructionspvtltd@gmail.com</a>
							</li>
							<li>
								<a><i class="ion-ios-telephone fa-icons"></i>T:
+91 2322150 , +91 9539700672</a>
							</li>
						</ul>
						<div class="icons-hover-black">
							<a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-dribbble"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-linkedin"></i> </a>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
						<h4 class="mb-30">Links</h4>
						<ul class="link blog-link">
							<li>
								<a href="index.php"><i class="fa fa-angle-double-right"></i> About Us</a>
							</li>
							<li>
								<a href="index.php"><i class="fa fa-angle-double-right"></i> Services</a>
							</li>
							<li>
								<a href="index.php"><i class="fa fa-angle-double-right"></i> Privacy policy</a>
							</li>
							<li>
								<a href="index.php"><i class="fa fa-angle-double-right"></i> Terms &amp; condition</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-5 col-xs-12 mb-sm-30">
						<h4 class="mb-30">Latest Blog</h4>
						<div class="widget-details link">
							<div class="post-type-post media">
								<div class="entry-thumbnail media-left">
									<img src="assets/images/blog/small-img.jpg" alt="Image">
								</div>
								<!-- /.entry-thumbnail -->
								<div class="post-content media-body">
									<p class="entry-title">
										<a href="javascript:avoid(0);">minim veniam, quis nostrud exercitation</a>
									</p>
									<div class="post-meta">
										On
										<time datetime="2018-02-10">
											10 Feb, 2018
										</time>
									</div>
									<!-- /.post-meta -->
								</div>
								<!-- /.post-content -->
							</div>
							<div class="post-type-post media">
								<div class="entry-thumbnail media-left">
									<img src="assets/images/blog/small-img1.jpg" alt="Image">
								</div>
								<!-- /.entry-thumbnail -->
								<div class="post-content media-body">
									<p class="entry-title">
										<a href="javascript:avoid(0);">minim veniam, quis nostrud exercitation</a>
									</p>
									<div class="post-meta">
										On
										<time datetime="2018-02-10">
											10 Feb, 2018
										</time>
									</div>
									<!-- /.post-meta -->
								</div>
								<!-- /.post-content -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30 mt-xs-30">
						<div class="newsletter">
							<h4 class="mb-30">NEWSLETTER SIGNUP</h4>
							<p>
								Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
							</p>
							<form>
								<input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
								<button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
									<i class="fa fa-angle-right mr-0"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<!-- End Footer Info -->
			</div>
			<!-- Copyright Bar -->
			<div class="copyright">
				<div class="container">
					<p class="">
						<a href="https://www.templateshub.net" target="_blank">Templates Hub</a>
					</p>
				</div>
			</div>
			<!-- End Copyright Bar -->
		</footer>
		<!-- END FOOTER -->
		<!-- End footer -->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
					<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script>

		<!-- Compiled and minified JavaScript -->
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>

	</body>

<!-- login17:43 GMT -->
</html>
<?php
}
?>