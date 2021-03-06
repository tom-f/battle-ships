<?php

namespace TomF\BattleShips;

class Point
{
    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var boolean
     */
    private $isHit = false;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    private function setHit()
    {
        $this->isHit = true;
    }

    public function isHit()
    {
        return $this->isHit;
    }

    public function receiveShot($x, $y)
    {
        if ($this->testHit($x, $y)) {
            $this->setHit();
        }

        return $this->isHit();
    }

    public function testHit($x, $y)
    {
        return (($x == $this->x) && ($y == $this->y));
    }

}
