<?php

declare(strict_types=1);


function get_name(array $monster)
{
    return $monster['name'] === $_GET['sorting'];
};
