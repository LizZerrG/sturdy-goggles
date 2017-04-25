<?php

namespace App;

class Goggle 
{
  public $color;

  public function __construct()
  {
    print 'hoi';
  }

  public function getColor()
  {
    print $this->color;
  }

  static function start()
  {
    print 'start';
  }

  public function __destruct()
  {
    print 'doei';
  }
}
