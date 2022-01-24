<?php

require __DIR__ . '/vendor/autoload.php';

$val = getopt("p:");

(new \Application\Builder($val["p"]))->run();
