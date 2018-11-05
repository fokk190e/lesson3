<?php

namespace Vendor\Cropper\Quality;

class Quality
{
    /**
     * @var string
     */
    private $work_file;

    /**
     * Quality constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->work_file = $file;
    }

    /**
     * @param $quality
     * @return string
     */
    public function setQuality($quality)
    {
        return $this->work_file;
    }
}
