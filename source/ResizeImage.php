<?php
/**
 * Created by PhpStorm.
 * User: milovan.minic
 * Date: 1/12/16
 * Time: 16:08
 */

namespace source;

use PHPImageWorkshop\ImageWorkshop;

require (__DIR__ . "../vendor/autoload.php");
require (__DIR__ . "../vendor/sybio/image-workshop/src/PHPImageWorkshop/ImageWorkshop.php");



class ResizeImage {

    // Image location
    protected $imagePath = "../images/sample.jpg";

    /**
     * Resize to exact width and height. Aspect ratio will not be maintained
     *
     * @param $imagePath
     */
    public function resizeExact($imagePath = null)
    {

        $resizedImage = new ImageWorkshop();
        if(is_null($imagePath)){
            $imagePath = $this->imagePath;
        }
        $resizedImage->initFromPath($imagePath);

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
