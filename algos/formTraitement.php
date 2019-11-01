<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_POST) {
    //not empty
    $errors = array();

    //Validité nom
    if (empty($_POST['user_nom'])) {
        $errors['name1'] = "Votre nom doit être renseigné !";
    }

    $autoCar = range('a', 'z');
    for ($i = 0; $i < strlen($_POST['user_nom']); $i++) {
        $car = $_POST['user_nom'][$i];
        if (!in_array(strtolower($car), $autoCar)) {
            $errors['name2'] = 'Caractère ' . $car . 'non authorisé !';
            break;
        }
    }

    //Validité e-mail
    if (empty($_POST['user_mail'])) {
        $errors['mail1'] = "Votre e-mail doit être renseigné !";
    }
    $email = test_input($_POST['user_mail']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['mail2'] = "Votre adresse mail est invalide, elle ne respecte pas le format dédié.";
    }


    //si sucess Message de félicitation au-dessus du formulaire
    if (count($errors) == 0) {
        echo "Félicitations !";
    }
}
?>