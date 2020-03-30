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
    <title>SMBarber - Programare</title>  
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
					
					<li><a  href="about.php">Despre noi</a></li>
					<li><a href="services.php">Verifică programul nostru</a></li>
					<li><a class="active" href="appointment.php">Programează-te</a></li>
					<li><a href="main_login.php">Deconectează-te</div>
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
									<h1>Programare</h1>
								</div>
								<div class="clearfix"></div>
								<ol class="breadcrumb">
									<li class="active">Programare</li>
								</ol>
								<div class="much">
									<img src="uploads/mustache.png" alt=""/>
								</div>
							</div>
							<!-- .title end -->
						</div>
					</div>
				</div>
			</div><!-- end all-page-bar -->
                    <div class="row">
						<div class="col-md-6">
							<div class="Programare-left">
								<h2>Orar</h2>
								<div class="Programare-time">
									<ul>
										<li>
											<span>De Luni până Vineri</span><span>9:00-18:00</span>
										</li>
										<li>
											<span>Sâmbătă  </span><span>10:00-16:00</span>
										</li>
										<li>
											<span>Duminică  </span><span>ÎNCHIS</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
						<div class="col-md-6">
							<div class="Programare-left">
								<h2>Prețuri</h2>
								<div class="Programare-time">
									<ul>
										<li>
											<span>Tuns Bărbați </span><span>15 LEI</span>
										</li>
										<li>
											<span>Tuns Copii </span><span>10 lEI</span>
										</li>
										<li>
											<span>Tuns Barbă  </span><span>5 LEI</span>
										</li>
										<li>
											<span>Spălat,Tratament și Masaj </span><span>25 LEI</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

                        <div class="col-md-6">
                            <div class="contact_form">
                                <div id="message"></div>
                                <form  class="row" action="programare.php"  method="POST">
                                    <fieldset class="row-fluid">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="nume" id="nume" class="form-control" placeholder="Nume">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="prenume" id="prenume" class="form-control" placeholder="Prenume">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Adresă de email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="telefon" id="telefon" class="form-control" placeholder="Telefon">
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="data" id="data" class="form-control" placeholder="aaaa-ll-zz">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="ora" id="ora" class="form-control" placeholder="Scrie ora fixă!">
										</div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="form-control" name="detalii" id="detalii" rows="6" placeholder="Detalii despre programarea ta.."></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <input type="submit" name="submit" value="Trimite" class="btn btn-light btn-radius btn-brd grd1 btn-block subt">
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div><!-- end col -->
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
                        <p class="lead"><?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=9";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
										?></p>
                        </div>
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="testi-carousel owl-carousel owl-theme">                                
                                <div class="testimonial clearfix">
                                    <div class="desc">
                                        <h3><i class="fa fa-quote-left"></i> Nemaipomenit!</h3>
                                        <p class="lead"><?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=10";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
										?><p>
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
                                        <p class="lead"><?php
										$con= mysqli_connect('localhost','root','');
										$sel=mysqli_select_db($con,"frizerie");
										$sql = "SELECT * FROM about where id=11";
										$result =mysqli_query($con,$sql);
										$row =mysqli_fetch_array($result);
										echo $row['stories'];
										?></p>
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