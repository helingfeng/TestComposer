<?php

require_once './vendor/autoload.php';


$pie = \SimpleFactory\Factory::getChartObject('pie');
$pie->init();
$pie->display();

$bar = \SimpleFactory\Factory::getChartObject('bar');
$bar->init();
$bar->display();

$line = \SimpleFactory\Factory::getChartObject('line');
$line->init();
$line->display();
