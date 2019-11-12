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
    } elseif (strlen($_POST['user_message']) > 500) {
        $errors['message2'] = "Vous avez dépassé la limite authorisée de 500 caractères.";
    } else {
        $_POST['user_message'] = test_input($_POST['user_message']);
    }


    if (count($errors) === 0) {
        $destinataire = 'ducry.remy@gmail.com';
        $expediteur = $_POST['user_nom'];
        $objet = "Message site portfolio";

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=UTF-8';

        $message = '<h3> Message de ' . $expediteur ." " . "( " . $_POST['user_mail'] . " )" . ' : </h3>' . "\n";
        $message .= '<p>' . $_POST['user_message'] . '</p>';

        if (mail($destinataire, $objet, $message, implode("\r\n", $headers))) {
            $success = '<button type="button" class="btn btn-success" disabled>' .$expediteur. ' votre message est envoyé !!!</button>';
            unset($_POST);
        } else {
            header('Location: contact.php');
        }
    }
}
?>
