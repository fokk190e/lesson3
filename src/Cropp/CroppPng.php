<?php

namespace Vendor\Cropper\Cropp;


class CroppPng
{
    /**
     * @param string $file
     * @param array $params
     *
     * @return object
     */
    public function __construct($file, $params)
    {
        return $this->croppPng($file, $params);
    }

    /**
     * @param $file
     * @param $params
     *
     * @return string
     */
    public function croppPng($file, $params)
    {
        return $file;
    }
}