<?php

namespace Http\Controllers;

use Core\App;
use Core\Date;
use Core\Session;
use Core\File;
use Http\Forms\StockForm;

const PATH_STOCK_IMAGE = __DIR__ . '/../../' . 'public/assert/images/stock';

class Stock
{

  protected $database;

  public function __construct()
  {
    $this->database = App::resolve('Core\Database');
  }

  public function index()
  {
    spa('stock/index.view.php', [
      'heading' => 'Stock',
      'script' => '/js/stock.module.js'
    ]);
  }

  public function create()
  {
    $histories = $this->database->select(
      'stock',
      [
        'code',
        'brandId',
        'product_name',
        'size',
        'cost',
        'update_datetime'
      ],
      [
        'AND' => [
          'update_datetime[<>]' => [Date::getDatetimeStart(), Date::getDatetimeEnd()]
        ]
      ]
    );

    view('stock/create.view.php', [
      'heading' => 'Create product',
      'histories' => $histories['response'],
      'errors' => Session::get('errors')
    ]);
  }

  public function store()
  {
    $currentUser = 1;

    $form = StockForm::validate($attributes = [
      'code' => $_POST['code'],
      'brandId' => $_POST['brandId'],
      'product' => $_POST['product'],
      'size' => $_POST['size'],
      'quantity' => $_POST['quantity'],
      'cost' => $_POST['cost'],
      'sale' => $_POST['sale'],
      'image' => $_FILES['image']
    ]);

    $database = App::resolve('Core\Database');

    $inserted = $database->insert('stock', [
      'code' => $attributes['code'],
      'brandId' => $attributes['brandId'],
      'userId' => $currentUser,
      'product_name' => $attributes['product'],
      'size' => $attributes['size'],
      'quantity' => $attributes['quantity'],
      'cost' => $attributes['cost'],
      'sale_price' => $attributes['sale']
    ]);

    if (!$inserted['status']) {
      $form->error('code', 'Duplicate Code!!')->throw();
    }

    $file = new File();
    $file->store($_FILES['image'], PATH_STOCK_IMAGE, "pd_{$inserted['response']}");

    redirect('/stock/create');
  }

  public function getProducts()
  {
    $products = $this->database->select('stock', '*');
    json($products);
  }
}
