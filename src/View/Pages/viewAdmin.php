<?php 
    if (isset($_SESSION['pseudo']))
    {
?>
<!-- Variable de session -->

<?php $this->title = "NG Photographie - Admin !"; ?>
<!-- Titre de la page -->

<section id="admin">
    <h1>Bienvenue sur l'espace administration.</h1>
    <p>Vous souhaitez :</p>
    <a href="disconnection">Se déconnecter</a>
    <p>Ou alors :</p>
    <a href="ajouter">Ajouter une photo</a>
    <p>Vous pouvez également controller les différentes photos ou les commentaires.</p>

<?php
    } else {
        header('Location: loginError');
    }
?>
<!-- Redirection de la page session si celle-ci n'est pas ouverte -->