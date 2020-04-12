<?php


class Circle
{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->radius=$radius;
        $this->color=$color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }

    public function __toString()
    {
        return "Hinh tron co ban kinh ".$this->radius." mau ".$this->color." co chu vi la ".$this->calculateArea();
    }

}