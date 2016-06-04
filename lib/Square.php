<?php

namespace Lib;

use \PHPImageWorkshop\ImageWorkshop;

class Square
{

    private $_image;
    private $_widthHeight;

    /**
     * @param string $image
     * @param int $widthHeight
     */
    public function __construct($image, $widthHeight)
    {
        $this->_image = $image;
        $this->_widthHeight = $widthHeight;

    }

    public function squareTheImage()
    {
        $width = $this->_widthHeight;
        $height = $this->_widthHeight;
        $saveLocation = '/images/SquareResized';
        $fileName = 'squared_' . $width . 'x' . $height . '-' . $this->_image;
        $createLocation = true;
        $backgroundColor = null;
        $imageQuality = 95;

        // Initialize layer from existing image
        $layer = ImageWorkshop::initFromString($this->_image);

        // Resize picture to be squared
        $layer->resizeInPixel($width, $height);

        // Save resized image
        $layer->save($saveLocation, $fileName, $createLocation, $backgroundColor, $imageQuality);
    }
}
