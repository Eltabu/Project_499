<?php
/**
 * the bootstrap point in the applicaion
 */
class App
{

  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
     $url = $this->parseUrl();

     //parase the controller if exist
     if(file_exists(__DIR__ .'/../controllers/'. $url[0] .'.php'))
     {
         $this->controller = $url[0];
         unset($url[0]);
     }

     require_once(__DIR__ .'/../controllers/' . $this->controller . '.php');
     $this->controller = new $this->controller;

     //parase the methods if exist
     if(isset($url[1]))
     {
         if(method_exists($this->controller, $url[1]))
         {
             $this->method = $url[1];
             unset($url[1]);
         }
     }

     //parase the params of exist
     $this->params = $url ? array_values($url) : []; 


     //call the controller and pass along the params
     call_user_func_array([$this->controller, $this->method], $this->params);

  }

  // function to paese the url
  public function parseUrl()
  {
      if(isset($_GET['url']))
      {
          return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
      }
  }
}
