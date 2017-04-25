<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

// $goggle = new XtremeGoggle();
// $goggle->color = 'blue';
// $goggle->getColor();

$circle = new Circle();
$square = new Square();

$renderer = new Renderer();

$renderer->draw($square);
