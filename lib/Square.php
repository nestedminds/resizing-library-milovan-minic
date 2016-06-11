<?php

namespace Lib;

use \PHPImageWorkshop\ImageWorkshop;

class Square
{
    /**
     * @param string    $image
     * @param int       $widthHeight
     *
     * @throws \PHPImageWorkshop\Exception\ImageWorkshopException
     */
    public function __construct($image, $widthHeight)
    {
        $saveLocation = __DIR__ . '/../images/squareResized';
        $name = end(explode('/', $image));
//        var_dump($name);
        $date = new \DateTime();
        $dateTime = date_format($date, 'Y-m-d_H-i-s');
        $fileName = 'squared_' . $widthHeight . 'x' . $widthHeight . '-' . $dateTime . '_' . $name;
        $createFolder = true;
        $backgroundColor = null;
        $imageQuality = 95;

        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Crop layer to have both same dimensions based on shorter edge
        $layer->cropMaximum();

        // Resize picture to be squared
        $layer->resizeInPixel($widthHeight, $widthHeight);

        // Save resized image
        $layer->save($saveLocation, $fileName, $createFolder, $backgroundColor, $imageQuality);
    }
}
