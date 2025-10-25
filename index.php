<?php ?>

<!DOCTYPE html>
<html lang="de" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AAWA - Austrian Agancy for World Architects</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fullpage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

	<header class="border-bottom bg-dark-subtle-oc bg-opacity-10">

		<nav class="navbar navbar-expand-lg">

			<div class="container-fluid">

				<a class="navbar-brand nav-link" href="https://aawa.at"><img src="/assets/img/AAWA_Logo_800x800.png" width="30" height="30" alt=""> AAWA</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Wer sind wir</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Unsere Abteilungen
							</a>

							<ul class="dropdown-menu">
								<a class="dropdown-item" href="#">DEC</a>
								<a class="dropdown-item" href="#">MD</a>
								<a class="dropdown-item" href="#">AMD</a>
								<a class="dropdown-item" href="#">SD</a>
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Die SPARKS-Allianz</a>
						</li>

					</ul>

					<ul class="navbar-nav list-inline">
						<li class="">
							<a class="nav-link" href="#" rel="nofollow" target=""><i class="fab fa-youtube"></i></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" rel="nofollow" target=""><i class="fab fa-twitter"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
	</header>
    <main id="fullpage">
	
		<div class="section active" id="section1">
			<div class="content">

				<div id="video">
					<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
						<source src="/assets/img/AAWA_Compilation1.mp4" type="video/mp4">
					</video>
				</div>

				<div id="videoOverlay">
					<div id="title">
						<p class="display-1" ><strong>Austrian Agency</strong></p>
						<p class="h4" >for</p>
						<p class="display-1" ><strong>World Architects</strong></p>
					</div>
				</div>

			</div>
		</div>
		
		<div class="section" id="section2">
			<div class="content">
				<div class="devPlaceholder">
					<h1>Wer sind wir</h1>
				</div>
			</div>
		</div>
		
		<div class="section" id="section3">
			<div class="content">
				<section class="text-center d-flex flex-column h-100" aria-labelledby="departments-heading">
					<div class="js-padding d-flex flex-column flex-grow-1">
						<h2 id="departments-heading" class="mb-4">Unsere Abteilungen</h2>
						<p class="lead mb-5">Unsere Organisation gliedert sich in vier Kernabteilungen. Wähle eine Abteilung für mehr Informationen.</p>
						<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 flex-grow-1 align-items-stretch mx-0">
							<!-- DEC -->
							<div id="DEC-Card" class="col d-flex">
								<div class="card h-100 shadow-sm bg-dark text-white d-flex flex-column w-100">
									<div class="card-body d-flex flex-column flex-grow-1">
										<p class="mt-lg-card card-text">Department of Engineering and Construction — zuständig für Architektur, Layouts und technische Konzepte innerhalb unserer Organisation.</p>
										<a href="#DEC" class="mt-auto btn">Mehr erfahren</a>
									</div>
								</div>
							</div>
							<!-- MD -->
							<div id="MD-Card" class="col d-flex">
								<div class="card h-100 shadow-sm text-white d-flex flex-column w-100">
									<div class="card-body d-flex flex-column flex-grow-1">
										<p class="mt-lg-card card-text">Merchant Department — Verantwortlich für Handel und Wirtschaftsbeziehungen innerhalb der Organisation.</p>
										<a href="#MD" class="mt-auto btn">Mehr erfahren</a>
									</div>
								</div>
							</div>
							<!-- AMD -->
							<div id="AMD-Card" class="col d-flex">
								<div class="card h-100 shadow-sm bg-dark text-white d-flex flex-column w-100">
									<div class="card-body d-flex flex-column flex-grow-1">
										<p class="mt-lg-card card-text">Assistance and Maintenance Department — Zuständig für Instandhaltung, Wartung und Supportorganisationseinrichtungen und -fahrzeuge.</p>
										<a href="#AMD" class="mt-auto btn">Mehr erfahren</a>
									</div>
								</div>
							</div>
							<!-- SD -->
							<div id="SD-Card" class="col d-flex">
								<div class="card h-100 shadow-sm bg-dark text-white d-flex flex-column w-100">
									<div class="card-body d-flex flex-column flex-grow-1">
										<p class="mt-lg-card card-text">Security Department — Sorgt für Schutz und Sicherheit der Organisation, inklusive physischer und Cyber-Sicherheit.</p>
										<a href="#SD" class="mt-auto btn">Mehr erfahren</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					</section>
			</div>
		</div>
		
		<div class="section" id="section4">
			<div class="content">
				<div class="devPlaceholder">
					<h1>Die SPARKS-Allianz</h1>
				</div>
			</div>
		</div>
		
	</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/fullpage.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>