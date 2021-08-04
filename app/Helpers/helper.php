<?php

function super_unique($array,$key)
{
    $temp_array = [];

    foreach($array as $arr){
        foreach ($arr as &$v) {
            if (!isset($temp_array[$v[$key]]))
                $temp_array[$v[$key]] =& $v;
        }
    }
    $array = array_values($temp_array);

    return $array;

}
