<?php
/**
 * Created by PhpStorm.
 * User: milovan.minic
 * Date: 1/12/16
 * Time: 16:08
 */

namespace Image;

use PHPImageWorkshop\ImageWorkshop;


class ResizeImage {

    // Image location
    protected $image = "../images/sample.jpg";

    /**
     * Resize to exact width and height. Aspect ratio will not be maintained
     *
     * @param $image
     * @param $width
     * @param $height
     */
    public function resizeExact($image = null, $width = null, $height = null)
    {
        $layer = ImageWorkshop::initFromPath($image);

        $layer->resizeInPixel($width, $height);

        // Saving the result
        $dirPath = __DIR__."/../../images/resizedExact/";
        $filename = "sample_" . $width . "x" . $height . ".jpg";
        $createFolders = false;
        $backgroundColor = 'ffffff'; // transparent, only for PNG (otherwise it will be white if set null)
        $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)

        $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

    }

    /**
     * The best strategy (portrait or landscape) will be selected for a given image according to its aspect ratio
     */
    public function resizeAuto()
    {

    }

    /**
     * This option will crop your images to the exact size you specify with no distortion
     */
    public function resizeCrop()
    {

    }

    /**
     * This strategy will first crop the image by its shorter dimension to make it a square, then resize it to the specified
     */
    public function resizeSquare()
    {

    }

}
