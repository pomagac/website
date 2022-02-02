<?php 
  // redirect if not https
  if(!isset($_SERVER['HTTPS'])) {
    header("Location: https://pomagac.si");
    die();
  }
?>
<!doctype html>
<html lang="sl">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Orodja za razvijalce">
    <meta name="description" content="Nekaj pripomočkov za razvijalce spletnih storitev.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css?2192">
	<link rel="stylesheet" type="text/css" href="style.css?9142">
	<link rel="stylesheet" type="text/css" href="./css/animate.min.css?2458">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/ionicons.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <title>Pomagac.si</title>


    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body>

<!-- Preloader -->
<div id="page-loading-blocs-notifaction" class="page-preloader"></div>
<!-- Preloader END -->


<!-- Main container -->
<div class="page-container">
    
<!-- menu -->
<div class="bloc bgc-dark-jungle-green sticky-nav d-bloc" id="menu">
	<div class="container ">
		<div class="row">
			<div class="col">
				<nav class="navbar row navbar-expand-md navbar-dark" role="navigation">
					<a class="navbar-brand ltc-white" href="./">POMAGAČ</a>
					<button id="nav-toggle" type="button" class="ml-auto ui-navbar-toggler navbar-toggler border-0 p-0" data-toggle="collapse" data-target=".navbar-26660" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse navbar-26660">
						<ul class="site-navigation nav navbar-nav ml-auto">
							<li class="nav-item">
								<a href="./" class="nav-link a-btn ltc-white">Domov</a>
							</li>
							<li class="nav-item">
								<a href="#endpoints" class="nav-link a-btn ltc-white">Endpoints</a>
							</li>
							<li class="nav-item">
								<a href="#primeri" class="nav-link a-btn ltc-white">Primeri</a>
							</li>
							<li class="nav-item">
								<a href="#kontakt" class="nav-link a-btn ltc-white">Kontakt</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- menu END -->

<!-- zacetna-stran -->
<div class="bloc bgc-white l-bloc bloc-fill-screen" id="zacetna-stran">
	<div class="container">
		<div class="row">
			<div class="col-md-6 bloc-margin-bottom">
				<div class="mx-auto d-block blocsapp-device blocsapp-device-imac">
					<img src="img/lazyload-ph.png" data-src="img/imac-screen.jpg" class="img-fluid lazyload" alt="imac screen" />
				</div>
			</div>
			<div class="align-self-center col-md-6 bloc-margin-top">
				<h1 class="mg-md">
					O Pomagaču
				</h1>
				<p class="p-style">
					Gre za zelo okrnjeno spletno aplikacijo, ki je nastala zaradi lastnih potreb.&nbsp;<br><br>Vrača enostavne “poizvedbe”, ki bi utegnile zanimati razvijalce.&nbsp;<br><br>Storitev ne beleži nobenih informacij, vrača samo izpise.&nbsp;<br><br>Pomagač je v celoti brezplačen! ;)<br><br>Za dodajanje novosti nas kontaktirajte.&nbsp;<br>
				</p><a href="#" class="btn btn-d btn-margin-top button-white-black" data-scroll-speed="1000" onclick="scrollToTarget('#endpoints',this)">Več o storitvi<br></a>
			</div>
		</div>
	</div>
</div>
<!-- zacetna-stran END -->

<!-- endpoints -->
<div class="bloc bgc-platinum l-bloc" id="endpoints">
	<div class="container bloc-xl">
		<div class="row">
			<div class="col">
				<h1 class="mg-md text-lg-center text-md-center text-sm-center">
					Obstoječi Endpointi
				</h1>
				<p class="text-lg-center text-md-center text-sm-center">
					Zares sta trenutno Text in Json in še ta ne preslikana 1:1. <br>Stran obstaja od 21. decembra 2021.&nbsp;<br><br>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-lg-3 offset-lg-3 offset-md-2">
				<div class="card">
					<div class="card-header">
						<h3 class="mg-clear text-center">
							TEXT
						</h3>
					</div>
					<div class="card-body">
						<ul class="list-unstyled">
							<li>
								<p class="text-center">
									100% zasebno
								</p>
							</li>
							<li>
								<p class="text-center">
									100% brezplačno
								</p>
							</li>
							<li>
								<p class="text-center">
									100% enostavno
								</p>
							</li>
							<li>
								<p class="text-center">
									100% transparentno
								</p>
							</li>
						</ul>
					</div>
					<div class="card-footer">
					</div>
				</div>
			</div>
			<div class="col-md-4 mt-3 mt-md-0 col-lg-3">
				<div class="card">
					<div class="card-header">
						<h3 class="mg-clear text-center">
							JSON
						</h3>
					</div>
					<div class="card-body">
						<ul class="list-unstyled">
							<li>
								<p class="text-center">
									100% zasebno
								</p>
							</li>
							<li>
								<p class="text-center">
									100% brezplačno
								</p>
							</li>
							<li>
								<p class="text-center">
									100% enostavno
								</p>
							</li>
							<li>
								<p class="text-center">
									100% transparentno
								</p>
							</li>
						</ul>
					</div>
					<div class="card-footer">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>
					<br>
				</p>
				<div class="text-center">
					<a href="#" class="btn btn-d btn-lg button-gray-black" data-scroll-speed="1000" onclick="scrollToTarget('#primeri',this)">Primeri uporabe</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- endpoints END -->

