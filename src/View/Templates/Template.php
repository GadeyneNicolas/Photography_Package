<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link rel="stylesheet" href="Contents/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CNunito+Sans:400,700&display=swap"
        rel="stylesheet">
        
    <title><?= $title ?></title> <!-- Titre des pages -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

</head>

<body>
    <div id="global">

        <header>
            <div id="header_title">
                <a href="Home">
                    <h1>NG - Photographie</h1>
                </a> <!-- Titre du site -->
            </div>

            <nav>
                <div class="nav-container">
                    <!-- Menu non responsive -->
                    <ol class="nav-tabs">
                        <li class="nav-tab"><a href="Home"> Accueil</a></li>
                        <li class="nav-tab"><a href="About"> A propos </a></li>
                        <li class="nav-tab"><a href="Portfolio"> Portfolio </a></li>
                        <li class="nav-tab"><a href="Application"> Application </a></li>
                        <li class="nav-tab"><a href="Contact"> Contact </a></li>
                    </ol>
                </div>
            </nav>
        </header>

        <div class="content">
            <!-- gestion des erreurs -->

            <?= $contents ?>
            <!-- contenu des pages -->
        </div>

        <footer>
            <a href="Mentions">Mentions légales</a> <a href="Confidential">Politique de confidentialité</a>
        </footer>

    </div> <!-- #global -->
</body>

</html>