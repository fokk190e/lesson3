<?php

namespace Vendor\Cropper\Cropper;

use Vendor\Cropper\LoadSave\LoadSave;
use Vendor\Cropper\Quality\Quality;
use Vendor\Cropper\Resize\Resize;

class Cropper
{
    /**
     * @var $LoadSave
     */
    private $loadSave;

    /**
     * @var $Cropp
     */
    private $cropp;

    /**
     * @var $Resize
     */
    private $resize;

    /**
     * @var $Quality
     */
    private $quality;

    /**
     * @var string
     */
    private $work_file;

    /**
     * Cropper constructor.
     * @param = $file
     */
    public function __construct($file)
    {
        $this->loadSave = new LoadSave($file);
        $this->work_file = $file;
    }

    /**
     * @param $type
     * @param $size
     */
    public function croppImage($type, $size)
    {
        $this->cropp = new Cropp($this->work_file);
        $this->work_file = $this->cropp->croppImage($type, $size);
    }

    /**
     * @param $quality
     */
    public function setQuality($quality)
    {
        $this->quality = new Quality($this->work_file);
        $this->work_file = $this->quality->setQuality($quality);
    }

    /**
     * @param $size
     */
    public function resizeImage($size)
    {
      $this->resize = new Resize($this->work_file);
      $this->work_file = $this->resize->resizeImage($size);
    }

    /**
     * @param $path
     */
    public function loadImage($path)
    {
        $this->loadSave->loadFile($path);
    }

    /**
     * @param $path
     */
    public function saveImage($path)
    {
        $this->loadSave->saveFile($path);
    }
}
