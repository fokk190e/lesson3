<?php

namespace Vendor\Cropper\Cropp;

abstract class AbstractCropp
{
    /**
     * @param $type
     * @param $size
     * @return mixed
     */
    abstract public function croppImage($type, $size);
}
