class Form {

    init() {
        this.form();
    }

    form() {
        $(`#mainForm`).validate({
            rules : {
                prenom : {
                    required : true,
                    minlength : 3
                },
                nom : {
                    required : true,
                    minlength : 3
                },
                services : {
                    required : true,
                    minlength : 3
                },
                content : {
                    required : true,
                    minlength : 15
                },
                email : {
                    required : true,
                    minlength : 10,
                }
            },
            messages : {
                prenom : `Veuillez fournir un prenom avec au moins 3 lettres.`,
                nom : `Veuillez fournir un nom avec au moins 3 lettres.`,
                services : `Veuillez fournir une préstation avec au moins 3 lettres ou renseigner autres.`,
                email : `L'email est incorrect.`,
                content : `Veuillez fournir un message d'au moins 15 lettres.`
            },
        });
    }
}

$(document).ready(function () { // fonction de l'Appli
    const formulaire = new Form();
    formulaire.init();
});