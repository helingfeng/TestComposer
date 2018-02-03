<?php


namespace SimpleFactory;


class Factory
{

    public static function getChartObject($type)
    {
        switch ($type) {

            case 'pie':
                $pie = new PieChart();
                return $pie;
                break;
            case 'line':
                $line = new LineChart();
                return $line;
                break;
            case 'bar':
                $bar = new BarChart();
                return $bar;
                break;
            default:
                throw new \Exception('无法创建该图');
        }
    }
}