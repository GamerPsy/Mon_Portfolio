<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST) {
    $errors = [];

    if (empty($_POST['user_nom'])) {
        $errors['name1'] = "Votre nom doit être renseigné !";
    } else {
        $_POST['user_nom'] = test_input($_POST['user_nom']);
    }

    if (empty($_POST['user_mail'])) {
        $errors['mail1'] = "Votre e-mail doit être renseigné !";
    } else {
        $email = test_input($_POST['user_mail']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['mail2'] = "Votre adresse mail est invalide, elle ne respecte pas le format dédié.";
        }
    }

    if (empty($_POST['user_message'])) {
        $errors['message1'] = "Vous devez écrire un message";
    } else {
        $_POST['user_message'] = test_input($_POST['user_message']);
    }


    if (count($errors) == 0) {
        $destinataire = 'ducry.remy@gmail.com';
        $expediteur = $_POST['user_nom'];
        $objet = "message provenant du site pro";

        $headers = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n"; // l'en-tete Content-type pour le format HTML
        $headers .= 'To: ' . $expediteur . "\n";
        $headers .= 'From: "Message provenant du site portfolio"<' . $expediteur . '>' . "\n";

        $message = '
            <div style="width: 100%; font-weight: bold">
                Bonjour Rémy
                <br>
                Voici un message provenant de votre site remy-ducry.fr :
                <br><br>
                Nom: ' . $_POST['user_nom'] . '<br>
			    E-mail: ' . $_POST['user_mail'] . '<br>
			    Message:<br> ' . $_POST['user_message'] . '
			 </div>';

        mail($destinataire, $objet, $message, $headers);
        echo '<script>alert("Votre message a bien été envoyé ");</script>';
    }
    unset($_POST);
}
?>
