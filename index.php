<!DOCTYPE HTML>
<html>
	<head>
		<title>Romain Fontaine</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="./assets/css/main.css" />
		<!-- <link rel="stylesheet" href="./assets/css/style.css" /> Emplacement du fichier CSS -->
		<!-- <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
		<script src="https://kit.fontawesome.com/12cb06f3e5.js" crossorigin="anonymous"></script> <!-- Icônes Nav -->
		<audio src="./images/clavier.wav" autoplay></audio> <!-- Audio -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> <!-- Icônes Sociales -->

		<!-- FAVICON --------------------------------------------------------------------------------------------------------------------->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/favicon/png" href="favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/favicon/png" href="favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/favicon/png" href="favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/favicon/png" href="favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/favicon/png" href="favicon-128.png" sizes="128x128" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

	</head>

	<body class="is-preload">

		<div class="headings"><h1>Bienvenue</h1></div>
		  
		<div id="interactions"> <!-- Choix des couleurs -->
			<button><input value="yellow" type="color" id="color"></button>
		</div>

		<!-- Effet curseur -->
		<div id="one" class="cursorHelper"></div>
		<div id="two" class="cursorHelper"></div>
		<div id="three" class="cursorHelper"></div>
		<div id="four" class="cursorHelper"></div>
		<div id="five" class="cursorHelper"></div>

		<!-- Wrapper-->
		<div id="wrapper">

			<!-- Nav -->
			<nav id="nav">
				<a href="#" class="icon solid fa-home"></a>
				<a href="#CV" class="fa fa-vcard"></a>
				<i class="fa-solid fa-user-tie-hair"></i>
				<a href="#projet" class="fas fa-hammer"></a>
				<a href="#contact" class="fa fa-envelope-o"></a>
			</nav>

			<!-- Main -->
			<div id="main">

				<!-- Acceuil -->
				<article id="home" class="panel intro">
					<header>

					<h1 id="taper" data-label="Romain Fontaine"></h1> 
					<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
						
						<p>Développeur Web et Web Mobile</p>

						<!-- Icônes Sociales -->
						<div id="sociales">
							<a href="https://www.linkedin.com/in/rfontainepro"><i class="fa fa-linkedin-square fa-2x"></i></a> <!-- Lien vers Linkedin -->
							<a href="https://github.com/rfontainepro"><i class="fa fa-github fa-2x"></i></a> <!-- Lien vers GitHub -->
						</div>
						
					</header>

					<a href="#CV" class="jumplink pic">
						<span class="aarrow icon solid fa-chevron-right"></span>
						<!-- Image GIF Acceuil -->
						<img src="image/webmaster.gif" alt="" />
					</a>

				</article>

				<!-- CV -->
				<article id="CV" class="panel">

					<header>
						<h2>CV</h2>
					</header>

					<a href="#" class="jumplink reverse">
						<span class="arrow icon solid fa-chevron-left"></span>
					</a>

					<a href="#projet" class="jumplink pic">
						<span class="arrow icon solid fa-chevron-right"></span>
					</a>
					
					<p>
						Fort de plus de 6 années d’expériences dans une société informatique complexe et 
						polyvalente en tant que Support IT / Administrateur Système, je suis actuellement 
						en formation de Développeur Web et Web Mobile à l'école FormaPro sur 
						Annecy-le-Vieux<br>
						<a class=cv_logo href="image/CV_RFO.pdf" download="cv_rfo"><img src="image/cv_logo.png"></a><br>
						Voici mes compétences :
					</p>

					<section>

						<div class="row">

							<div id="SkillBox1">

								<div class="SkillBar">
									<div id="Skill-HTML"> 
										<span class="Skill-Area ">HTML</span>
										<!-- <span class="PercentText ">90%</span> -->
									</div>
								</div>

								<div class="SkillBar">
									<div id="Skill-php">
										<span class="Skill-Area ">PHP</span>
										<!-- <span class="PercentText ">85%</span> -->
									</div>
								</div>
								
								<div class="SkillBar">
									<div id="Skill-CSS">
										<span class="Skill-Area ">CSS</span>
										<!-- <span class="PercentText ">70%</span> -->
									</div>
								</div>
							
								<div class="SkillBar">
									<div id="Skill-jQuery">
										<span class="Skill-Area ">jQuery</span>
										<!-- <span class="PercentText ">40%</span> -->
									</div>
								</div>
								
								<div class="SkillBar">
									<div id="Skill-JS">
										<span class="Skill-Area ">Javascript</span>
										<!-- <span class="PercentText ">65%</span> -->
									</div>
								</div>
									
							</div>

							<div id="SkillBox2">

							<div class="SkillBar">
									<div id="Skill-support">
										<span class="Skill-Area ">Support IT</span>
										<!-- <span class="PercentText ">90%</span> -->
									</div>
								</div>

								<div class="SkillBar">
									<div id="Skill-reseau"> 
										<span class="Skill-Area ">Réseau</span>
										<!-- <span class="PercentText ">70%</span> -->
									</div>
								</div>
								
								<div class="SkillBar">
									<div id="Skill-systeme">
										<span class="Skill-Area ">Système</span>
										<!-- <span class="PercentText ">80%</span> -->
									</div>
								</div>
							
							</div>
						</div>
						
					</section>

				</article>

				<!-- Projet -->
				<article id="projet" class="panel">
					<header>
						<h2>Projet</h2>
					</header>

					<a href="#CV" class="jumplink reverse">
						<span class="arrow icon solid fa-chevron-left"></span>
					</a>

					<a href="#contact" class="jumplink pic">
						<span class="arrow icon solid fa-chevron-right"></span>
					</a>

					<div id="presentation">
						<p>Voici quelques-unes de mes réalisations seul ou en groupe :</p>
					</div>

					<div class="cards">

						<div class="wrapper">
							<div class="card">

								<input type="checkbox" id="card1" class="more" aria-hidden="true">
								<div class="content">
									<div class="front" style="background-image: url(image/memory_cards.jpg)">
										<div class="inner">
											<h2>Memory Cards</h2>
											<label for="card1" class="button" aria-hidden="true">
											<div class="area">Détails</div>
											</label>
										</div>
									</div>
									<div class="back">
										<div class="inner">
											<div class="description">
												<p>→ Projet Individuel</p>
												<a href="https://www.romain.app/projets/memory_cards/">Trouvez le plus rapidement les paires de fruits identiques afin de faire le meilleur score !</a>
											</div>
											<div class="location">Memory Cards</div>
											<label for="card1" class="button return" aria-hidden="true">
												<i class="fas fa-arrow-left"></i>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<input type="checkbox" id="card2" class="more">
								<div class="content">
									<div class="front" style="background-image: url(image/quizi.png)">
										<div class="inner">
											<h2>Quiz Game</h2>
											<label for="card2" class="button" aria-hidden="true">
											<div class="area">Détails</div>
											</label>
										</div>
									</div>
									<div class="back">
										<div class="inner">
											<div class="description">
												<p>→ Projet Groupe</p>
												<a href="https://quizi.promo-105.codeur.online/">Trouvez le plus rapidement les paires de fruits identiques afin de faire le meilleur score !</a>
											</div>
											<div class="location">Quiz Game</div>
											<label for="card2" class="button return" aria-hidden="true">
												<i class="fas fa-arrow-left"></i>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<input type="checkbox" id="card3" class="more">
								<div class="content">
									<div class="front" style="background-image: url(https://images.alphacoders.com/302/thumb-1920-302323.jpg)">
										<div class="inner">
											<h2>Soon...</h2>
											<label for="card3" class="button" aria-hidden="true">
											<div class="area">Détails</div>
											</label>
										</div>
									</div>
									<div class="back">
										<div class="inner">
											<div class="description">
												<p>→ Projet Groupe</p>
												<a href="#">Trouvez le plus rapidement les paires de fruits identiques afin de faire le meilleur score !</a>
											</div>
											<div class="location">Soon...</div>
											<label for="card3" class="button return" aria-hidden="true">
												<i class="fas fa-arrow-left"></i>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>

				<article id="contact" class="panel">

					<header>
						<h2>Contact</h2>
					</header>

					<a href="#projet" class="jumplink reverse">
						<span class="arrow icon solid fa-chevron-left"></span>
					</a>

					<a href="#" class="jumplink pic">
						<span class="arrow icon solid fa-chevron-right"></span>
					</a>

					<!-- Partie qui traitera les données du formulaire -->
					<div class="starter-template">
							
						<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
						<form action="post_contact.php" method="POST"> <!-- Page qui traitera les données du formulaire POST_CONTACT.PHP -->

							<div class="roww">

								<!-- Champ pour renseigner le NOM -->
								<div class="nom">
									<div class="form-group">
										<label></label><br>
										<input required type="text" pattern="^[A-Za-zÀ-ÿ ,.'-]+$" title="Tu sais lire ? Ton NOM ! -_-" maxlength=10 placeholder="Nom" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>"></input>
							<!-- Obliger à remplir le champ REQUIRED --><!------- REGEX refusant certains caractères + Message d'erreur --><!-- MAX 10 caractères -->                                                                  <!----------------------------- Ternaire PHP --------------------------------->
										<span id="compteur_name"></span><!-- Compteur -->
									</div>
								</div>

								<!-- Champ pour renseigner le PRENOM -->
								<div class="prenom">
									<div class="form-group">
										<label></label><br>
										<input required type="text" pattern="^[A-Za-zÀ-ÿ ,.'-]+$" title="Tu sais lire ? Ton PRENOM ! -_-" maxlength=10 placeholder="Prénom" name="firstname" class="form-control" id="inputfirstname" value="<?= isset($_SESSION['inputs']['firstname']) ? $_SESSION['inputs']['firstname'] : ''; ?>"></input>
							<!-- Obliger à remplir le champ REQUIRED --><!------- REGEX refusant certains caractères + Message d'erreur -----><!-- MAX 10 caractères -->                                                                               <!----------------------------- Ternaire PHP ------------------------------------------->           
										<span id="compteur_firstname"></span><!-- Compteur -->
									</div>
								</div>

								<!-- Champ pour renseigner L'EMAIL -->
								<div class="email">
									<div class="form-group">
										<label for="inputemail"></label><br>
										<input type="email" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" title="Tu sais lire ? Ton EMAIL ! -_-" maxlength=30 placeholder="Email" name="email" required class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"></input>
							<!-- Obliger à remplir le champ REQUIRED -- Type EMAIL forcer syntaxe MAIL VERIF --><!------- REGEX refusant certains caractères + Message d'erreur ----->                        <!-- MAX 30 caractères -->                                                                               <!----------------------------- Ternaire PHP ----------------------------------->
									</div>
								</div>

								<!-- Champ du MESSAGE -->
								<div class="message">
									<div class="form-group">
										<label for="inputmessage"></label><br>
										<input type="text" required id="inputmessage" pattern="^[\s\S]{10,}" title="MIN 10 MAX 200 caractères -_-" maxlength=200 placeholder="Votre message" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></input>
										<!-- Obliger à remplir le champ REQUIRED --><!-- REGEX Limiter le nombre de caractère du message MIN 10 --><!-- MAX 200 caractères -->                                                      <!----------------------------- Ternaire PHP --------------------------------------------->
										<span id="compteur_message"></span><!-- Compteur -->
									</div>    
								</div>

								<!-- Bouton ENVOYER -->
								<div class="col-12">
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</div>

							</div>
						</form>
					</div>
				</article>

				<!-- Footer -->
				<div id="footer">
			
					<!-- Mots cachés sur Background -->
					<div id="secret">
						<!--
						<div id="secret1"><p>Motivé</p></div>
						<div id="secret2"><p>Studieux</p></div>
						<div id="secret3"><p>Spontané</p></div>
						<div id="secret4"><p>Patient</p></div>
						<div id="secret5"><p>Pragmatique</p></div>
						-->
					</div>

				</div>
			</div>
        </div>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/script.js"></script>

	</body>
</html>