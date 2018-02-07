<?php
/**
 * User: helingfeng
 */

namespace FactoryMethod;


class LineChart extends Chart
{
    public function init($data = [])
    {
        echo 'line init data.'."\r\n";
    }

    public function display()
    {
        echo 'line display.'."\r\n";
    }
}