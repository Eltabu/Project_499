<?php
/**
 * class to allow us to load models and render view
 */
class Controller
{

  function __construct()
  {
    # code...
  }

  public function model($model)
  {
       require_once(__DIR__ .'/../models/' . $model . '.php');
       return new $model();
  }

  public function view($view, $data = [])
  {
      require_once (__DIR__ .'/../views/' . $view . '.php');
  }
}
