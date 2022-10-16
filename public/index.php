<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Hello;
use CowSay\Cow;

$bonjour = new Hello;
echo $bonjour->talk();





$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
echo $bessie;

$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;
