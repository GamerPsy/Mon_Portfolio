<?php include "include/head.html" ?>
<?php include "algos/formTraitement.php" ?>

<main class="bg-dark">
    <div class="container-fluid" align="center">
        <h2>Formulaire de contact</h2>
        <form action="form.php" method="post">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="user_nom" required/>
            </div>
            <p><?php if (isset($errors['name1'])) echo $errors['name1']; ?></p>
            <p><?php if (isset($errors['name2'])) echo $errors['name2']; ?></p>

            <div>
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail" required/>
            </div>
            <p><?php if (isset($errors['mail1'])) echo $errors['mail1']; ?></p>
            <p><?php if (isset($errors['mail2'])) echo $errors['mail2']; ?></p>

            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_message" placeholder="Exprimez vous !" required/></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer votre message à Rémy !</button>
            </div>

        </form>
    </div>
</main>

<?php include "include/footer.html" ?>
