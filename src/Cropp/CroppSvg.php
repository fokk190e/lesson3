<?php

namespace Vendor\Cropper\Cropp;


class CroppSvg
{
    /**
     * @param string $file
     * @param array $params
     *
     * @return object
     */
    public function __construct($file, $params)
    {
        return $this->croppSvg($file, $params);
    }

    /**
     * @param $file
     * @param $params
     *
     * @return string
     */
    public function croppSvg($file, $params)
    {
        return $file;
    }
}