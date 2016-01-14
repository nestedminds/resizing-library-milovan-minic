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
        // Assign default image if the one is not passed as the argument
        if(is_null($image)){
            $image = $this->image;
        }
        $layer = ImageWorkshop::initFromPath($image);

        $layer->resizeInPixel($width, $height);

        // Saving the result
        $dirPath = __DIR__."/../../images/resizedExact/";
        // TODO: Filename needs to be same as original + the width and height for saving after manipulation
        $filename = "sample_" . $width . "x" . $height . ".jpg";
        $createFolders = true;
        $backgroundColor = 'ffffff'; // transparent, only for PNG (otherwise it will be white if set null)
        $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)

        $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

    }

    /**
     * The best strategy (portrait or landscape) will be selected for a given image according to its aspect ratio
     */
    public function resizeAuto()
    {
        // TODO: Clarification of functionality is needed
    }

    /**
     * This option will crop your images to the exact size you specify with no distortion
     *
     * @param $image
     */
    public function resizeCropExact($image = null)
    {

        // Assign default image if the one is not passed as the argument
        if(is_null($image)){
            $image = $this->image;
        }
        $layer = ImageWorkshop::initFromPath($image);

        $newWidth = 120; // px
        $newHeight = 100; // px
        $positionX = 30; // left translation of 30px
        $positionY = 20; // top translation of 20px
        $position = "RB"; // RightBottom => RB, RightTop = RT...

        $layer->cropInPixel($newWidth, $newHeight, $positionX, $positionY, $position);

        // Getting new image size
        $width = $layer->getWidth();
        $height = $layer->getHeight();

        // Saving the result
        $dirPath = __DIR__."/../../images/croppedExact/";
        // TODO: Filename needs to be same as original + the width and height for saving after manipulation
        $filename = "sample_" . $width . "x" . $height . ".jpg";
        $createFolders = true;
        $backgroundColor = 'ffffff'; // transparent, only for PNG (otherwise it will be white if set null)
        $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)

        $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

    }

    /**
     * This option will crop your images to the size relative to the original size you specify (in percents) with no distortion
     *
     * @param $image
     */
    public function resizeCropPercent($image = null)
    {
        // Assign default image if the one is not passed as the argument
        if(is_null($image)){
            $image = $this->image;
        }
        $layer = ImageWorkshop::initFromPath($image);

        $newWidth = 80; // %
        $newHeight = 70; // %
        $positionX = 5; // right translation of 5%
        $positionY = 3; // bottom translation of 3%
        $position = "RB"; // RightBottom => RB, RightTop = RT...

        $layer->cropInPercent($newWidth, $newHeight, $positionX, $positionY, $position);

        // Getting new image size
        $width = $layer->getWidth();
        $height = $layer->getHeight();

        // Saving the result
        $dirPath = __DIR__."/../../images/croppedExact/";
        // TODO: Filename needs to be same as original + the width and height for saving after manipulation
        $filename = "sample_" . $width . "x" . $height . ".jpg";
        $createFolders = true;
        $backgroundColor = 'ffffff'; // transparent, only for PNG (otherwise it will be white if set null)
        $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)

        $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

    }

    /**
     * This strategy will first crop the image by its shorter dimension to make it a square, then resize it to the specified
     *
     * @param $image
     */
    public function resizeSquare($image = null)
    {
        // Assign default image if the one is not passed as the argument
        if(is_null($image)){
            $image = $this->image;
        }
        $layer = ImageWorkshop::initFromPath($image);

        $newWidthHeight = 300; // px

        $layer->resizeInPixel($newWidthHeight, $newWidthHeight, true, 0, 0, 'MM');
        $layer->resizeInPixel(300, 300, true, 0, 0, 'MM');


        // Getting new image size
        $width = $layer->getWidth();
        $height = $layer->getHeight();

        // Saving the result
        $dirPath = __DIR__."/../../images/resizedSquare/";
        // TODO: Filename needs to be same as original + the width and height for saving after manipulation
        $filename = "sample_" . $width . "x" . $height . ".jpg";
        $createFolders = true;
        $backgroundColor = '000000'; // transparent, only for PNG (otherwise it will be white if set null)
        $imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)

        $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

    }

}
