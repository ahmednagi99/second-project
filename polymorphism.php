<?php

interface Mobile
{
    public function presshome($n);


}

class Iphone implements Mobile
{
    public $number;
    public function presshome($x)
    {
        $this->number=$x;
        return $x*5 ."<br/>";
    }
}
class Samsung
{
    public $number2;
    public function presshome($l)
    {
        $this->number2=$l;
        return  $this->number2*6;
    }
}