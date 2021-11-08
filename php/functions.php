<?php

declare(strict_types=1);

require __DIR__ . '/monsters.php';


function get_name(array $monster)
{
    return $monster['name'] === $_GET['sorting'];
};

function get_monster(array $monsters)
{
    if ((isset($_GET['sorting']))) {
        foreach (array_filter($monsters, "get_name") as $monster) {
            return $monster;
        }
    }
}

function get_random_story(array $stories)
{
    $i = rand(0, 3);
    $story = $stories[$i];
    return $story;
}
