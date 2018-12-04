<?php

if (!function_exists('preFixWith')) 
{
    function preFixWith($name, $preFix)
    {
        if(substr($name, 0, strlen($preFix) ) !== $preFix)
        {
            return $preFix . $name;
        }

        return $name;
    }
}

