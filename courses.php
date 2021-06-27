<!DOCTYPE HTML>
<?php
include('conn.php');
if(isset($_GET['d'])){
    header("Location: http://127.0.0.1/learn/index.php?");
    unset($_SESSION['IDETUDIANT']);
    unset($_SESSION['NOM']);
    unset($_SESSION['PRENOM']);
    unset($_SESSION['ETAT']);
   session_destroy();
}
if(isset($_GET['cours'])){
    if(!isset($_SESSION['IDETUDIANT']))
        echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
        </script>
        ";
    else header("Location: http://127.0.0.1/learn/courses.php?idlangage={$_GET['cours']}");}
if(isset($_GET['c'])){
    if(isset($_SESSION['IDETUDIANT']))
        header("Location: http://127.0.0.1/learn/commentaire.php");
       else echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
        </script>
        ";
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
						<div id="fh5co-logo"><a href="index.php">ENSET<span>.M</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li class=""><a href="index.php">Accueil</a></li>
							
							
							<li class="has-dropdown active">
								<a href="blog.php" >Cours</a>
								<ul class="dropdown">
                                    <?php
                                    $sql="select * from langages ";
                  
                $req=mysqli_query($con,$sql);
                while($tab=mysqli_fetch_assoc($req)){
                echo "
                       <li><a href=?cours={$tab['idlangage']}>{$tab['designationlangage']}</a></li>
								";	}
                                     $sql="select * from langages where  idlangage={$_GET['idlangage']}";
                                     $req=mysqli_query($con,$sql);
                                    $tab=mysqli_fetch_assoc($req);
                                    
									?>
								</ul>
							</li>
							<li><a href="index.php?cc=oui">Contact</a></li>
                            <li><a href="index.php?c=oui">Commentaire</a></li>
                            <?php 
                            if(isset($_SESSION['IDETUDIANT']))
                               echo"
							<li class=\"btn-cta\"><a href=?d=1><span>Déconnexion</span></a></li>";
                            else 
                            echo"
							<li class=\"btn-cta\"><a href=><span>Connexion</span></a></li>
                            <li class=\"btn-cta\"><a href=><span>Inscription</span></a></li>";?>
							
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
<?php
        echo"
	<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url(images/code.jpg);\" data-stellar-background-ratio=\"0.5\">";
        ?>
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <?php
                            
                           echo" <h1>{$tab['designationlangage']}</h1>
							<h2>formation gratuite introduit par <a href=\"\" >ENSETM</a></h2>";
                            ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php echo"<h2>Apprendre un cours de {$tab['designationlangage']} </h2>
					
                         ".$tab['descriptionlangage'];
                    echo"<br><h2>Choisi un chapitre </h2><br>";
                    $sql="select quiz,logolangage,chapitre.idchapitre as idchapitre ,nomChapitre,idlangage,pdf,video from chapitre natural join langages where idlangage={$tab['idlangage']}";
                     $req=mysqli_query($con,$sql);
                    $t=mysqli_num_rows($req);
                    $i=1;
                    $id=0;
                    
                    if(!isset($_GET['chapitre']))
                        $_GET['chapitre']=1;
                    $c="";
                         while($tab=mysqli_fetch_assoc($req)){
                             $v="";
                             $v2="";
                             if($i==$_GET['chapitre']){
                                 $idp=$tab['pdf'];
                             $idv=$tab['video'];
                                 $q=$tab['quiz'];
                                 $idD=$tab['nomChapitre'];
                                 $v="<u>";
                                 $v2="</u>";
                                 $c=$tab['logolangage'];
                                 
                           }
                             echo "<div style=\"float:left\">
										<a href=\"?chapitre=$i&idlangage={$tab['idlangage']}&idchapitre={$tab['idchapitre']}\"><img width=50 style=\"border-radius: 50%; \" src=\"{$tab['logolangage']}\" >
                                        <br>
									 $v Chapitre $i $v2 &nbsp;&nbsp; </a> 
                                    </div>  ";
                           
                            
                               $i++;
                             $id=$tab['idlangage'];
                             
                         }
                    
                    
                  echo"</div><div class=container style=\"float:left;\"><center><a class=\" popup-vimeo btn-video\" href=\"$idp\"> <img width=50 style=\"border-radius: 50%; \" src=\"$c\" > Cours PDF complet</a>";
                   
                    echo"<div class=container style=\"float:left\"><a class=\" popup-vimeo btn-video\" href=\"$q\"> <img width=50 style=\"border-radius: 50%; \" src=\"$c\" > Quiz</a> </center></div>";
                     
        
                 ?>
				</div>
			</div>
		</div>	
        <div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><?php echo $idD; ?></h2>
					<p>Voici une video qui explique ce Chapitre .</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<?php
                            echo"
							<p><a class=\"btn btn-primary btn-lg popup-vimeo btn-video\" href=\"$idv\"><i class=\"icon-play\"></i> Une Video pour le chapitre </a></p>";
                                ?>
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
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

