<?php

namespace Vendor\Cropper\Resize;

class Resize
{
    /**
     * @var string
     */
    private $work_file;

    /**
     * Resize constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->work_file = $file;
    }

    /**
     * @param $size
     * @return string
     */
    public function resizeImage($size)
    {
        return $this->work_file;
    }
}
