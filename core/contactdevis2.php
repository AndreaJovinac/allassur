<?php

$array = array(
    "firstname3" => "",
    "firstnameError" => "",
    "name3" => "",
    "nameError" => "",
    "email3" => "",
    "emailError" => "",
    "phone3" => "",
    "phoneError" => "",
    "message3" => "",
    "messageError" => "",
    "sociale" => "",
    "siret" => "",
    "siretError" => "",
    "compagnie" => "",
    "affaires" => "",
    "affairesError" => "",
    "prime" => "",
    "primeError" => "",
    "activite" => "",
    "activiteError" => "",
    "statut" => null,
    "statutError" => null,
    "isSuccess" => false);
$emailTo = "contact@jovinacandrea.fr";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname3"] = test_input($_POST["firstname3"]);
    $array["name3"] = test_input($_POST["name3"]);
    $array["email3"] = test_input($_POST["email3"]);
    $array["phone3"] = test_input($_POST["phone3"]);
    $array["statut"] = test_input($_POST["statut"]);
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

    if (empty($array["firstname3"])) {
        $array["firstnameError"] = "Veuillez saisir votre prénom, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Prenom: {$array['firstname3']}\n";
    }

    if (empty($array["name3"])) {
        $array["nameError"] = "Veuillez saisir votre nom, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Nom: {$array['name3']}\n";
    }

    if (!isEmail($array["email3"])) {
        $array["emailError"] = "Veuillez saisir une adresse mail correcte, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Email: {$array['email3']}\n";
    }

    if (!isPhone($array["phone3"])) {
        $array["phoneError"] = "Votre numéro de téléphone n'est pas correcte, réessayer encore, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "N° Telephone: {$array['phone3']}\n";
    }

    if (!isSiret($array["siret"])) {
        $array["siretError"] = "Votre numéro de Siret, doit être composé de maximum 8 chiffres";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "N° SIRET: {$array['siret']}\n";
    }

    if (!isAffaires($array["affaires"])) {
        $array["affairesError"] = "La saisie entrée est incorrecte, vous devez mettre uniquement des chiffres";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Chiffres d'Affaire: {$array['affaires']}\n";
    }

    if (!isPrime($array["prime"])) {
        $array["primeError"] = "La saisie entrée est incorrecte, vous devez mettre uniquement des chiffres";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Prime d'Activité: {$array['prime']}\n";
    }

    if (empty($array["statut"])) {
        $array["statutError"] = "Veuillez sélectionner votre statut svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Statut de l'entreprise : {$array['statut']}\n";
    }

    if (empty($array["siret"])) {
        $array["siretError"] = "Veuillez entrer un numéro de siret, svp";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Numero de SIRET : {$array['siret']}\n";
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

    if (!empty($array["message3"])) {
        $emailText .= "Message: {$array['message3']}\n";
    }

    if (! empty($array["sociale"])) {
        $emailText .= "Raison Sociale: {$array['sociale']}\n";
    }

    if (!empty($array["affaires"])) {
        $emailText .= "Chiffres d'Affaires : {$array['affaires']}\n";
    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array['Prénom3']} {$array['Nom3']}  <{$array['email']}>\r\nReply-To: {$array['email3']}";
        mail($emailTo, "Demande de devis : Professionnel", $emailText, $headers);
    }

    echo json_encode($array);

}

function isEmail($email3)
{
    return filter_var($email3, FILTER_VALIDATE_EMAIL);
}

function isSiret($siret)
{
    return preg_match("#^(1|2|3|4|5|6|7|8|9|10)$#", $siret);
    
}

function isAffaires($affaires)
{
    return preg_match("#^(1|2|3|4|5|6|7|8|9|10)$#", $affaires);
    
}

function isPrime($prime)
{
    return preg_match("#^(1|2|3|4|5|6|7|8|9|10)$#", $prime);
    
}

function isPhone($phone3)
{
    return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone3);
    //return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone);  return preg_match("/^[0-9 ]*$/",$phone);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
