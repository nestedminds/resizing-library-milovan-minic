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
        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Crop layer to have both same dimensions based on shorter edge
        $layer->cropMaximum();

        // Resize picture to be squared
        $layer->resizeInPixel($widthHeight, $widthHeight);

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
