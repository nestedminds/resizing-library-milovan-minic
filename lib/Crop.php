<?php

namespace Lib;

use \PHPImageWorkshop\ImageWorkshop;

class Crop
{
    /**
     * @param string    $image
     * @param int       $xlen
     * @param int       $ylen
     * @param int       $xpos
     * @param int       $ypos
     * @param string    $pointerPosition
     *
     * @throws \PHPImageWorkshop\Exception\ImageWorkshopException
     */
    public function __construct($image, $xlen, $ylen, $xpos = 0, $ypos = 0, $pointerPosition = 'LB')
    {
        $saveLocation = __DIR__ . '/../images/cropResized';
        $name = end(explode('/', $image));
        $date = new \DateTime();
        $dateTime = date_format($date, 'Y-m-d_H-i-s');
        $fileName = 'croped_' . $xlen . 'x' . $ylen . '-' . $dateTime . '_' . $name;
        $createFolder = true;
        $backgroundColor = null;
        $imageQuality = 95;

        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Crop image based on given dimensions
        $layer->cropInPixel($xlen, $ylen, $xpos, $ypos, $pointerPosition);

        // Save resized image
        $layer->save($saveLocation, $fileName, $createFolder, $backgroundColor, $imageQuality);
    }

}
