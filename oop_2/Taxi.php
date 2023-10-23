<?php

// ここにコードを書いていきます
require_once __DIR__ . '/Car.php';


class Taxi extends Car
{
    private $passenger;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
        $this->passenger = 0;
    }

    public function pickUp($num)
    {
        $this->passenger += $num;
        return strval($num) . '人乗車しました' . PHP_EOL;
    }

    public function lower($num)
    {
        if ($num > $this->passenger) {
            return strval($num) . '人は降車できません' . PHP_EOL;
        } else {
            $this->passenger -= $num;
            return strval($num) . '人降車しました' . PHP_EOL;
        };
    }

    public function information()
    {
        $carInfo = parent::information();
        return $carInfo . PHP_EOL . '乗車人数:' . $this->passenger . PHP_EOL;
    }
}
