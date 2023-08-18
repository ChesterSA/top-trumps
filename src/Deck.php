<?php

namespace Chestersa\TopTrumps;

class Deck
{
    protected $name;
    protected $categories;
    protected $deck;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCategories($categories)
    {
        return $this->categories;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @throws \Exception
     */
    public function addCard($name, $stats)
    {
        $this->resetScores();

        if (count($stats) != count($this->categories)) {
            throw new \Exception('Wrong amount of categories entered');
        }

        $keyedStats = [];

        foreach (array_keys($this->categories) as $key => $category) {
            $keyedStats[$category] = $stats[$key];
        }

        $card = new Card($name, $keyedStats);

        $this->deck[] = $card;

        $this->scoreCards();
    }

    public function getBestInCategory($category)
    {
        return $this->sortByCategory($category)[0];
    }

    public function sortByCategory($category)
    {
        $arr = $this->deck;

        $grouped = [];

        foreach ($arr as $card) {
            $grouped['' . $card->getStat($category)][] = $card;
        }


        if ($this->categories[$category] == 'inc') {
            krsort($grouped);
        } elseif ($this->categories[$category] == 'dec') {
            ksort($grouped);
        }

        return $grouped;
    }

    protected function scoreCards()
    {
        foreach (array_keys($this->categories) as $category) {
            $this->scoreDeckByCategory($category);
        }
    }

    public function scoreDeckByCategory($category)
    {
        $score = count($this->deck);

        $sorted = $this->sortByCategory($category);

        foreach ($sorted as $group) {
            foreach ($group as $card) {
                $card->addToScore($score);
            }
            $score -= count($group);
        }
    }

    public function getBestCategoryForCard($name)
    {
        foreach (array_keys($this->categories) as $category) {
            $this->scoreDeckByCategory($category);
        }
    }

    public function getDeck()
    {
        return $this->deck;
    }

    public function getSortedDeck()
    {
        $arr = $this->getDeck();

        usort($arr, function ($a, $b) {
            return $a->getScore() < $b->getScore();
        });

        return $arr;
    }

    private function resetScores()
    {
        if($this->deck != null){
            foreach($this->deck as $card){
                $card->resetScore();
            }
        }

    }
}