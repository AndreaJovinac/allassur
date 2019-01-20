<?php

    $array = array(
        "firstname" => "", 
        "name" => "", 
        "email" => "",
        "phone" => "", 
        "message" => "", 
        "choice" => null,
        "firstnameError" => "", 
        "nameError" => "", 
        "emailError" => "", 
        "phoneError" => "", 
        "messageError" => "", 
        "choiceError" => "", 
        "isSuccess" => false);
    $emailTo = "contact@jovinacandrea.fr";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    { 
        $array["firstname"] = test_input($_POST["firstname"]);
        $array["name"] = test_input($_POST["name"]);
        $array["email"] = test_input($_POST["email"]);
        $array["phone"] = test_input($_POST["phone"]);
        $array["choice"] =test_input($_POST["choice"]);
        $array["isSuccess"] = true; 
        $emailText = "";

        if (empty($array["choice"]))
        {
            $array["choiceError"] = "Veuillez sélectionner votre type d'assurance";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Type d'assurance : {$array['choice']}\n";
        }
        
        if (empty($array["firstname"]))
        {
            $array["firstnameError"] = "Veuillez saisir votre prénom, svp.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Prenom: {$array['firstname']}\n";
        }

        if (empty($array["name"]))
        {
            $array["nameError"] = "Veuillez saisir votre nom, svp.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Nom: {$array['name']}\n";
        }

        if(!isEmail($array["email"])) 
        {
            $array["emailError"] = "Veuillez saisir une adresse mail correcte, svp.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            $emailText .= "Email: {$array['email']}\n";
        }

        if (!isPhone($array["phone"]))
        {
            $array["phoneError"] = "Votre numéro de téléphone n'est pas correcte, réessayer encore, svp.";
            $array["isSuccess"] = false; 
        }
        else
        {
            $emailText .= "N° Telephone: {$array['phone']}\n";
        }
        
        if (empty($array["phone"]))
        {
            $array["phoneError"] = "Veuillez saisir votre numéro de téléphone, svp.";
            $array["isSuccess"] = false; 
        } 
        else
        {
            
        }
        
        if($array["isSuccess"]) 
        {
            $headers = "From: {$array['Prénom']} {$array['Nom']} <{$array['email']}>\r\nReply-To: {$array['email']}";
            mail($emailTo, "Site All'Assur : Un client demande à être appeler", $emailText, $headers);
        }
        
        echo json_encode($_POST);
        //json_encode($array);
        
    }

    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#",$phone);
        //return preg_match("#(\+[0-9]{2}\([0-9]\))?[0-9]{10}#", $phone);  return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 
?>


