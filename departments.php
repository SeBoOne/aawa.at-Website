<?php ?>
<!DOCTYPE html>
<html lang="de" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AAWA — Unsere Abteilungen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullpage.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

<div id="site-loader" class="site-loader" role="status" aria-live="polite">
    <div class="site-loader-inner">
        <img src="/assets/img/AAWA_Logo_800x800.png" alt="AAWA loading" class="loader-logo" />
        <div class="loader-spinner" aria-hidden="true"></div>
    </div>
</div>

<?php include __DIR__ . '/php/header.php'; ?>

<main id="departments-fullpage">

    <div class="section" id="dept-main" data-anchor="departments-general">
        <div class="content">
            <section class="py-5 text-light d-flex flex-column h-100">
                <div class="container-fluid js-padding d-flex flex-column h-100">
                    <div class="row h-100 align-items-center gx-4">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center h-100">
                            <h1 class="mb-3">Unsere Abteilungen</h1>
                            <p class="lead mb-4">Hier findest du eine Übersicht unserer vier Kernabteilungen. Klick eine Abteilung an, um zur jeweiligen Bereichsseite zu springen.</p>
                            <div class="row g-3">
                                <div class="col-6 col-md-3">
                                    <a href="#departments/DEC" class="btn btn-outline-light w-100">DEC</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#departments/MD" class="btn btn-outline-light w-100">MD</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#departments/AMD" class="btn btn-outline-light w-100">AMD</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a href="#departments/SD" class="btn btn-outline-light w-100">SD</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 text-center d-flex align-items-center justify-content-center h-100">
                            <img src="/assets/img/AAWA_Logo_800x800.png" alt="AAWA Logo" class="aawa-logo img-fluid">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="section" id="department-slides" data-anchor="departments">

        <!-- DEC -->
        <div class="slide" id="DEC-slide" data-anchor="DEC">
            <div class="content">
                <section class="py-5 text-light d-flex flex-column h-100">
                    <div class="container js-padding d-flex flex-column h-100">
                        <div class="row h-100 align-items-center gx-4">
                            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center h-100">
                                <h2 class="mb-3">DEC — Department of Engineering & Construction</h2>
                                <p class="lead">DEC plant und realisiert Bauprojekte, Raumstationen und große Strukturen im Universum von Star Citizen. Unsere Teams koordinieren Design, Ressourcen und Bauabläufe.</p>
                                <p>Aufgaben (Beispiel):</p>
                                <ul>
                                    <li>Projektdesign &amp; Architektur</li>
                                    <li>Ressourcen- und Frachtlogistik</li>
                                    <li>Teamkoordination für Großbauten</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center h-100">
                                <img src="/assets/img/aawa_dep-logos/AAWA_Patches_DEC_Klein.png" alt="DEC" class="img-fluid" style="max-width:320px">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- MD -->
        <div class="slide" id="MD-slide" data-anchor="MD">
            <div class="content">
                <section class="py-5 text-light d-flex flex-column h-100">
                    <div class="container js-padding d-flex flex-column h-100">
                        <div class="row h-100 align-items-center gx-4">
                            <div class="col-12 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center h-100">
                                <h2 class="mb-3">MD — Merchant Department</h2>
                                <p class="lead">MD organisiert Handelsrouten und wirtschaftliche Aktivitäten unserer Organisation — Handelskonvois, Marktplatz-Partnerschaften und sichere Handelswege.</p>
                                <ul>
                                    <li>Handelsplanung &amp; Konvois</li>
                                    <li>Wirtschaftsanalyse &amp; Preise</li>
                                    <li>Kooperation mit Partnern</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6 order-1 order-lg-2 text-center d-flex align-items-center justify-content-center h-100">
                                <img src="/assets/img/aawa_dep-logos/AAWA_Patches_MD_Klein.png" alt="MD" class="img-fluid" style="max-width:320px">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- AMD -->
        <div class="slide" id="AMD-slide" data-anchor="AMD">
            <div class="content">
                <section class="py-5 text-light d-flex flex-column h-100">
                    <div class="container js-padding d-flex flex-column h-100">
                        <div class="row h-100 align-items-center gx-4">
                            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center h-100">
                                <h2 class="mb-3">AMD — Assistance & Maintenance Department</h2>
                                <p class="lead">AMD unterstützt Spieler mit Reparaturen, Assistance-Missionen und technischen Diensten. Wir kümmern uns um Notfälle und halten Flotten betriebsbereit.</p>
                                <ul>
                                    <li>Reparatur- &amp; Wartungsdienste</li>
                                    <li>Notfall-Assistance</li>
                                    <li>Taktische Unterstützung</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6 text-center d-flex align-items-center justify-content-center h-100">
                                <img src="/assets/img/aawa_dep-logos/AAWA_Patches_AMD_Klein.png" alt="AMD" class="img-fluid" style="max-width:320px">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- SD -->
        <div class="slide" id="SD-slide" data-anchor="SD">
            <div class="content">
                <section class="py-5 text-light d-flex flex-column h-100">
                    <div class="container js-padding d-flex flex-column h-100">
                        <div class="row h-100 align-items-center gx-4">
                            <div class="col-12 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center h-100">
                                <h2 class="mb-3">SD — Security Department</h2>
                                <p class="lead">SD sorgt für Sicherheit bei Einsätzen, Konvois und Bauprojekten. Wir organisieren Wachtruppen, Eskorte-Teams und Sicherheitsanalysen.</p>
                                <ul>
                                    <li>Sicherheitskonzepte &amp; Escort</li>
                                    <li>Aufklärungs- und Verteidigungsaufträge</li>
                                    <li>Training &amp; Taktik</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6 order-1 order-lg-2 text-center d-flex align-items-center justify-content-center h-100">
                                <img src="/assets/img/aawa_dep-logos/AAWA_Patches_SD_Klein.png" alt="SD" class="img-fluid" style="max-width:320px">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div class="section fp-auto-height" id="dept-footer">
        <?php include __DIR__ . '/php/footer.php'; ?>
    </div>

</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/fullpage.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
