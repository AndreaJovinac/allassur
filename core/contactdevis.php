<?php

$array = array(
    "firstname" => "",
    "firstnameError" => "",
    "name" => "",
    "nameError" => "",
    "email" => "",
    "phone" => "",
    "message" => "",
    "emailError" => "",
    "phoneError" => "",
    "messageError" => "",
    "choice" => null,
    "choiceError" => "",
    "postaleError" => "",
    "postaleError2" => "",
    "postale" => "",
    "date" => null,
    "dateError" => null,
    "sexe" => null,
    "sexeError" => "",
    "isSuccess" => false);
$emailTo = "contact@allassur.fr";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname"] = test_input($_POST["firstname"]);
    $array["name"] = test_input($_POST["name"]);
    $array["email"] = test_input($_POST["email"]);
    $array["phone"] = test_input($_POST["phone"]);
    $array["choice"] = test_input($_POST["choice"]);
    $array["statut"] = test_input($_POST["statut"]);
    $array["sexe"] = test_input($_POST["sexe"]);
    $array["message"] = test_input($_POST["message"]);
    $array["date"] = test_input($_POST["date"]);
    $array["postale"] = test_input($_POST["postale"]);

    $array["isSuccess"] = true;
    $emailText = "";

    if (empty($array["firstname"])) {
        $array["firstnameError"] = "Veuillez saisir votre prénom, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Prenom: {$array['firstname']}\n";
    }

    if (empty($array["name"])) {
        $array["nameError"] = "Veuillez saisir votre nom, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Nom: {$array['name']}\n";
    }

    if (!isEmail($array["email"])) {
        $array["emailError"] = "Veuillez saisir une adresse mail correcte, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Email: {$array['email']}\n";
    }

    if (!isPhone($array["phone"])) {
        $array["phoneError"] = "Votre numéro de téléphone n'est pas correcte, réessayer encore, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "N° Telephone: {$array['phone']}\n";
    }

    if (empty($array["phone"])) {
        $array["phoneError"] = "Veuillez saisir votre numéro de téléphone, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "N° Telephone: {$array['phone']}\n";
    }

    if (empty($array["choice"])) {
        $array["choiceError"] = "Veuillez sélectionner un type d'assurance, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Cette personne a choisi cette assurance : {$array['choice']}\n";
    }

    if (empty($array["date"])) {
        $array["dateError"] = "Veuillez entrer votre date de naissance, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Date de naissance : {$array['date']}\n";
    }

    if (empty($array["sexe"])) {
        $array["sexeError"] = "Veuillez sélectionner votre sexe, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Cette personne est un(e): {$array['sexe']}\n";
    }


    if (empty($array["postale"])) {
        $array["postaleError"] = "Veuillez entrer votre adresse postale, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Code postale: {$array['postale']}\n";
    }

    if (!empty($array["message"])) {
        $emailText .= "Message: {$array['message']}\n";
    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array['Prénom']} {$array['Nom']}  <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Demande de devis : Particulier", $emailText, $headers);
    }

    echo json_encode($array);

}

function isEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isPhone($phone)
{
    return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone);
    //return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone);  return preg_match("/^[0-9 ]*$/",$phone);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
