<?php

require ("../vendor/autoload.php");


//$layer = \PHPImageWorkshop\ImageWorkshop::initFromPath('../images/sample.jpg');


$image = "../images/sample.jpg";

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


$proba = new \source\ResizeImage();
$proba->resizeExact($image, 640, 480);
