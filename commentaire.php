<!DOCTYPE HTML>
<?php
include('conn.php');
if(isset($_GET['c'])){
    if(isset($_SESSION['IDETUDIANT']))
        header("Location: http://127.0.0.1/learn/commentaire.php");
       else echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
        </script>
        ";
     }
if(isset($_POST['ok'])){
          $idlan=$_POST['se']; 
          $idetu=$_SESSION['IDETUDIANT']; 
          $message=mysqli_real_escape_string($con,$_POST['message']); 
          $dt=date("Y-m-d");
            
$sql= "INSERT INTO commentaires VALUES ('','$message','$dt',$idetu,$idlan)";       
mysqli_query($con,$sql);
            
            header("Location: http://127.0.0.1/learn/index.php?com");
}

?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Learn &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="index.php" style="color:#000;">ENSET<span>.M</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							
							
							<li  class="btn-cta1"><a href="index.php"><span>Accueil</span></a></li>
							<li class="btn-cta1"><a href="blog.php"><span>Cours</span></a></li>
                            <li class="btn-cta1"><a href="index.php?cc=oui"><span>Contact</span></a></li>
                            <li class="btn-cta1"><a href="index.php?c=oui"><span>Commentaire</span></a></li>
                            <li class="btn-cta1"><a href="index.php?d=oui"><span>Decounnexion</span></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>



	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
                    </br></br>
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
                    <br><br>
					<h3>Votre commentaire</h3>
					<form method="post" >
						<!-- <div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label> 
								<input type="text" id="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								 <label for="lname">Last Name</label> 
								<input type="text" id="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>-->
                        <div class="row form-group">
                            <div class="col-md-12">
                        <?php
                                $sql="select * from langages ";
                  echo"<select name=se id=\"email\" class=\"form-control\" placeholder=\"votre adresse email \" required>";
                $req=mysqli_query($con,$sql);
                while($tab=mysqli_fetch_assoc($req)){
                    echo"<option value={$tab['idlangage']}>{$tab['designationlangage']}</option>";
                }
                        
                        
                        
                        echo"</select>";
                        ?>
                        </div>
						</div>
				
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
							</div>
						</div>

						
						<div class=" row form-group">
                            <div>
                            
                                </div>
                            <div>
							<input name="ok" type="submit" value="Envoyer Commentaire" class="btn btn-primary" >
                                </div>
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	
<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>A propos de nous </h4>
					<p>Bienvenu dans notre site web , Nous ésperons de vous faciliter l'apprentissage des cours que nous vous proposons </p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Accueil</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Contact</a></li>
                        <li><a href="#">Commentaire</a></li>
						<li><a href="#">Connexion</a></li>
						
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Cours</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">C</a></li>
						<li><a href="#">C++</a></li>
						<li><a href="#">Java</a></li>
						<li><a href="#">Python</a></li>
						<li><a href="#">Php</a></li>
                        <li><a href="#">SQL</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Réseau sociaux</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">WhatsApp</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">LinkdIn</a></li>
					</ul>
				</div>

				
			</div>
<div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; ENSETM 2020-2021. All Rights Reserved.</small> 
						
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

