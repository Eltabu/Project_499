<?php
/**
 * class to allow us to load models and render view
 */
class Controller
{

  function __construct()
  {
    Session::int();
  }

  public function model($model)
  {
       require_once('Model.php');
       require_once(__DIR__ .'/../models/' . $model . '.php');
       return new $model();
  }

  /**
  * view function get called from the app.php file to load the view
  */
  public function view($view, $data = [])
  {   
      echo '<script>debugger;</script>';
      echo '<script>console.log("Loading view...");</script>';
      echo '<script>console.log("'.$view.'");</script>';
      //load the header 
      require_once (__DIR__ .'/../views/Includes/header.php');

      //load the spesific view
      require_once (__DIR__ .'/../views/' . $view . '.php');

      //load the footer
      require_once (__DIR__ .'/../views/Includes/footer.php');
  }
}
