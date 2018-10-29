<?php

require_once __DIR__ . '/vendor/autoload.php';

$load_save_block = new \Vendor\Cropper\LoadSave\LoadSave();
$cropp_block = new \Vendor\Cropper\Cropp\Cropp();
$result_block = new \Vendor\Cropper\Client\Client();

$load_save_block->loadFile($file);
$cropp_block->croppImage($image, $params);
$load_save_block->saveFile($path);

$result_block->getResult();