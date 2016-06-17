<?php

use \Lib\StrategyContextResize;

require __DIR__ . '/vendor/autoload.php';

$image = __DIR__ . '/images/sample.jpg';


//$exact = new Exact($image, 222, 222);
$exact = new StrategyContextResize($image, 333, 252, 'E');
$exact->getObject();

//$square = new Square($image, 155);
//$square = new StrategyContextResize($image, 167, 0, 'S');

//$cropped = new Crop($image, 155, 222);
//$cropped = new StrategyContextResize($image, 165, 232, 'C');

//$auto = new Auto($image, 180);
//$auto = new StrategyContextResize($image, 190, 0, 'A');
