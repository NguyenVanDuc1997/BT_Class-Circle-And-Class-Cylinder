<?php

include_once ('Circle.php');
class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height=$height;
    }

    public function calculateVolume(){
        return parent::calculateArea()*$this->height;
    }

    public function __toString()
    {
        return parent::__toString()." voi chieu cao ".$this->height." thi the tich la ".$this->calculateVolume(); // TODO: Change the autogenerated stub
    }
}