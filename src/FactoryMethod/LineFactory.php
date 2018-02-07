<?php


namespace FactoryMethod;


class LineFactory
{

    public static function getChartObject()
    {
        $line = new LineChart();
        return $line;
    }
}