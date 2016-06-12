<?php

namespace Lib;

use \PHPImageWorkshop\ImageWorkshop;

class Auto
{
    public function __construct($image, $largerSideLength)
    {

        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Resize picture to be squared
        $layer->resizeByLargestSideInPixel($largerSideLength, true);

        // Get width and height of resized image
        $width = $layer->getWidth();
        $height = $layer->getHeight();


        $saveLocation = __DIR__ . '/../images/autoResized';
        $name = end(explode('/', $image));
        $date = new \DateTime();
        $dateTime = date_format($date, 'Y-m-d_H-i-s');
        $fileName = 'auto_' . $width . 'x' . $height . '-' . $dateTime . '_' . $name;
        $createFolder = true;
        $backgroundColor = null;
        $imageQuality = 95;

        // Save resized image
        $layer->save($saveLocation, $fileName, $createFolder, $backgroundColor, $imageQuality);
    }
}
