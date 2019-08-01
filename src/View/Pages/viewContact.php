<?php $this->title = "Photographie - Contact"; ?>
<script src="Contents/Js/Form.js"></script>

<section id="banner_contact">
</section>

<div id="contact">
    <section id="contact_infos">
        <div id="contact_infos_text">
            <h2>Contact infos</h2>
            <p><strong>Ville :</strong> Bordeaux</p>
            <p><strong>CP :</strong> 33000</p>
            <p><strong>Adresse :</strong> 33 allée des cerises</p>
            <p><strong>Mail :</strong> test@gmail.com</p>
            <p><strong>Téléphone :</strong> 06 06 06 06 06</p>
        </div>
    </section>

    <section id="contact_form">
        <h2>Contactez-moi!</h2>
        <form method="post" id="mainForm" action="index.php?action=Mail" enctype="multipart/form-data"
            novalidate="novalidate">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Nom" required>

            <label for="date">Date prévisionnelle : (non obligatoire)</label>
            <input type="date" id="date" min="2018-01-01" max="2030-12-31" name="date" placeholder="Date">

            <label for="services">Préstation : (ou autres)</label>
            <input type="text" id="services" name="services" placeholder="Service" required>

            <label for="email">Votre adresse E-mail :</label>
            <input type="email" id="email" name="email" placeholder="Email" required=""
                pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">

            <label for="content">Votre message :</label>
            <textarea id="content" name="content" placeholder="Votre message" required></textarea>

            <p>Vous affirmez avoir pris connaissance de
                notre <a href="confidentialite">politique de confidentialité</a> et de
                nos <a href="mentions-legales">mentions légales</a>.</p>
            <input class="button" type="submit" id="bouton_contact" value="Ajouter">
        </form>
    </section>
</div>