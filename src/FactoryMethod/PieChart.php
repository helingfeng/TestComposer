<?php
/**
 * User: helingfeng
 */

namespace FactoryMethod;


class PieChart extends Chart
{
    public function init($data = [])
    {
        echo 'pie init data.'."\r\n";
    }

    public function display()
    {
        echo 'pie display.'."\r\n";
    }
}