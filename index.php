<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
//echo $bessie;

// faire tirer la langue à la vache  

$bessie1 = new Cow('Hello, Farm!');

$output =$bessie1->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $output;
