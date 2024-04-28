<?php

namespace Http\Controllers;


class Dashboard
{

  public function index()
  {
    view('index.view.php', [
      'heading' => 'Dashboard'
    ]);
  }

 
}
