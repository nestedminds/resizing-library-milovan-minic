<?php

namespace Lib;

class SaveConfig
{
    private $_saveLocation;
    private $_fileName;
    private $_createFolder = true;
    private $_backgroundColor = null;
    private $_imageQuality = 95;

    /**
     * @param string    $image
     * @param int       $width
     * @param int       $height
     * @param string    $resizeType
     */
    public function __construct($image, $width, $height, $resizeType)
    {
        $type = end(explode('\\', $resizeType));
        $this->_saveLocation = __DIR__ . '/../images/' . $type . 'Resized';
        $name = end(explode('/', $image));
        $date = new \DateTime();
        $dateTime = date_format($date, 'Y-m-d_H-i-s');
        $this->_fileName = $type . '_' . $width . 'x' . $height . '-' . $dateTime . '_' . $name;
    }

    /**
     * @return array
     */
    public function getConfiguration()
    {
        return array(
            'saveLocation'      => $this->_saveLocation,
            'fileName'          => $this->_fileName,
            'createFolder'      => $this->_createFolder,
            'backgroundColor'   => $this->_backgroundColor,
            'imageQuality'      => $this->_imageQuality
        );
    }
}
