<?php include "core/init.php"; ?>
<html>
<head>
	<title>ARC | Crea Ricetta</title>
	<meta charset='utf-8'/>
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=0.8">

	<meta name="description" content="Applicazione per l'elaborazione di ricette cosmetiche con  strumenti di controllo e gestione. Salva la tua ricetta all'interno del tuo account e modificala quando e come vuoi!">
	<meta name="keywords" content="spignatto, spignatti, cosmetica, cosmetici, ricetta, ricette, produzione, elaborazione, autoproduzione, strumento, account">
	<meta name="author" content="Augusten">
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow" />
	
	<meta property="og:title" content="ARC - Crea Ricetta" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Applicazione per l'elaborazione di ricette cosmetiche. Salva online le tue ricette. Crea il tuo inventario. Conteggio automatico dell'acqua. Creazione fasi. Moltiplica per quantità diverse. Crea automaticamente la tua cascata di grassi." />
	<meta property="og:site_name" content="ARC - Crea Ricetta" />
	<meta property="og:image" content="http://augusten.altervista.org/crea-ricetta/includes/data/images/arc_icon_facebook.png"/>
	<meta property="og:url" content="http://augusten.altervista.org/crea-ricetta/" />



	<link rel="stylesheet" href="includes/data/bootstrap/css/bootstrap.css"></link>
	<link rel="stylesheet" href="includes/data/flat/flat-ui.css">
	<link rel="stylesheet" href="css/main.css"></link>
	<link rel="stylesheet" href="includes/data/animate/animate.css"></link>
	
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
</head>

<body>
	<div class="wrapper"><!--Primo wrapper chiuso in footer.php-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php
					if (logged_in() === true) 
					{
				?>
						<a class="navbar-brand brand_autenticato" href="index.php"><img src="includes/data/images/arc_little.png" /></a>
						<p class="navbar-text">Ciao 
						<a href="profile.php" class="navbar-link nome_utente"><?php echo strtoupper($user_data["username"])?></a>
						<span style="margin-left:5px; margin-right: 5px">|</span> 
						<a href="ricette.php" class="navnbar-link ricette-link">Ricette</a>
						<span style="margin-left:5px; margin-right: 5px">|</span> 
						<a href="inventario.php" class="navnbar-link inventario-link">Inventario</a>
						<span style="margin-left:5px; margin-right: 5px">|</span> 
						<a href="ricetta.php" class="navnbar-link ricetta-link">Crea ricetta</a>
						</p>

				<?php
					} else if (logged_in() === false) {
				?>
						<a class="navbar-brand" href="index.php"><img src="includes/data/images/arc_little.png" /> <span style="vertical-align:middle">Crea Ricetta</span></a>
						<p class="navbar-text navbar-text-login" style="margin-right:0"><a href="login_form.php" class="navbar-link nome_utente">LOGIN</a></p>
				<?php		
					}
				?>
				
			</div>
			<div class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav">
					<li><a href="ricetta.php">Crea la tua ricetta</a></li>
					
					<?php
						if (logged_in() === false) 
						{
					?>
						<li><a href="login_form.php">Login</a></li>
						<li><a href="register.php">Registrati</a></li>
					



					<?php
						} else if (logged_in() === true) {
					?>
						<li><a href="profile.php">Profilo</a></li>
						<li><a href="ricette.php">Ricette</a></li>
						<li><a href="inventario.php">Inventario</a></li>
					<?php 
						}
					?>


					<li><a href="info.php">Info</a></li>
					<li><a href="contact.php">Contact</a></li>

					<?php
						if (logged_in() === true) {
					?>
						<li><a href="logout.php">Logout</a></li>
					<?php 
						}
					?>

				</ul>

				
			</div>
		</nav>