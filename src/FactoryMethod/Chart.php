<?php
/**
 * User: helingfeng
 */

namespace FactoryMethod;


abstract class Chart
{
    abstract public function init($data = []);
    abstract public function display();
}