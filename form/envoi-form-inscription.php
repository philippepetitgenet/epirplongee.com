<?php

$destinataire = 'resa@epirplongee.com';
$objet .= "\n" . 'inscription à un séjour via le site epirplongee.com';


$headers = 'from: ' . $_POST['expediteur'] ."\n";
$headers .= 'Bcc: ' . $_POST['expediteur'] ."\n";
$headers .= 'Content-Type: text/plain; charset="UTF-8"'."\n";
$headers .= 'Content-Transfer-Encoding: 8bit';


$message .= "\n" . 'nom : ' . $_POST['nom'];
$message .= "\n" . 'prenom : ' . $_POST['prenom'];
$message .= "\n" . 'date de naissance : ' . $_POST['birthday'];
$message .= "\n" . 'rue : ' . $_POST['adress'];
$message .= "\n" . 'ville : ' . $_POST['city'];
$message .= "\n" . 'code postal : ' . $_POST['code'];
$message .= "\n" . 'expediteur : ' . $_POST['expediteur'];
$message .= "\n" . 'telephone : ' . $_POST['tel'];
$message .= "\n" . 'sejour choisi : ' . $_POST['stay'];
$message .= "\n" . 'certificat cgv ok : ' . $_POST['certificate'];


if(mail($destinataire,$objet,$message,$headers))
	{ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EPIR école de plongée d'Ile-Rousse</title>
        <meta name="description" content="Centre de plongée d'Ile-Rousse en Haute Corse en région de Balagne">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/34gs.css">
        <link rel="stylesheet" href="../css/34gs-queries.css">

        <link rel="stylesheet" href="../css/flexslider.css" type="text/css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Vous utilisez un navigateur <strong>obsolète</strong>. Merci de <a href="http://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre navigation</p>
        <![endif]-->
        <div class="l-constrained">
            <div class="l-container">
                <header class="l-header">
                    <a class="header-logo" href="index.html">EPIR école de plongée d'Ile-Rousse</a>
                    <div class="nav-social">
                        <a href="#">
                            <i class="icon icon-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="icon icon-googleplus"></i>
                        </a>
                    </div>
                    <nav class="l-nav">
                        <ul class="nav-menu">
                            <li class="nav-link nav-link-tablet-noborder">
                                <a class="nav-link-item " href="../index.html">Accueil</a>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link-item" href="#">Formations</a>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link-item" href="../contact.html">Plongée pro</a>
                            </li>
                            <li class="nav-link nav-link-tablet-noborder">
                                <a class="nav-link-item" href="#">Le centre</a>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link-item" href="exploration.html">Exploration</a>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link-item" href="noustrouver.html">Nous trouver</a>
                            </li>
                            <li class="nav-link nav-link-tablet-noborder">
                                <a class="nav-link-item" href="sejours.html">Séjours</a>
                            </li>
                            <li class="nav-link">
                                <a class="nav-link-item" href="#">Tarifs</a>
                            </li>
                            <li class="nav-link is-active">
                                <a class="nav-link-item" href="contact.html">
                                    <i class="icon icon-contact-grey"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </nav>
                </header><!-- header-->

                <div class="l-validate l-main clearfix container">
                    <div class= "col_1">
                        <div class="main-center">
                        <h1 class="main-title">Votre message est bien parti !</h1>
                        <h1 class="main-title">- merci -</h1>
						<a href="../index.html" class="btn">retourner sur le site</a>
                        </div>
                    </div>
                </div><!-- .l-main -->

                <footer class="l-footer clearfix margintop0">
                    <ul>
                        <li class="col_4">
                            <i class="icon-location"></i>
                            <p><span class="f-venera">Epir</span> :<br>Lotissement Castellaccio<br> Immeuble Bardeglini<br> BP 164 - 20220 Monticellu</p>
                        </li>
                        <li class="col_4 footer-valign-top">
                            <i class="icon-legal"></i>
                            <a href="#">Mentions legales</a>
                        </li>
                        <li class="col_4 footer-valign-top">
                            <i class="icon-legal"></i>
                            <a href="#">Photos souvenir</a>
                        </li>
                        <li class="col_4 footer-valign-top">
                                <i class="icon icon-contact"></i>
                            <span class="footer-contact">
                                <a href="mailto:welcome@epirplongee.com">welcome@epirplongee.com</a><br /><a href="tel:06 81 97 86 82">06 81 97 86 82</a>
                            </span>
                        </li>
                    </ul>
                </footer>
            </div><!-- .l-container -->
        </div><!-- .l-constrained -->

	    <script src="../js/plugins.js"></script>
	    <script src="../js/main.js"></script>

    	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    	<script>
        	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        	e.src='//www.google-analytics.com/analytics.js';
        	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        	ga('create','UA-XXXXX-X');ga('send','pageview');
    	</script>
    </body>
</html>
<?php }
else
	{ ?>
<h1>OooOOOuups !! Désolé mais une erreur a empéché le formulaire d'être envoyé ! Votre message n'a pas été pas prise en compte, merci de bien vouloir remplir le formulaire à nouveau .</h1>
<?php }

?>