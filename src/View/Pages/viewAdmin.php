<?php 
    if (isset($_SESSION['pseudo']))
    {
?>
<!-- Variable de session -->

<?php $this->title = "Photographie - Admin !"; ?>
<!-- Titre de la page -->

<section id="admin">
    <h1>Bienvenue sur l'espace administration.</h1>
    <p>Vous souhaitez :</p>
    <a href="disconnection">Se déconnecter</a>
    <p>Ou alors :</p>
    <a href="ajouter">Ajouter une photo</a>
    <p>Vous pouvez également controller les différentes photos ou les commentaires.</p>

    <h2>Portrait</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($picturesPortrait as $picturePortrait): ?>
        <!-- Affichage des données portraits -->
        <tr>
            <td><?= $picturePortrait->getId();?></td>
            <td>GADEYNE Nicolas</td>
            <td><?= $picturePortrait->getTitle(); ?></td>
            <td><?= $picturePortrait->getLink(); ?></td>
            <?php echo "<td><a href='index.php?action=DeletePicsPortrait&id=".$picturePortrait->getId()."'>Supprimer</a></td>"; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Animalier</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($picturesAnimal as $pictureAnimal): ?>
        <!-- Affichage des données Animal -->
        <tr>
            <td><?= $pictureAnimal->getId();?></td>
            <td>GADEYNE Nicolas</td>
            <td><?= $pictureAnimal->getTitle(); ?></td>
            <td><?= $pictureAnimal->getLink(); ?></td>
            <?php echo "<td><a href='index.php?action=DeletePicsAnimal&id=".$pictureAnimal->getId()."'>Supprimer</a></td>"; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Paysage</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($picturesLandscape as $pictureLandscape): ?>
        <!-- Affichage des données Lanscape -->
        <tr>
            <td><?= $pictureLandscape->getId();?></td>
            <td>GADEYNE Nicolas</td>
            <td><?= $pictureLandscape->getTitle(); ?></td>
            <td><?= $pictureLandscape->getLink(); ?></td>
            <?php echo "<td><a href='index.php?action=DeletePicsLandscape&id=".$pictureLandscape->getId()."'>Supprimer</a></td>"; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Urbex</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Image</th>
            <th>Supprimer</th>
        </tr>
        <?php foreach ($picturesUrbex as $pictureUrbex): ?>
        <!-- Affichage des données Lanscape -->
        <tr>
            <td><?= $pictureUrbex->getId();?></td>
            <td>GADEYNE Nicolas</td>
            <td><?= $pictureUrbex->getTitle(); ?></td>
            <td><?= $pictureUrbex->getLink(); ?></td>
            <?php echo "<td><a href='index.php?action=DeletePicsUrbex&id=".$pictureLandscape->getId()."'>Supprimer</a></td>"; ?>
        </tr>
        <?php endforeach; ?>
    </table>


<?php
    } else {
        header('Location: loginError');
    }
?>
<!-- Redirection de la page session si celle-ci n'est pas ouverte -->