<?php $this->title = "Photographie - Contact"; ?>

<section id="banner_contact">
</section>

<div id="contact">
<section id="contact_infos">
        <h2>Contact infos</h2>
        <p><strong>Ville :</strong> Bordeaux</p>
        <p><strong>CP :</strong> 33000</p>
        <p><strong>Adresse :</strong> 33 allée des cerises</p>
        <p><strong>Mail :</strong> Ngadeyne@gmail.com</p>
        <p><strong>Téléphone :</strong> 06 06 06 06 06</p>
    </section>

    <section id="contact_form">
        <h2>Contactez-moi!</h2>
        <form method="post" id="mainForm" action="index.php?action=Mail" enctype="multipart/form-data" novalidate="novalidate">
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required="">

            <label for="email">Votre adresse E-mail :</label>
            <input type="email" id="email" name="email" placeholder="Email" required="" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">

            <label for="content">Votre message :</label>
            <textarea id="content" name="content" placeholder="Votre message" required=""></textarea>

            <input class="button" type="submit" id="bouton_contact" value="Ajouter">
        </form>
    </section>
</div>
