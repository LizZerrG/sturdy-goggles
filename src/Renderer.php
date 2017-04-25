<?php

namespace App;

class Renderer
{
  public function draw(Shape $shape)
  {
    print $shape->draw();
  }
}
