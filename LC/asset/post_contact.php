<?php
var_dump($_POST);
$message = $_POST['message'];
$headers = "FROM: site@local.dev";

mail ('contact@local.dev', "Formulaire de contact", $message, $headers);