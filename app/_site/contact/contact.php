<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    $to = "contact@ikonicgames.com";
    $subject = substr($message, 20);
?>