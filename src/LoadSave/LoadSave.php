<?php

namespace Vendor\Cropper\LoadSave;

class LoadSave
{
    /**
     * @var string
     */
    private $work_file;

    /**
     * LoadSave constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->work_file = $file;
    }

    /**
     * @param $path
     * @return string
     */
    public function loadFile($path)
    {
        return $this->work_file;
    }

    /**
     * @param $path
     * @return string
     */
    public function saveFile($path)
    {
        return $this->work_file;
    }
}
