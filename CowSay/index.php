<?php


require 'vendor/autoload.php';


use CowSay\Cow;

$bessie = new Cow('Hello, JE SUIS LE KING OF PHP!');


$output = $bessie->say();
echo $output;

