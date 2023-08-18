<?php

namespace Chestersa\TopTrumps;

class Card
{
    protected $name;
    protected $stats;
    protected $score;

    public function __construct($name, $stats)
    {
        $this->name = $name;
        $this->stats = $stats;
        $this->score = 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function getStat($category)
    {
        return $this->stats[$category];
    }

    public function getScore()
    {
        return $this->score;
    }

    public function addToScore($amount)
    {
        $this->score += $amount;
    }

    public function resetScore()
    {
        $this->score = 0;
    }

}