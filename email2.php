<?php

    $fromP = $_POST['emailUsuario'];
    $toP = "studentsguide@studentsguide.tech";
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    ini_set('display_errors', 1);

    error_reporting(E_ALL);

    $from = $fromP;

    $to = $toP;

    $subject = $assunto;

    $message = $mensagem . " " . $fromP;

    $headers = "De:". $from;

    mail($to, $subject, $message, $headers);

    header('Location: /PHP/suporte2.php?resposta=1');


?>