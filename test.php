<?php

require __DIR__ . '/vendor/autoload.php';

use \Lib\Square;


//$layer = \PHPImageWorkshop\ImageWorkshop::initFromPath('../images/sample.jpg');


$image = "/images/sample.jpg";
//$image = "sample.jpg";

//$pinguLayer = \PHPImageWorkshop\ImageWorkshop::initFromPath($image);

//        if(is_null($image)){
//            $image = $this->image;
//        }
//
//        $layer = new ImageWorkshop();
//
//        $image = imagecreate($width, $height);
//
//        $layer::initFromPath($image);

//echo $pinguLayer->getHeight() . PHP_EOL;
//echo $pinguLayer->getWidth();


//$proba = new ResizeImage();
//$proba->resizeExact($image, 480, 640);
//$proba->resizeExact($image, 480, 640);
//$proba->resizeCropExact();
//$proba->resizeSquare();
//$proba->resizeSquare($image);

//$square = new Square($image, 200);
$square = new Square($image, 200);
