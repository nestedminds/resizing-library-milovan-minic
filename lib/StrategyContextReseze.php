<?php

namespace Lib;

class StrategyContextResize
{
    private $_strategy = null;

    public function __construct($image, $width, $height, $typeOfResize,
                                    $widthHeight = 0, $largerSideLength = 0,
                                    $xLen = 0, $yLen = 0,
                                    $xPos = 0, $yPos = 0, $pointerPosition = 'LB')
    {
        switch ($typeOfResize) {
            case 'E':
                $this->_strategy = new Exact($image, $width, $height);
            break;
            case 'S':
                $this->_strategy = new Square($image, $widthHeight);
            break;
            case 'C':
                $this->_strategy = new Crop($image, $xLen, $yLen, $xPos, $yPos, $pointerPosition);
            break;
            case 'A':
                $this->_strategy = new Auto($image, $largerSideLength);
            break;
        }
    }

    public function getObject()
    {
        return $this->_strategy;
    }
}

