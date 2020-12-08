<?php
try {
    if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false) {
        $img = 'assets/images/background_image.webp';
    } else {
        $img = 'assets/images/background_image.png';
    }
} catch (Exception $e) {
    $img = 'assets/images/background_image.png';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="NoteUniv, IUT Haguenau">
    <meta name="description" content="Retrouvez plus facilement vos notes de l'IUT de Haguenau grâce à NoteUniv !">
    <meta name="keywords" content="noteuniv, haguenau, note iut haguenau, emploi du temps mmi, note mmi, noteuniv mmi">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
    <meta name="revisit-after" content="15 days">
    <meta name="author" content="Ynohtna, Quentium">
    <title>NoteUniv - Accueil</title>
    <!-- FAVICON  -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#110133">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#110133">
    <!-- CSS EXT-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flexboxgrid2" type="text/css">
    <!-- CSS PERSO-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Cookie  -->
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="0df23692-fee1-4280-97ef-7c0506f2621d" data-blockingmode="auto" type="text/javascript"></script>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
        _paq.push(["setCookieDomain", "*.noteuniv.fr"]);
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//stats.noteuniv.fr/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript>
        <p><img src="//stats.noteuniv.fr/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p>
    </noscript>
    <!-- End Matomo Code -->
</head>

<body>
    <div class="row">
        <div class="col-lg-1 hidden-xs hidden-sm hidden-md"></div>
        <section class="col-xs-12 col-lg-5">
            <article class="row center-xs start-lg">
                <div class="col-xs-12">
                    <img class="logo-img" src="assets/images/noteuniv_logo.svg" alt="NoteUniv Logo">
                </div>
                <div class="col-xs-12">
                    <img class="logo-txt" src="assets/images/noteuniv_text.svg" alt="NoteUniv Texte">
                </div>
                <h1 class="desc col-md-10">Votre nouvel espace pour retrouver vos notes plus facilement et savoir si vous passez votre semestre !</h1>
                <div class="row center-xs start-lg start-md">
                    <form class="login-form center-md col-md-12" id="sendID" action="last.php" method="POST">
                        <div id="inputAll" class="input out">
                            <input id="numEtu" name="numEtu" type="number" class="input" required placeholder="Numéro étudiant">
                            <span id="submitForm" onclick="submitForm()">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                        <p id="showMessage"></p>
                    </form>
                    <i class="col-lg-12 col-md-6 center-md">Si votre numéro est désactivé, veuillez nous contacter si vous souhaitez l'activer</i>
                    <div class="row hidden-xs hidden-lg hidden-xl">
                        <div class="col-xs-6">
                            <p class="sponso">Ce service est proposé par <a href="https://erosya.fr">Erosya</a> pour tous les MMI de l'IUT de Haguenau.</p>
                        </div>
                        <div class="col-xs-6">
                            <img class="img-etu hidden-lg hidden-xl" src="<?= $img ?>" alt="Image étudiants">
                        </div>
                    </div>
                    <p class="sponso hidden-sm hidden-md">Ce service est proposé par <a href="https://erosya.fr">Erosya</a> pour tous les MMI de l'IUT de Haguenau.</p>
                </div>
            </article>
        </section>
        <div class="col-lg-6 end-xs hidden-xs hidden-sm hidden-md">
            <img class="img-etu" src="<?= $img ?>" alt="Image étudiants">
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f33a91cd59.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>