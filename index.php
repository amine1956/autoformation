<!DOCTYPE HTML>
<?php

include('conn.php');
if(isset($_GET['d'])){
    unset($_SESSION['IDETUDIANT']);
    unset($_SESSION['NOM']);
    unset($_SESSION['PRENOM']);
    unset($_SESSION['ETAT']);
   session_destroy();
}
if(isset($_GET['cours'])){
    if(isset($_SESSION['IDETUDIANT']))
        header("Location: http://127.0.0.1/learn/courses.php?idlangage={$_GET['cours']}");
       else echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
        </script>
        ";
     }
if(isset($_GET['c'])){
    if(isset($_SESSION['IDETUDIANT']))
        header("Location: http://127.0.0.1/learn/commentaire.php");
       else echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
        </script>
        ";
     }
if(isset($_GET['cc'])){
    if(isset($_SESSION['IDETUDIANT']))
        header("Location: http://127.0.0.1/learn/contact.php");
       else echo"
        <script> 
        alert(\"vous devez faire une connexion d'abord  ou creer un compte !\");
        </script>
        ";
     }
if(isset($_GET['com'])){
    echo"
        <script> 
        alert(\"votre commentaire a été ajouter avec succes\");
        </script>
        ";
}
if(isset($_GET['con'])){
    echo"
        <script> 
        alert(\"votre message a été envoyer avec succes\");
        </script>
        ";
}

?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Learn &mdash; Formation gratuite</title>
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
						<p class="num">Appler : +212 684100914</p>
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
							<li class="active"><a href="index.php">Accueil</a></li>
							
							
							<li class="has-dropdown">
								<a href="blog.php">Cours</a>
								<ul class="dropdown">
									<?php
                                    $sql="select * from langages ";
                  
                $req=mysqli_query($con,$sql);
                while($tab=mysqli_fetch_assoc($req)){
                echo "
                       <li><a  href=?cours={$tab['idlangage']}>{$tab['designationlangage']}</a></li>
								";}	
									?></ul>
							</li>
							<li><a href="index.php?cc=oui">Contact</a></li>
                            <li><a href="index.php?c=oui">Commentaire</a></li>
							 <?php 
                            if(!isset($_SESSION['IDETUDIANT']))
                                 echo"
							<li class=\"btn-cta\"><a href=connexion.php><span>Connexion</span></a></li>
							<li class=\"btn-cta\"><a href=\"inscription.php\"><span>Inscription</span></a></li>";
                            else 
                            echo"
							<li class=\"btn-cta\"><a href=?d><span>Déconnexion</span></a></li>
							";
                            ?>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>L'art d'enseigner est l'art d'aider à la découverte</h1>
							<h2>formation gratuite introduit par <a href="https://www.enset-media.ac.ma/" target="_blank">ENSETM</a></h2>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="blog.php">Take A Course</a> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
        
	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
                 <?php 
                $t=mysqli_query($con,"select * from etudiants ");
                $c=mysqli_num_rows($t);
                
                echo"
				<div class=\"col-md-3 text-center animate-box\">
                   
                    
                    
                    
                   
					<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to= $c data-speed=500 data-refresh-interval=\"50\"></span>
					<span class=\"fh5co-counter-label\">Etudiants</span>
				</div>";
                $t=mysqli_query($con,"select * from langages ");
                $c=mysqli_num_rows($t);
                echo"
				<div class=\"col-md-3 text-center animate-box\">
					<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=$c data-speed=\"500\" data-refresh-interval=\"50\"></span>
					<span class=\"fh5co-counter-label\">Cours</span>
				</div>";
                
                $t=mysqli_query($con,"select * from chapitre ");
                $c=mysqli_num_rows($t);
                echo"
				<div class=\"col-md-3 text-center animate-box\">
					<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=$c data-speed=\"5000\" data-refresh-interval=\"50\"></span>
					<span class=\"fh5co-counter-label\">Chapitres</span>
				</div>
                ";
                
                $t=mysqli_query($con,"select * from commentaires ");
                $c=mysqli_num_rows($t);
                echo"
				<div class=\"col-md-3 text-center animate-box\">
					<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=$c data-speed=\"5000\" data-refresh-interval=\"50\"></span>
					<span class=\"fh5co-counter-label\">Commentaires</span>
				</div>";
                     ?>
			</div>
		</div>
	</div>
<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Nos langages de programmation </h2>
					<p>Voila nos langages de programmation que nous vous proposons à apprendre
                    </br>
                        <?php
                        $t=mysqli_query($con,"select * from langages ");
                $c=mysqli_num_rows($t);
               if(!isset($_GET['page']))
                   $_GET['page']=1;
                        $d=($_GET['page']-1)*6;
                        $f=$d+6;
              for($i=1;$i<=ceil($c/6);$i++){
                 if($i==$_GET['page']) 
        echo " <a href=?page=$i><u>$i</u></a> ";
                  else
              echo " <a href=?page=$i>$i</a> ";}
                         ?>
                    </p>
				</div>
			</div>
		</div>
    <div class="container">
        <?php
         
        ?>
              
		<div class="container">
			<div class="row">
				
                <?php 
              
                $sql="select * from langages limit $d,$f ";
                  
                $req=mysqli_query($con,$sql);
                while($tab=mysqli_fetch_assoc($req)){
                echo "
				<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
					<a href='index.php?cours={$tab['idlangage']}'><img src={$tab['logolangage']} alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
                    </br>
						<h3>{$tab['designationlangage']}</h3>
						<span>voir le cours</span>
					</a>
				</div>";
        }
				
				
				?>
				
			</div>
		</div>
    </div>
		
	</div>

	

	<div id="fh5co-steps">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Commencer le cours</h2>
					<p>Voici les etapes pour apprendre un cours</p>
				</div>
			</div>

			<div class="row bs-wizard animate-box" style="border-bottom:0;">
                
				<div class="col-xs-3 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum"><h4>Etape 1</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Faire un connexion</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step active"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Etape 2</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Choisir un cours</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>Etape 3</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Lire le cours</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
					<div class="text-center bs-wizard-stepnum"><h4>Etape 4</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Passer le Quiz</p></div>
				</div>
			</div>

		</div>
	</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Testimonials</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/M.jpeg" alt="user">
                                        M.KhAMMOUR
									</figure><figure>
										<img src="images/A.jpg" alt="user">
                                    A.ElASRI <br>
									</figure><figure>
										<img src="images/s.png" alt="user">
                                    A.SALK
									</figure><figure>
										<img src="images/l.png" alt="user">
                                    L.ELBOUYOUD
									</figure>
                                    <figure>
										<img src="images/i.png" alt="user">
                                        I.BOUIZOU
									</figure>
									<span>Groupe de projet <br> éleves ingénieurs à ENSET Mohammadia</span>
									<blockquote>
										<p>&ldquo;Bienvenu dans notre site web , Nous ésperons de vous faciliter l'apprentissage des cours que nous vous proposons &rdquo;</p>
									</blockquote>
								</div>
							</div>
                           
                            <div class="item">
								
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Commentaires</h2>
<p>Voici les récents commentaires de chaque langage <a href="index.php?c=oui">Ajouter un commentaire </a> </p>
				</div>
			</div>
			<div class="row">
                <?php
                $sql="select * from etudiants natural join commentaires natural join langages order by DateCommentaire DESC limit 3";
                $req=mysqli_query($con,$sql);
                while($tab=mysqli_fetch_assoc($req)){
                echo"
				<div class='col-lg-4 col-md-4'>
					<div class='fh5co-blog animate-box'>
						<a href=><img class='img-responsive' src='{$tab['logolangage']}' alt= ></a>
						<div class='blog-text'>
							<h3><a href= >{$tab['NOM']} {$tab['PRENOM']}</a><span class=comment >{$tab['dateCommentaire']}</span></h3>
							<p>".substr($tab['commentaire'],0,300)."
							...
						</div> 
					</div>
				</div>";}
				?>
				
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

