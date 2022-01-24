#!/usr/bin/env php
<?php

use Application\Builder;

require __DIR__ . '/vendor/autoload.php';

$shortOptions = "";
$shortOptions .= "i:";
$shortOptions .= "o:";
$shortOptions .= "t:";
$shortOptions .= "h:";
$shortOptions .= "d:";

$longOptions =[
    "input:",
    "output:",
    "type:",
    "threshold:",
    "description:"
];
$options = getopt($shortOptions,$longOptions);

(new Builder())->run($options);
