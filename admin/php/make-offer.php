<?php
    $to = "contact@lethauto.com"; 
    $name = $_REQUEST['name']; 
    $from = $_REQUEST['email'];
    $headers = "From: $from"; 
    $subject = "L&H Auto, vous avez reçu une offre pour l'un de vos véhicules";
    $fields = array(); 
    $fields{"reference"} = "name";
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"price"} = "price";
    $fields{"comments"} = "comments";
    $body = "Voici les informations reçues:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>