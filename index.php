<?php ?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/fullpage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body>

	<header>

		<nav class="navbar navbar-expand-lg">

			<div class="container-fluid">

				<a class="navbar-brand nav-link" href="https://aawa.at"><img src="/assets/img/AAWA_Logo_800x800.png" width="30" height="30" alt=""><strong>AAWA - Austrian Agency for World Architects</strong></a>

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
				<div class="devPlaceholder">
					<h1>Unsere Abteilungen</h1>
				</div>
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