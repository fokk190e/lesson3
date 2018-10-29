<?php

namespace Vendor\Cropper\Cropp;


class CroppJpg
{
    /**
     * @param string $file
     * @param array $params
     *
     * @return object
     */
    public function __construct($file, $params)
    {
        return $this->croppJpg($file, $params);
    }

    /**
     * @param $file
     * @param $params
     *
     * @return string
     */
    public function croppJpg($file, $params)
    {
        return $file;
    }
}