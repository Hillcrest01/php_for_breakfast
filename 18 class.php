<?php

class Fruit
{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }

    function __constructor($name)
    {
        $this->name = $name;
    }

    function __destruct()
    {
        echo "The fruit is {$this->name} and the color {$this->color}";
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
echo $apple->get_name();
echo "<br>";
$apple->set_color('Red');
echo $apple->get_color();
