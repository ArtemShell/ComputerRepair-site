<?php
    if (isset($_POST['submit'])) {
        
        if (trim($_POST['name']) == '') $hasError = true;
        else $name = trim($_POST['name']);

        if (trim($_POST['tel']) == '') $hasError = true;
        else $tel = trim($_POST['tel']);

        if (trim($_POST['message']) == '') $hasError = true;
        else $message = trim($_POST['message']);

        if (!isset($hasError)) {
            $emailTo = 'name@example.com';

            $body = "Имя: $name \n\Телефон: $tel \n\nCообщение:\n $message";
            $headers = 'From: My Site <'.$emailTo.'>' . "\r\n";

            mail($emailTo, "From my site", $body, $headers);
            $emailSent = true;
        }
    }
?>