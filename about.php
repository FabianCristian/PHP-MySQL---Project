<?php
session_set_cookie_params(0);
session_start();
if (! isset( $_SESSION['login_user'] ) ) {
    header("Location:main_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>SMBarber-Despre noi</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
        <div class="cube-wrapper">
		  <div class="cube-folding">
			<span class="leaf1"></span>
			<span class="leaf2"></span>
			<span class="leaf3"></span>
			<span class="leaf4"></span>
		  </div>
		  <span class="loading" data-name="Loading">Se încarcă SMBarber</span>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">

        <!-- Sidebar-wrapper -->
        <div id="sidebar-wrapper">
			<div class="side-top">
				<div class="logo-sidebar">
					<a href="about.php"><img src="images/logos/logo.png" alt="image"></a>
				</div>
				<ul class="sidebar-nav">
					<li><a class="active" href="about.php">Despre noi</a></li>
					<li><a href="services.php">Verifică programul nostru</a></li>
					<li><a href="appointment.php">Programează-te</a></li>
					<li><a href="main_login.php">Deconectează-te</a></li>
				</ul>
			</div>
        </div>
        <!-- End Sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <div class="all-page-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="title title-1 text-center">
								<div class="title--heading">
									<h1>Despre noi</h1>
								</div>
								<div class="clearfix"></div>
								<div class="much">
									<img src="uploads/mustache.png" alt=""/>
								</div>
							</div>
							<!-- .title end -->
						</div>
					</div>
				</div>
			</div><!-- end all-page-bar -->

            <section class="section nopad cac text-center">
                <a href=appointment.php><h3>Interesat de serviciile noastre? Completează un formular și programează-te!</h3></a>
            </section>

            <div class="section wb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="message-box">
                                <h4>Poveste unică</h4>
                                <h2>40 de ani de experiență</h2>
								<p class='lead'>
									<?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=1";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
									?>
								</p>
								<p> 
									<?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=2";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
									?>
								</p>
                            </div><!-- end messagebox -->
                        </div><!-- end col -->
                    </div><!-- end row -->
					
					<hr class="hr1"> 
					
					<div class="row">
						<div class="col-md-12">
							<div class="Despre-tab">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab_a" data-toggle="tab">Misiunea noastră</a></li>
									<li><a href="#tab_b" data-toggle="tab">De ce noi?</a></li>
									<li><a href="#tab_c" data-toggle="tab">Despre noi</a></li>								
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab_a">
										<p>
											<?php
												$con= mysqli_connect('localhost','root','');
												$sel=mysqli_select_db($con,"frizerie");
												$sql = "SELECT * FROM about where id=3";
												$result =mysqli_query($con,$sql);
												$row =mysqli_fetch_array($result);
												echo $row['stories'];
											?>
										</p>
									</div>
									<div class="tab-pane fade" id="tab_b">
										<p>
											<?php
												$con= mysqli_connect('localhost','root','');
												$sel=mysqli_select_db($con,"frizerie");
												$sql = "SELECT * FROM about where id=4";
												$result =mysqli_query($con,$sql);
												$row =mysqli_fetch_array($result);
												echo $row['stories'];
											?> 
										</p>
									</div>
									<div class="tab-pane fade" id="tab_c">
										<p>
											<?php
												$con= mysqli_connect('localhost','root','');
												$sel=mysqli_select_db($con,"frizerie");
												$sql = "SELECT * FROM about where id=5";
												$result =mysqli_query($con,$sql);
												$row =mysqli_fetch_array($result);
												echo $row['stories'];
											?> 
										</p>
									</div>
								</div><!-- tab content -->
							</div>
						</div><!-- end col -->
					</div><!-- end row -->
					
                    <hr class="hr1"> 

                    <div class="row text-center">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                           <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="uploads/barber_01.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <h3>Arată-ne stilul tau</h3>
                                <p>
									<?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=6";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
									?>
								</p>
                            </div><!-- end service -->
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="uploads/barber_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="uploads/barber_02.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <h3>O frizerie remarcabilă</h3>
                                <p>
									<?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=7";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
									?> 
								</p>
                            </div><!-- end service -->
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-widget">
                                <div class="post-media wow fadeIn">
                                    <a href="uploads/barber_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                    <img src="uploads/barber_03.jpg" alt="" class="img-responsive img-rounded">
                                </div>
                                <h3>Materialele frizerului</h3>
                                <p>
									<?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=8";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
									?>
								</p>
                            </div><!-- end service -->
                        </div>
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->

            <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_20.jpg');">
                <div class="container-fluid">
                    <div class="section-title row text-center">
                        <div class="col-md-8 col-md-offset-2">
							<small>SĂ VEDEM TESTIMONIALELE NOASTRE</small>
							<h3>TESTIMONIALE FERICITE</h3>
								<hr class="grd1">
								<p class="lead">
									<?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=9";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
									?>
								</p>
						</div>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="testi-carousel owl-carousel owl-theme">                                
                                <div class="testimonial clearfix">
                                    <div class="desc">
                                        <h3><i class="fa fa-quote-left"></i> Nemaipomenit!</h3>
                                        <p class="lead">
											<?php
												$con= mysqli_connect('localhost','root','');
												$sel=mysqli_select_db($con,"frizerie");
												$sql = "SELECT * FROM about where id=10";
												$result =mysqli_query($con,$sql);
												$row =mysqli_fetch_array($result);
												echo $row['stories'];
											?>
										</p>
                                    </div>
                                    <div class="testi-meta">
                                        <img src="uploads/testi_01.png" alt="" class="img-responsive alignright">
                                        <h4>James Fernando</h4>
                                    </div>
                                    <!-- end testi-meta -->
                                </div>
                                <!-- end testimonial -->
                                <div class="testimonial clearfix">
                                    <div class="desc">
                                        <h3><i class="fa fa-quote-left"></i> Perfect!</h3>
                                        <p class="lead">
											<?php
												$con= mysqli_connect('localhost','root','');
												$sel=mysqli_select_db($con,"frizerie");
												$sql = "SELECT * FROM about where id=11";
												$result =mysqli_query($con,$sql);
												$row =mysqli_fetch_array($result);
												echo $row['stories'];
											?>
										</p>
                                    </div>
                                    <div class="testi-meta">
                                        <img src="uploads/testi_02.png" alt="" class="img-responsive alignright">
                                        <h4>Jacques Philips </h4>
                                    </div>
                                    <!-- end testi-meta -->
                                </div>
                                <!-- end testimonial -->
                            </div><!-- end carousel -->
                        </div><!-- end col -->
					</div><!-- end container -->	
				</div><!-- end section -->
		
			</div><!-- end row -->
		

	
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="js/responsive-tabs.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    (function($) {
        "use strict";
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
        });
    })(jQuery);
    </script>

</body>
</html>