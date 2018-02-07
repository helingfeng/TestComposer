<?php

require_once './vendor/autoload.php';


$pie = \FactoryMethod\PieFactory::getChartObject();
$pie->init();
$pie->display();


$line = \FactoryMethod\LineFactory::getChartObject();
$line->init();
$line->display();
