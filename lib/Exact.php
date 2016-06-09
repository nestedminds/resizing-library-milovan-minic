<?php

namespace Lib;

use \PHPImageWorkshop\ImageWorkshop;

class Exact
{
    /**
     * @param string    $image
     * @param int       $width
     * @param int       $height
     *
     * @throws \PHPImageWorkshop\Exception\ImageWorkshopException
     */
    public function __construct($image, $width, $height)
    {
        $saveLocation = __DIR__ . '/../images/exactResized';
        $name = end(explode('/', $image));
        $date = new \DateTime();
        $dateTime = date_format($date, 'Y-m-d_H-i-s');
        $fileName = 'exact_' . $width . 'x' . $height . '-' . $dateTime . '_' . $name;
        $createFolder = true;
        $backgroundColor = null;
        $imageQuality = 95;

        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Resize picture to be squared
        $layer->resizeInPixel($width, $height);

        // Save resized image
        $layer->save($saveLocation, $fileName, $createFolder, $backgroundColor, $imageQuality);
    }
}
