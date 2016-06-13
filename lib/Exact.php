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
        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromPath($image);

        // Resize picture to be squared
        $layer->resizeInPixel($width, $height);

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
