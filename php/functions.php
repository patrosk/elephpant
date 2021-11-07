<?php

declare(strict_types=1);


function get_name($variable)
{
    return $variable['name'] === $_GET['sorting'];
};
