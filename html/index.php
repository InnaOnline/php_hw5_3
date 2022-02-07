<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('inna.online.idea@gmail.com')
    ->setPassword('artidea1!')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['inna.online.idea@gmail.com' => 'Inna'])
    ->setTo(['inna.online.idea@mail.ru'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);