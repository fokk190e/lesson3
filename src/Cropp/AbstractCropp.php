<?php

namespace Vendor\Cropper\Cropp;

abstract class AbstractCropp
{
    abstract public function croppImage($file, $params);
}