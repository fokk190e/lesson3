<?php

namespace Vendor\Cropper\Cropp;

class Cropp extends AbstractCropp
{
    public function __construct()
    {
    }

    /**
     * @param $file
     * @param $params
     *
     * @return object
     */
    public function croppImage($file, $params)
    {
      if($params['type']) {
        return new CroppJpg($file, $params);
      } else if($params['type']) {
        return new CroppPng($file, $params);
      } else {
        return new CroppSvg($file, $params);
      }
    }
}