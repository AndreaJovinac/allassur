<?php

$array = array(
    "firstname" => "",
    "firstnameError" => "",
    "name" => "",
    "nameError" => "",
    "email" => "",
    "emailError" => "",
    "phone" => "",
    "phoneError" => "",
    "message" => "",
    "messageError" => "",
    "sociale" => "",
    "siret" => "",
    "siretError" => "",
    "compagnie" => "",
    "affaires" => "",
    "prime" => "",
    "activite" => "",
    "activiteError" => "",
    "choice" => null,
    "choiceError" => "",
    "statut" => null,
    "statutError" => null,
    "sexe" => null,
    "sexeError" => "",
    "isSuccess" => false);
$emailTo = "contact@jovinacandrea.fr";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname"] = test_input($_POST["firstname"]);
    $array["name"] = test_input($_POST["name"]);
    $array["email"] = test_input($_POST["email"]);
    $array["phone"] = test_input($_POST["phone"]);
    $array["choice"] = test_input($_POST["choice"]);
    $array["statut"] = test_input($_POST["statut"]);
    $array["sexe"] = test_input($_POST["sexe"]);
    $array["message"] = test_input($_POST["message"]);
    $array["sociale"] = test_input($_POST["sociale"]);
    $array["siret"] = test_input($_POST["siret"]);
    $array["affaires"] = test_input($_POST["affaires"]);
    $array["compagnie"] = test_input($_POST["compagnie"]);
    $array["prime"] = test_input($_POST["prime"]);
    $array["activite"] = test_input($_POST["activite"]);
    $array["sociale"] = test_input($_POST["sociale"]);

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

    if (empty($array["statut"])) {
        $array["statutError"] = "Veuillez sélectionner votre statut svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Statut de l'entreprise : {$array['statut']}\n";
    }

    if (empty($array["choice"])) {
        $array["choiceError"] = "Veuillez sélectionner un type d'assurance, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Cette personne a choisi cette assurance : {$array['choice']}\n";
    }

    if (empty($array["siret"])) {
        $array["siretError"] = "Veuillez entrer votre numéro de siret, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Numero de SIRET : {$array['siret']}\n";
    }

    if (empty($array["sexe"])) {
        $array["sexeError"] = "Veuillez sélectionner votre sexe, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Cette personne est un(e): {$array['sexe']}\n";
    }

    if (empty($array["activite"])) {
        $array["activiteError"] = "Veuillez sélectionner votre activité, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Activité : {$array['activite']}\n";
    }

    if (!empty($array["compagnie"])) {
        $emailText .= "Compagnie actuelle: {$array['compagnie']}\n";
    }

    if (!empty($array["prime"])) {
        $emailText .= "Prime d'Activité: {$array['prime']}\n";
    }

    if (!empty($array["message"])) {
        $emailText .= "Message: {$array['message']}\n";
    }

    if (! empty($array["sociale"])) {
        $emailText .= "Raison Sociale: {$array['sociale']}\n";
    }

    if (!empty($array["affaires"])) {
        $emailText .= "Chiffres d'Affaires : {$array['affaires']}\n";
    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array['Prénom']} {$array['Nom']}  <{$array['email']}>\r\nReply-To: {$array['email']}";
        mail($emailTo, "Demande de devis ", $emailText, $headers);
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
