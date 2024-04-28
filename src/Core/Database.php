<?php

namespace Core;

use Medoo\Medoo;

class Database
{

  protected $medoo;

  public function __construct($config)
  {
    $this->medoo = new Medoo($config);
  }

  public function select($table = '', $columns = [], $where = [])
  {
    $result =  $this->medoo->select($table, $columns, $where);
    return !$result ? $this->failed($this->medoo->error) : $this->response($result, 'Success!!');
  }

  public function get($table = '', $columns = [], $where = [])
  {
    $result =  $this->medoo->get($table, $columns, $where);
    return !$result ? $this->failed($this->medoo->error) : $this->response($result, 'Success!!');
  }

  public function insert($table = '', $values = [], $primaryKey = '')
  {
    $result = $this->medoo->insert($table, $values, $primaryKey);
    return !$result ? $this->failed($this->medoo->error) : $this->response($this->medoo->id(), 'Success!!');
  }

  public function response($values, $message)
  {
    return [
      'status' => true,
      'response' => $values,
      'message' => $message
    ];
  }

  public function failed($message)
  {
    return [
      'status' => false,
      'response' => [],
      'message' => $message
    ];
  }
}
