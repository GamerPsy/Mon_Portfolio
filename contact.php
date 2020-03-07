<?php include "include/head.html" ?>
<?php require_once "algos/formTraitement.php" ?>

<main class="bg-dark main-contact">
    <div class="container w-100 h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="card h-100">
                    <h2 class="mx-auto pt-3">Formulaire de contact</h2>
                    <form method="post" action="contact.php">
                        <div class="card-body">
                            <div class="row mx-auto">
                                <div class="col-12">
                                    <label for="nom">Nom et Prénom :</label>
                                </div>
                                <input class="col-12 mx-auto" type="text" id="nom" name="user_nom"
                                       placeholder="DOE John" required/>
                                <?php
                                if (!empty($errors['name1'])) {
                                    ?>
                                    <button type="button" class="btn btn-danger col-12 w-100" disabled>
                                        <p><?php if (isset($errors['name1'])) echo $errors['name1']; ?></p>
                                    </button>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-12">
                                    <label for="mail">e-mail :</label>
                                </div>
                                <input type="email" id="mail" class="col-12 mx-auto" name="user_mail"
                                       placeholder="contact@me.fr" required/>
                                <?php
                                if (!empty($errors['mail1'] || !empty($errors['mail2']))) {
                                    ?>
                                    <button type="button" class="btn btn-danger col-12 w-100" disabled>
                                        <p><?php if (isset($errors['mail1'])) echo $errors['mail1']; ?></p>
                                        <p><?php if (isset($errors['mail2'])) echo $errors['mail2']; ?></p>
                                    </button>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="row mx-auto">
                                <div class="col-12">
                                    <label for="msg">Votre message :</label>
                                </div>
                                <textarea id="msg" class="col-12" name="user_message" maxlength="500"
                                          placeholder="Exprimez vous !" required></textarea>
                                <?php
                                if (!empty($errors['message1']) || !empty($errors['message2'])) {
                                    ?>
                                    <button type="button" class="btn btn-danger col-12 w-100" disabled>
                                        <p><?php if (isset($errors['message1'])) echo $errors['message1']; ?></p>
                                        <p><?php if (isset($errors['message2'])) echo $errors['message2']; ?></p>
                                    </button>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn color-compostelle text-warning font-weight-bold mx-auto d-block"
                                    type="submit">Envoyer votre message à Rémy !
                            </button>
                        </div>
                    </form>
                    <?php
                    if (empty($errors)) {
                        echo $success;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "include/footer.php" ?>
