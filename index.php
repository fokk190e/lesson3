<?php

require_once __DIR__ . '/vendor/autoload.php';

$cropper = new \Vendor\Cropper\Cropper\Cropper($file);

$cropper->loadImage($load_path);
$cropper->croppImage($type_image, $size);
$cropper->resizeImage($size);
$cropper->setQuality($quality);
$cropper->saveImage($save_path);
