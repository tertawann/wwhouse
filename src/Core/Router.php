<?php

namespace Core;

class Router
{

  protected $routes = [];

  public function register($method, $uri, $controller, $resolve)
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
      'resolve' => $resolve
    ];

    return $this;
  }
 

  public function get($uri, $controller, $resolve)
  {
    $this->register('GET', $uri, $controller, $resolve);
  }

  public function post($uri, $controller, $resolve)
  {
    $this->register('POST', $uri, $controller, $resolve);
  }


  public function route($uri, $method)
  {
    foreach ($this->routes as $route) {

      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        return call_user_func_array([new $route['controller'], $route['resolve']], []);
      }
    }

    about();
  }

  public function previousUrl()
  {
    return $_SERVER['HTTP_REFERER'];
  }
}
