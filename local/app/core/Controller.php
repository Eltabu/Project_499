<?php 

class Controller
{

	protected function loadModel($modelName = ''){
		
		//loads a model by name
		require_once '../app/models/'.$modelName.'.php';

		return new $modelName();
	}

	 public function loadView($viewName, $viewData = [])
  {   
      //load the header 
      require_once (__DIR__ .'/../includes/Header.php');

      //load the spesific view
      require_once (__DIR__ .'/../views/' . $viewName . '.php');

      //load the footer
      require_once (__DIR__ .'/../includes/Footer.php');
  }
}