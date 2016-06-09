<?php

require __DIR__ . '/vendor/autoload.php';

use \Lib\Square;
use \Lib\Exact;
use \Lib\Crop;
use \Lib\Auto;

$image = __DIR__ . "/images/sample.jpg";


$exact = new Exact($image, 100, 100);
//var_dump($exact);
