<?php ?>
<!DOCTYPE html>
<html lang="de" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AAWA — Die SPARKS-Allianz</title>
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

<main id="sparks-fullpage">
    <div class="section active" id="sparks-page">
        <div class="content">
            <section class="py-5 text-light d-flex flex-column h-100">
                <div class="container-fluid js-padding d-flex flex-column h-100">
                    <div class="row h-100 align-items-stretch justify-content-center gx-4">
                        <div class="col-12 col-lg-8 d-flex flex-column justify-content-center h-100">
                            <h1 class="mb-3">Die SPARKS-Allianz</h1>
                            <p class="lead mb-4">Die SPARKS-Allianz ist ein Bündnis von Organisationen, das Kooperation und gegenseitige Unterstützung im Universum fördert. Wir arbeiten projektbezogen zusammen, teilen Informationen und unterstützen Partner in Notlagen.</p>
                            <ul>
                                <li>Koordinierte Operationen &amp; Events</li>
                                <li>Geteilte Intelligenz &amp; Handelsnetzwerke</li>
                                <li>Gegenseitige Unterstützung und Austausch</li>
                            </ul>
                            <div class="mt-3">
                                <a href="/departments.php" class="btn btn-outline-light">Abteilungen ansehen</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 text-center d-flex align-items-center justify-content-center h-100">
                            <img src="/assets/img/Sparks-Logo-hoch.png" alt="Sparks Alliance" class="sparks-logo img-fluid">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="section fp-auto-height" id="sparks-footer">
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
