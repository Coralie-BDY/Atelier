<?php
    $to = "samihhabbani"; 
    $name = $_REQUEST['name']; 
    $from = $_REQUEST['email'];
    $headers = "From: $from"; 
    $subject = "L&H Auto, vous avez reçu un nouveau message d'un prospect depuis votre site web pour un devis au niveau de la mécanique"; 
    $fields = array(); 
    $fields{"first_name"} = "first_name";
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"brand"} = "brand";
    $fields{"model"} = "model";
    $fields{"year"} = "year";
    $fields{"hasPiece"} = "hasPiece";
    $fields{"kilometer"} = "kilometer";
    $fields{"reparations"} = "reparations";
    $body = "Voici les informations reçues:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>