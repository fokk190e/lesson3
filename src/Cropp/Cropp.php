<?php

namespace Vendor\Cropper\Cropp;

class Cropp extends AbstractCropp
{

    /**
     * @var string
     */
    private $work_file;

    public function __construct($file)
    {
        $this->work_file = $file;
    }

    /**
     * @param $type
     * @param $size
     * @return string
     */
    public function croppImage($type, $size)
    {
        if($type) {
            return $this->croppJpg($size);
        } else if($type) {
            return $this->croppPng($size);
        } else {
            return $this->croppSvg($size);
        }
    }

    /**
     * @param $size
     * @return string
     */
    public function croppPng($size)
    {
        return $this->work_file;
    }

    /**
     * @param $size
     * @return string
     */
    public function croppJpg($size)
    {
        return $this->work_file;
    }

    /**
     * @param $size
     * @return string
     */
    public function croppSvn($size)
    {
        return $this->work_file;
    }
}
