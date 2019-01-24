<?php

$array = array(
    "firstname2" => "",
    "name2" => "",
    "email2" => "",
    "phone2" => "",
    "message" => "",
    "firstnameError" => "",
    "nameError" => "",
    "emailError" => "",
    "phoneError" => "",
    "messageError" => "",
    "isSuccess" => false);
$emailTo = "contact@jovinacandrea.fr";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["firstname2"] = test_input($_POST["firstname2"]);
    $array["name2"] = test_input($_POST["name2"]);
    $array["email2"] = test_input($_POST["email2"]);
    $array["phone2"] = test_input($_POST["phone2"]);
    $array["isSuccess"] = true;
    $emailText = "";

    if (empty($array["firstname2"])) {
        $array["firstnameError"] = "Veuillez saisir votre prénom, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Prenom: {$array['firstname2']}\n";
    }

    if (empty($array["name2"])) {
        $array["nameError"] = "Veuillez saisir votre nom, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Nom: {$array['name2']}\n";
    }

    if (!isEmail($array["email2"])) {
        $array["emailError"] = "Veuillez saisir une adresse mail correcte, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "Email: {$array['email2']}\n";
    }

    if (!isPhone($array["phone2"])) {
        $array["phoneError"] = "Votre numéro de téléphone n'est pas correcte, réessayer encore, svp.";
        $array["isSuccess"] = false;
    } else {
        $emailText .= "N° Telephone: {$array['phone2']}\n";
    }

    if (empty($array["phone2"])) {
        $array["phoneError"] = "Veuillez saisir votre numéro de téléphone, svp.";
        $array["isSuccess"] = false;
    } else {

    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array['Prénom2']} {$array['Nom2']} <{$array['email2']}>\r\nReply-To: {$array['email2']}";
        mail($emailTo, "Site All'Assur : Un client demande à être appeler", $emailText, $headers);
    }

    echo(json_encode($array));

}

function isEmail($email2)
{
    return filter_var($email2, FILTER_VALIDATE_EMAIL);
}
function isPhone($phone2)
{
    return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone2);
    //return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone);  return preg_match("/^[0-9 ]*$/",$phone);
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
