<?php

if (!function_exists('p')) 
{
    function p($data)
    {
        print_r($data);
    }
}

if (!function_exists('ps')) 
{
    function ps($data)
    {
        print_r($data);
        die;
    }
}

if (!function_exists('v')) 
{
    function v($data)
    {
        var_dump($data);
    }
}

if (!function_exists('vs')) 
{
    function vs($data)
    {
        var_dump($data);
        die;
    }
}