<?php

namespace Vendor\Cropper\Client;

class Client implements ClientInterface
{
  public function __construct()
  {
  }

  /**
   * @return string
   */
  public function getResult()
  {
      return 'Ok';
  }
}
