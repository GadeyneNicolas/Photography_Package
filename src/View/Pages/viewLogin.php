<?php $this->title = "NG Photographie - Connexion !"; ?>
<!-- Titre de la page -->

<section id="connection">
    <div id="connection_text">
        <h2>Connection à l'espace Administration.</h2>
        <p>Retour vers la page <a href="accueil">d'acceuil.</a></p>
    </div>

    <div id="connection_form">
        <form action="index.php?action=Connection" method="post">
            <label for="pseudo">Votre pseudo</label>
            <input type="text" id="pseudo" name="pseudo" required>
            <label for="mot_de_passe">Votre mot de passe</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
            <input class="button" type="submit" id="connexion" name="connexion" value="connexion">
        </form>
    </div>
</section>