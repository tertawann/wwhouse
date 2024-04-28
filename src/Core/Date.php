<?php


namespace Core;

class Date
{
  public static function getDatetimeStart()
  {
      return date('Y-m-d') . ' 00:00:00';
  }

  public static function getDatetimeEnd()
  {
      return date('Y-m-d') . ' 23:59:59';
  }
}
