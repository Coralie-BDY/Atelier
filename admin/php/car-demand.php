<?php
    $to = "contact@lethauto.com"; 
    $name = $_REQUEST['name']; 
    $from = $_REQUEST['email'];
    $headers = "From: $from"; 
    $subject = "L&H Auto, vous avez reçu une demande de véhicule de la part d'un client"; 
    $fields = array(); 
    $fields{"first_name"} = "first_name";
    $fields{"first-name"} = "first-name";
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"brand"} = "brand";
    $fields{"model"} = "model";
    $fields{"year"} = "year";
    $fields{"kilometer"} = "kilometer";
    $fields{"budget"} = "budget";
    $body = "Voici les informations reçues:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>