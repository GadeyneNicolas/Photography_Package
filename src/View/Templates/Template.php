<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="Contents/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CNunito+Sans:400,700&display=swap"
        rel="stylesheet">

    <title><?= $title ?></title> <!-- Titre des pages -->

    <script src="https://kit.fontawesome.com/c0aa93735f.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

</head>

<body>
      <header>
            <div id="header_title">
                <a href="accueil">
                    <h1>Photographie</h1>
                </a>
            </div>

            <nav>
                <input class="hidden" type="checkbox" id="menuToggle"> <!-- Menu burger responsive -->
                <label class="menu-btn" for="menuToggle">
                    <span class="menu"></span>
                    <span class="menu"></span>
                    <span class="menu"></span>
                </label>

                <div class="nav-container">
                    <!-- Menu non responsive -->
                    <ol class="nav-tabs">
                        <li class="nav-tab"><a href="accueil">Accueil</a></li>
                        <li class="nav-tab"><a href="services">Mes Services</a></li>
                        <li class="nav-tab"><a href="portfolio">Portfolio</a></li>
                        <li class="nav-tab"><a href="apropos">A Propos</a></li>
                        <li class="nav-tab"><a href="contact">Contact</a></li>
                    </ol>
                </div>
            </nav>

            <div id="header_icons">
                <a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://fr-fr.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://twitter.com/?lang=fr" target="_blank"><i class="fab fa-twitter-square"></i></a>
            </div>

        </header>

        <div class="content">
            <?= $contents ?>
            <!-- contenu des pages -->
        </div>

        <section id="contact_template">
            <span id="contact_template_text"><h2>Besoin d'un <span class="title_color">photographe?</span></h2></span>
            <a class="button" href="contact">Contactez-moi</a>
        </section>

        <footer>
            <p>Entreprise - Copyright ©2019</p>
            <a href="mentions-legales">Mentions légales</a>
            <a href="confidentialite">Politique de confidentialité</a>
            <a href="login">Admin</a>
        </footer>
</body>

</html>