<?php 
    if (isset($_SESSION['pseudo']))
    {
?>
<!-- Variable de session -->

<?php $this->title = "NG Photographie - Ajouter une photo !"; ?>
<!-- Titre de la page -->
<div id="add_pictures_global">

<div>
    
    <button type="button" class="button" id="show_Portrait">Portrait</button>
    <button type="button" class="button" id="show_Animal">Animalier</button>
    <button type="button" class="button" id="show_Landscape">Paysage</button>
    <button type="button" class="button" id="show_Urbex">Urbex</button>
</div>

<div id="showPortrait">
    <section id="add_pictures">
        <h2>Portrait</h2>
        <div id="add_pictures_text">
            <h2>Ajouter une image.</h2>
            <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
        </div>

        <div id="add_pictures_form">
            <form method="post" action="index.php?action=AddNewPicsPortrait" enctype="multipart/form-data">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>

                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>

                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu"></textarea>

                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
            </form>
        </div>
    </section>
</div> <!-- Show portrait -->

<div id="showAnimal">
    <section id="add_pictures">
        <h2>Animalier</h2>
        <div id="add_pictures_text">
            <h2>Ajouter une image.</h2>
            <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
        </div>

        <div id="add_pictures_form">
            <form method="post" action="index.php?action=AddNewPicsAnimal" enctype="multipart/form-data">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>

                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>

                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu"></textarea>

                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
            </form>
        </div>
    </section>
</div> <!-- Show Animal -->

<div id="showLandscape">
    <section id="add_pictures">
        <h2>Paysage</h2>
        <div id="add_pictures_text">
            <h2>Ajouter une image.</h2>
            <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
        </div>

        <div id="add_pictures_form">
            <form method="post" action="index.php?action=AddNewPicsLandscape" enctype="multipart/form-data">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>

                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>

                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu"></textarea>

                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
            </form>
        </div>
    </section>
</div> <!-- Show Landscape -->

<div id="showUrbex">
    <section id="add_pictures">
        <h2>Urbex</h2>
        <div id="add_pictures_text">
            <h2>Ajouter une image.</h2>
            <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
        </div>

        <div id="add_pictures_form">
            <form method="post" action="index.php?action=AddNewPicsUrbex" enctype="multipart/form-data">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>

                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>

                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu"></textarea>

                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
            </form>
        </div>
    </section>
</div> <!-- Show Urbex -->

</div>

<script src="Contents/Js/Add.js"></script>

<?php
    } else {
        header('Location: LoginError');
    }
?>
<!-- Redirection de la page session si celle-ci n'est pas ouverte -->