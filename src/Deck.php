<?php

namespace C16R\TopTrumps;

abstract class Deck
{
    protected static $name;
    protected static $categories;
    protected static $deck;

    private static $formatted = false;

    public static function getName()
    {
        return static::$name;
    }

    public static function getCategories()
    {
        return array_keys(static::$categories);
    }

    public static function getDeck()
    {
        return static::$deck;
    }

    public static function getBestInCategory($category)
    {
        self::sortByCategory($category);
        return static::$deck[0];
    }

    public static function sortByCategory($category)
    {
        self::formatDeck();

        if (in_array($category, array_keys(static::$categories))) {
            uasort(static::$deck, function ($a, $b) use ($category) {
                if (static::$categories[$category] == 'inc') {
                    return $a[$category] < $b[$category];
                } else {
                    return $a[$category] > $b[$category];
                }
            });
        };
    }

    public static function formatDeck()
    {
        if (self::$formatted) {
            return;
        }

        $new = [];

        foreach (static::$deck as $name => $stats) {
            $keyedStats = [];

            foreach (array_keys(static::$categories) as $key => $category) {
                $keyedStats[$category] = $stats[$key];
            }

            $new[$name] = $keyedStats;
        }

        static::$deck = $new;
        self::$formatted = true;
    }

    public static function getWorstInCategory($category)
    {
        self::sortByCategory($category);
        return end(static::$deck);
    }

    public static function scoreDeck()
    {
        $totals = [];
        foreach (array_keys(static::$categories) as $category) {
            $scores = self::scoreByCategory($category);

            foreach ($scores as $name => $score) {
                if (in_array($name, array_keys($totals))) {
                    $totals[$name] += $score;
                } else {
                    $totals[$name] = $score;
                }
            }
        }
        arsort($totals);
        return $totals;
    }

    public static function scoreByCategory($category)
    {
        $scored = [];
        $score = count(static::$deck);

        self::sortByCategory($category);

        foreach (static::$deck as $name => $card) {
            $card['score'] = $score;
            $scored[$name] = $score;

            $score--;
        }
        return $scored;
    }

    public static function getBestCategoryForCard($name)
    {
        $maxScore = 0;
        $bestCategory = '';

        foreach (array_keys(static::$categories) as $category) {
            $scores = self::scoreByCategory($category);

            if ($scores[$name] > $maxScore) {
                $maxScore = $scores[$name];
                $bestCategory = $category;
            }
        }

        return $bestCategory;
    }

    public static function getWorstCategoryForCard($name)
    {
        $minScore = 100000;
        $worstCategory = '';

        foreach (array_keys(static::$categories) as $category) {
            $scores = self::scoreByCategory($category);

            if ($scores[$name] < $minScore) {
                $minScore = $scores[$name];
                $worstCategory = $category;
            }
        }

        return $worstCategory;
    }

    public static function scoreCardByCategory($card, $category)
    {
        $scores = self::scoreByCategory($category);
        return $scores[$card];
    }


}