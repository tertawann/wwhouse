<?php

namespace Core;

class File
{

  public function store($file, $dir, $name)
  {
    $type =  explode('/', $file['type'])[1] ?? '';
    return move_uploaded_file($file['tmp_name'], $dir . "/$name.$type");
  }
}
