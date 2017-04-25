<?php

namespace App;

class XtremeGoggle extends Goggle
{
  public function getColor()
  {
    parent::getColor();

    print 'x2';
  }
}
