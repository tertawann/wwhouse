<?php

namespace Core;

class Validator
{
  public static function string($value, $min = 1, $max = INF)
  {

    $trim = trim($value);
    $value = strlen($trim);

    return $value && $value >= $min && $value <= $max;
  }



  public static function number($value, $min = 1, $max = INF)
  {

    $trim = trim($value);
    $value = (int) $trim;

    return $value && $value >= $min && $value <= $max;
  }

  public static function image($value, $allow = [])
  {
    $type =  explode('/', $value['type'])[1] ?? '';

    return array_search($type, $allow);
  }
}
