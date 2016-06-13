<?php

require __DIR__ . '/vendor/autoload.php';

use \Lib\Square;
use \Lib\Exact;
use \Lib\Crop;
use \Lib\Auto;

$image = __DIR__ . "/images/sample.jpg";


$exact = new Exact($image, 222, 222);

$square = new Square($image, 155);

$croped = new Crop($image, 155, 222);

$auto = new Auto($image, 180);
