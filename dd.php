<?php


function debug($str): void
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}