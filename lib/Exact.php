<?php

namespace Lib;

use \PHPImageWorkshop\ImageWorkshop;

class Exact
{
    private $_image;
    private $_width;
    private $_height;


    public function __construct($image, $width, $height)
    {
        $this->_image = $image;
        $this->_width = $width;
        $this->_height = $height;

        $saveLocation = __DIR__ . '/../images/exactResized';
        $name = explode('/', $this->_image);
        $date = new \DateTime();
        $dateTime = date_format($date, 'Y-m-d_H-i-s');
        var_dump($date);

//        $fileName = 'exact_' . $width . 'x' . $height . '-' . time() . '_' . end($name);
        $fileName = 'exact_' . $width . 'x' . $height . '-' . $dateTime . '_' . end($name);
        $createFolder = true;
        $backgroundColor = null;
        $imageQuality = 95;

        $layer = ImageWorkshop::initFromPath($this->_image);

        $layer->resizeInPixel($width, $height);

        $layer->save($saveLocation, $fileName, $createFolder, $backgroundColor, $imageQuality);
    }
}
