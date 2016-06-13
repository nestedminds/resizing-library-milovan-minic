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
        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Crop image based on given dimensions
        $layer->cropInPixel($xlen, $ylen, $xpos, $ypos, $pointerPosition);

        // Get width and height of resized image
        $width = $layer->getWidth();
        $height = $layer->getHeight();

        // Make save configuration parameters
        $saveConfig = new SaveConfig($image, $width, $height, __CLASS__);
        $config = $saveConfig->getConfiguration();

        // Save resized image
        $layer->save(
            $config['saveLocation'],
            $config['fileName'],
            $config['createFolder'],
            $config['backgroundColor'],
            $config['imageQuality']
        );
    }
}
