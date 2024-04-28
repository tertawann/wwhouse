<?php

use Core\Session;

function dd($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
  die;
}


function json($value)
{
  echo json_encode($value);
  die();
}


function base_path($path)
{
  return BASE_PATH . $path;
}

function urlIs($path)
{
  return $_SERVER['REQUEST_URI'] === $path;
}


function view($path, $attributes = [])
{

  extract($attributes);

  require base_path('resources/views/' . $path);
}



function spa($path, $attributes = [])
{
  view($path, $attributes);
}

function about($code = 404)
{
  http_response_code($code);

  require base_path("resources/views/{$code}.php");

  die;
}

function redirect($path)
{
  header("location:{$path}");
  die;
}

function selectedIs($key, $value)
{
  $selected = Session::get('old')[$key] ?? null;
  return isset($selected) && $selected === $value;
}

function old($key, $default = '')
{
  return Session::get('old')[$key] ?? $default;
}
