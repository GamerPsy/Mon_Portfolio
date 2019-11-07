<?php include "include/head.html" ?>
<?php require_once "algos/formTraitement.php" ?>

<main class="bg-dark">
    <div class="container w-100 h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="card h-100">
                    <h2 class="mx-auto">Formulaire de contact</h2>
                    <div class="card-body">
                        <form method="post" action="contact.php">
                            <div class="row mx-auto">
                                <div class="col-12">
                                    <label for="nom">Nom et Prénom :</label>
                                </div>
                                <input class="col-12 mx-auto" type="text" id="nom" name="user_nom"
                                       placeholder="DOE John" required/>
                            </div>
                            <p><?php if (isset($errors['name1'])) echo $errors['name1']; ?></p>

                            <div class="row mx-auto">
                                <div class="col-12">
                                    <label for="mail">e-mail :</label>
                                </div>
                                <input type="email" id="mail" class="col-12 mx-auto" name="user_mail"
                                       placeholder="contact@me.fr" required/>
                            </div>
                            <p><?php if (isset($errors['mail1'])) echo $errors['mail1']; ?></p>
                            <p><?php if (isset($errors['mail2'])) echo $errors['mail2']; ?></p>

                            <div class="row mx-auto">
                                <div class="col-12">
                                    <label for="msg">Votre message :</label>
                                </div>
                                <textarea id="msg" class="col-12" name="user_message"
                                          placeholder="Exprimez vous !"
                                          required/></textarea>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-dark mx-auto d-block" type="submit">Envoyer votre message à Rémy !
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "include/footer.html" ?>
