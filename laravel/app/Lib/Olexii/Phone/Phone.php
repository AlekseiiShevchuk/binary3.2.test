<?php


namespace App\Lib\Olexii\Phone;


class Phone
{
    public $name;
    public $CPU;
    public $cores;
    public $displayResolution;
    public $camera;
    public $batteryCapacity;

    public function __construct($name,$CPU,$cores,$displayResolution,$camera,$batteryCapacity)
    {
        $this->name = $name;
        $this->CPU = $CPU;
        $this->cores = $cores;
        $this->displayResolution = $displayResolution;
        $this->camera = $camera;
        $this->batteryCapacity = $batteryCapacity;
    }

    public function __toString(){
        return $this->name . ', ' . $this->CPU . ', ' .$this->cores .'cores, '.$this->displayResolution. ' display, '
                . $this->camera . ' camera, battery capacity ' . $this->batteryCapacity;
    }
}