<?php
    $to = "contact@lethauto.com"; 
    $name = $_REQUEST['name']; 
    $from = $_REQUEST['email'];
    $headers = "From: $from"; 
    $subject = "L&H Auto, un client souhaite prendre rendez-vous."; 
    $fields = array(); 
    $fields{"name"} = "name";
    $fields{"email"} = "email";
    $fields{"phone"} = "phone";
    $fields{"day"} = "day";
    $fields{"time"} = "time";
    $fields{"contact"} = "contact";
    $body = "Voici les informations reçues:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>