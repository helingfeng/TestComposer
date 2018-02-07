<?php


namespace FactoryMethod;


class PieFactory
{

    public static function getChartObject()
    {
        $pie = new PieChart();
        return $pie;
    }
}