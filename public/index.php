<?php
require __DIR__ . '/../src/Hello.php';

use App\Hello;

$message = new Hello();
echo $message->talk($message);