<!-- primeri -->
<div class="bloc bgc-white" id="primeri">
	<div class="container bloc-lg">
		<div class="row">
			<div class="offset-lg-1 col-lg-10">
				<h1 class="mg-md">
					Primer - IP naslov
				</h1>
				<p>
					<a href="https://text.pomagac.si/my-ip-address-ipv4/" rel="nofollow noopener noreferrer">https://text.pomagac.si/my-ip-address-ipv4/</a>&nbsp;—> vrne vaš IPv4 naslov v t.i. plain-text izpisu.<br><a href="https://json.pomagac.si/my-ip-address-ipv4/" rel="nofollow noopener noreferrer">https://json.pomagac.si/my-ip-address-ipv4/</a>&nbsp;—> vrne vaš IPv4 naslov v json-text formatu.<br>
				</p>
				<h1 class="mg-md">
					<br>Primer - HTML Headers
				</h1>
				<p>
					Vrne se HTML Request head.<br><a href="https://text.pomagac.si/my-html-headers" rel="nofollow noopener noreferrer">https://text.pomagac.si/my-html-headers/</a>&nbsp;—> vrne poslane HTML glave.<br>
				</p>
				<h1 class="mg-md">
					<br>Primer - HTML request parameters
				</h1>
				<p>
					Izpišejo se parametri vseh HTML metod: GET, POST, PUT, HEAD, DELETE, PATCH, OPTIONS.<br><a href="https://text.pomagac.si/my-html-request-parameters" rel="nofollow noopener noreferrer">https://text.pomagac.si/my-html-request-parameters/</a>&nbsp;—> vrne vsebino vseh metod, sočasno ena.<br>
				</p>
				<h1 class="mg-md">
					<br>Primer - HTML GET method<br>
				</h1>
				<p>
					Vrnejo se samo HTML GET parametri in njihove vrednosti.<br><a href="https://text.pomagac.si/my-html-get-parameters" rel="nofollow noopener noreferrer">https://text.pomagac.si/my-html-get-parameters/</a>&nbsp;—> vrne Array GET parametrov in njihovih vrednosti.<br>
				</p>
				<h1 class="mg-md">
					<br>Primer - HTML POST method
				</h1>
				<p>
					Vrnejo se samo HTML POST parametri in njihove vrednosti.<br><a href="https://text.pomagac.si/my-html-post-parameters" rel="nofollow noopener noreferrer">https://text.pomagac.si/my-html-post-parameters/</a>&nbsp;—> vrne Array POST parametrov in njihovih vrednosti.<br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- primeri END -->

<!-- kontakt -->
<div class="bloc bgc-platinum" id="kontakt">
	<div class="container bloc-xl">
		<div class="row">
			<div class="col">
				<h1 class="mg-md text-lg-center h1-margin-bottom text-md-center text-center">
					Kontakt
				</h1>
				<p class="text-lg-center p-margin-top text-md-center text-center">
					Sprejemamo odzive, vprašanja in predloge.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 offset-lg-3 offset-md-2 col-md-8">
				<form id="form_send_message" data-form-type="blocs-form" novalidate data-success-msg="Vaše sporočilo je bilo poslano!" data-fail-msg="Ups, nekaj je šlo narobe.">
					<div class="form-group">
						<label>
							Ime
						</label>
						<input id="ime" class="form-control" required data-validation-required-message="Kako naj vas naslovimo?" />
					</div>
					<div class="form-group">
						<label>
							Email
						</label>
						<input id="email" class="form-control" type="email" required data-error-validation-msg="Napačen email format." data-validation-required-message="Email naslov je obvezen podatek." />
					</div>
					<div class="form-group">
						<label>
							Tema
						</label>
						<select class="form-control" id="tema">
							<option value="vprasanje">
								Vprašanje
							</option>
							<option value="prosnja">
								Prošnja
							</option>
							<option value="ostalo">
								Ostalo
							</option>
						</select>
					</div>
					<div class="form-group">
						<label>
							Sporočilo
						</label><textarea id="sporocilo" class="form-control" rows="4" cols="50" required data-validation-required-message="Prosimo, vnesite sporočilo."></textarea>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="form_not_a_robot" data-validation-minchecked-message="Potrebna je potrditev tega polja." data-validation-minchecked-minchecked="1" name="form-not-a-robot" />
						<label class="form-check-label">
							Nisem robot!
						</label>
					</div> 
					<button class="bloc-button btn btn-d btn-submit-margin-top btn-lg button-gray-black btn-block" type="submit" id="submit-button">
						Pošlji sporočilo
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- kontakt END -->

<!-- ScrollToTop Button -->
<a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1',this)"><span class="fa fa-chevron-up"></span></a>
<!-- ScrollToTop Button END-->


<!-- noga -->
<div class="bloc bgc-black d-bloc" id="noga">
	<div class="container bloc-md">
		<div class="row">
			<div class="col-12">
				<div class="text-center">
					<a href="https://github.com/pomagac" rel="nofollow noopener noreferrer" target="_blank"><span class="icon-md ion ion-social-github"></span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- noga END -->

</div>
<!-- Main container END -->
    

<script src="./js/jquery-3.5.1.min.js?1975"></script>
<script src="./js/bootstrap.bundle.min.js?4707"></script>
<script src="./js/blocs.min.js?5978"></script>
<script src="./js/jqBootstrapValidation.js"></script>
<script src="./js/formHandler.js?5325"></script>
<script src="./js/lazysizes.min.js" defer></script>
<!-- Additional JS END -->


</body>
</html>
