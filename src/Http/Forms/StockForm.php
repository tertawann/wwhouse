<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class StockForm
{

  protected $errors = [];

  public function __construct(public array $attributes)
  {
    if (!Validator::string($attributes['code'])) {
      $this->errors['code'] = 'Please provide a code';
    }

    if (!Validator::number($attributes['brandId'])) {
      $this->errors['brandId'] = 'Please provide a brand';
    }

    if (!Validator::string($attributes['product'])) {
      $this->errors['product'] = 'Please provide a product';
    }

    if (!Validator::string($attributes['size'])) {
      $this->errors['size'] = 'Please provide a size';
    }

    if (!Validator::number($attributes['quantity'], 1, 10)) {
      $this->errors['quantity'] = 'Please provide a quantity of at least 1 unit but not more than 10.';
    }

    if (!Validator::number($attributes['cost'], 1, 100000)) {
      $this->errors['cost'] = 'Please provide a cost of at least 1 baht.';
    }

    if (!Validator::number($attributes['sale'], 1, 100000)) {
      $this->errors['sale'] = 'Please provide a cost of at least 1 baht.';
    }

    if (!Validator::image($attributes['image'], ['jpg', 'jpeg', 'webp', 'png'])) {
      $this->errors['image'] = 'Please provide image.';
    }
  }


  public static function validate($attributes)
  {
    $instance = new static($attributes);

    return $instance->failed() ? $instance->throw() : $instance;
  }

  public function throw()
  {
    ValidationException::throw($this->errors(), $this->attributes);
  }

  public function error($field, $message)
  {
    $this->errors[$field] = $message;
    return $this;
  }

  public function errors()
  {
    return $this->errors;
  }

  public function failed()
  {
    return count($this->errors);
  }
}
