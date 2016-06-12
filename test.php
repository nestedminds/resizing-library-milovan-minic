<?php

require __DIR__ . '/vendor/autoload.php';

use \Lib\Square;
use \Lib\Exact;
use \Lib\Crop;
use \Lib\Auto;

$image = __DIR__ . "/images/sample.jpg";


//$exact = new Exact($image, 200, 200);
//var_dump($exact);

//$square = new Square($image, 10000);

//$croped = new Crop($image, 150, 200);

$auto = new Auto($image, 150);
