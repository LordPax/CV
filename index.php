<!DOCTYPE html>

<html lang = "fr">
	<head>
		<title>CV - teddy GAUTHIER</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="include/design.css">
		<script type = "text/javascript" src = "https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type = "text/javascript" src = "include/script.js"></script>
		<meta name = "viewport" content = "width=divice-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<div class="large header">
				<div class = "info_perso">
					<span class = "info nom">Teddy GAUTHIER</span>
					<span class = "info ville">Pontault-Combault 77340</span>
					<span class = "info num">0777984056</span>
					<span class = "info email">teddy.gauthier@outlook.com</span>
					<span class = "info age">20 ans</span>
				</div>
				<img src = "images/Moi.jpg" class = "info_photo">
			</div>
		</header>
		<nav class = "objectif">
			<div class = "large"> <!-- centre -->
				<span class = "important">Objectif : </span>Stage de développement informatique
			</div>
		</nav>
		<section>
			<div class="large corps">
				<!-- <div class = "top">
					<div class = "fen">
						<div class = "fen_titre">Description</div>
						<p class = "fen_contenu">
							merde
						</p>
					</div>
				</div> -->
				<div class = "corps2">
					<div class = "main">
						<div class = "fen">
							<div class = "fen_titre">Description</div>
							<p class = "fen_contenu">
								Étudiant autodidact, j'aime apprendre de nouvelle chose qui pourront me servir. Je suis actuellement à la recherche d'un stage de 10 à 14 semaines dans le domaine du développement informatique. Mon domaine de prédilection est le développement web.
							</p>
						</div>
						<div class = "fen">
							<div class = "fen_titre">Competence</div>
							<p class = "fen_contenu">
								<div class = "fen_sous_contenu"><span class = "important">Back-end :</span> PHP, SQL, NodeJS, ExpressJS</div>
								<div class = "fen_sous_contenu"><span class = "important">Font-end :</span> HTML, CSS, JS, jQuery</div>
								<div class = "fen_sous_contenu"><span class = "important">Serveur Web : </span> Apache, MySQL</div>
								<div class = "fen_sous_contenu"><span class = "important">Autre langage :</span> C, C++, Java, Bash, Python, Lua, BrainFuck</div>
								<div class = "fen_sous_contenu"><span class = "important">Logiciel :</span> Git, Github, Gimp, SSH, FileZilla</div>
								<div class = "fen_sous_contenu"><span class = "important">OS :</span> Linux (pour tout), windaub (juste pour jouer)</div>
								<div class = "fen_sous_contenu"><span class = "important">Document :</span> MarkDown, LibreOffice, suite office</div>
								<div class = "fen_sous_contenu">Préférence pour le developpement back-end</div>
							</p>
						</div>
						<div class = "fen" id = "projet">
							<div class = "fen_titre">Projet personnel</div>
							<div class = "fen_contenu fen_contenu_projet">
								<div class = "projet">
									<a class = "projet_lien projet1" href = "mes_sites/gobodrive" target = "_blank">
										<img class = "projet_img img1" src = "images/gobo_img.png">
										<div class = "projet_descrip descrip1">
											<div class = "projet_descrip_titre">Gobo Drive</div>
											<div class = "projet_descrip_contenu">
												Site créé pendant mes années lycée permettant d'upload des fichiers
											</div>
										</div>
									</a>
									<script type="text/javascript">
										$('.descrip1').hide();
										$('.projet1').mouseover(() => {
											$('.descrip1').stop().fadeIn(200);
											// $('.img1').css({'width' : '210px'});
										});

										$('.projet1').mouseout(() => {
											$('.descrip1').stop().fadeOut(200);
											// $('.img1').css({'width' : '200px'});
										});
									</script>
								</div>
								<div class = "projet">
									<a class = "projet_lien projet2" href = "mes_sites/site" target = "_blank">
										<img class = "projet_img img2" src = "images/site_img.png">
										<div class = "projet_descrip descrip2">
											<div class = "projet_descrip_titre">Site</div>
											<div class = "projet_descrip_contenu">
												Site mort-né créé pendant mes années lycée permettant de comparer des produits high-tech 
											</div>
										</div>
									</a>
									<script type="text/javascript">
										$('.descrip2').hide();
										$('.projet2').mouseover(() => {
											$('.descrip2').stop().fadeIn(200);
											// $('.img1').css({'width' : '210px'});
										});

										$('.projet2').mouseout(() => {
											$('.descrip2').stop().fadeOut(200);
											// $('.img1').css({'width' : '200px'});
										});
									</script>
								</div>
								<div class = "projet">
									<a class = "projet_lien projet3" href = "mes_sites/cryptage" target = "_blank">
										<img class = "projet_img img3" src = "images/chiffrement_img.png">
										<div class = "projet_descrip descrip3">
											<div class = "projet_descrip_titre">Chiffrement</div>
											<div class = "projet_descrip_contenu">
												Ce qui est important derrière ce projet n'est le site en lui-même mais les fonctions de chiffrement. Le site n'est qu'un cas d'utilisation parmi d'autres
											</div>
										</div>
									</a>
									<script type="text/javascript">
										$('.descrip3').hide();
										$('.projet3').mouseover(() => {
											$('.descrip3').stop().fadeIn(200);
											// $('.img1').css({'width' : '210px'});
										});

										$('.projet3').mouseout(() => {
											$('.descrip3').stop().fadeOut(200);
											// $('.img1').css({'width' : '200px'});
										});
									</script>
								</div>
								<div class = "projet">
									<a class = "projet_lien projet4" href = "menu" target = "_blank">
										<img class = "projet_img img4" src = "images/menu_img.png">
										<div class = "projet_descrip descrip4">
											<div class = "projet_descrip_titre">Menu</div>
											<div class = "projet_descrip_contenu">
												Juste un site qui recense mes autres sites
											</div>
										</div>
									</a>
									<script type="text/javascript">
										$('.descrip4').hide();
										$('.projet4').mouseover(() => {
											$('.descrip4').stop().fadeIn(200);
											// $('.img1').css({'width' : '210px'});
										});

										$('.projet4').mouseout(() => {
											$('.descrip4').stop().fadeOut(200);
											// $('.img1').css({'width' : '200px'});
										});
									</script>
								</div>
							</div>
							<div class = "fen_contenu fen_contenu_projet2">
								<div class = "projet">
									<a class = "projet_lien projet1" href = "mes_sites/gobodrive" target = "_blank">
										<img class = "projet_img img1" src = "images/gobo_img.png">
										<div class = "projet_descrip descrip1">
											<div class = "projet_descrip_titre">Gobo Drive</div>
											<div class = "projet_descrip_contenu">
												Site créé pendant mes années lycée permettant d'upload des fichiers
											</div>
										</div>
									</a>
								</div>
								<div class = "projet">
									<a class = "projet_lien projet2" href = "mes_sites/site" target = "_blank">
										<img class = "projet_img img2" src = "images/site_img.png">
										<div class = "projet_descrip descrip2">
											<div class = "projet_descrip_titre">Site</div>
											<div class = "projet_descrip_contenu">
												Site mort-né créé pendant mes années lycée permettant de comparer des produits high-tech 
											</div>
										</div>
									</a>
								</div>
								<div class = "projet">
									<a class = "projet_lien projet3" href = "mes_sites/cryptage" target = "_blank">
										<img class = "projet_img img3" src = "images/chiffrement_img.png">
										<div class = "projet_descrip descrip3">
											<div class = "projet_descrip_titre">Chiffrement</div>
											<div class = "projet_descrip_contenu">
												Ce qui est important derrière ce projet n'est le site en lui-même mais les fonctions de chiffrement. Le site n'est qu'un cas d'utilisation parmi d'autres
											</div>
										</div>
									</a>
								</div>
								<div class = "projet">
									<a class = "projet_lien projet4" href = "menu" target = "_blank">
										<img class = "projet_img img4" src = "images/menu_img.png">
										<div class = "projet_descrip descrip4">
											<div class = "projet_descrip_titre">Menu</div>
											<div class = "projet_descrip_contenu">
												Juste un site qui recense mes autres sites
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class = "fen float">
							<div class = "fen_titre">Interet</div>
							<p class = "fen_contenu">
								A coté de l'informatique je fais du tir a l'arc en compétition depuis 9 ans
							</p>
						</div>
					</div>
					<div class = "second">
						<div class = "fen">
							<div class = "fen_titre_sec">Experience pro</div>
							<p class = "fen_contenu">
								<div class = "fen_sous_contenu">Vente d'un site d'annonce en tant que freelance</div>
								<div class = "fen_sous_contenu">Tentative de lancement de 2 sites web à but lucratif avec un coéquipier (échec)</div>
							</p>
						</div>
						<div class = "fen">
							<div class = "fen_titre_sec">Etude</div>
							<p class = "fen_contenu">
								<div class = "fen_sous_contenu">2e année de DUT informatique à Université Paris XIII</div>
								<div class = "fen_sous_contenu">baccalauréat STI2D</div>
							</p>
						</div>
						<div class = "fen">
							<div class = "fen_titre_sec">Contact</div>
							<p class = "fen_contenu">
								<div class = "logo">
									<a class = "" href = "https://github.com/LordPax" target = "_blank"><img class = "logo_img git1" src ="images/GitHub_logo_light.png"><img class = "logo_img git2" src ="images/GitHub_logo_dark.png"></a>
									<a class = "" href = "https://www.linkedin.com/in/teddy-gauthier-ab7082167/" target = "_blank"><img class = "logo_img" src ="images/Linkedin_logo.png"></a>
								</div>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class = "large centre"> <!-- centre -->
				CopyLeft aucun droit réserver
			</div>
		</footer>
	</body>
</html>
