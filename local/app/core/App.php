<?php

class App
{

	//default url controllers
	protected $controller = 'home';

	protected $method = 'index';

	//parameters we can pass through URL
	protected $params = [];



	public function __construct()
	{	
		//sets url to the array returned from pareUrl()
		$url = $this->parseUrl();

		//check if controller exists
		if(file_exists('../app/controllers/'.$url[0].'.php'))
		{
			//set controller name
			$this->controller = $url[0];
			unset($url[0]);
		}	

		require_once '../app/controllers/'.$this->controller.'.php';

		//create new controller object
		$this->controller = new $this->controller;

		//check a method name is parsed
		if(isset($url[1]))
		{
			//check if method exists
			if(method_exists($this->controller, $url[1]))
			{	
				//set method name
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		//checking if url array is now empty. if not re-index array values else return an empty object
		$this->params = $url ? array_values($url) : [];

		//function taking controller, method and parameters and calling it
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	protected function parseUrl(){
		//explode and trim URL to parse controller, method and any parameters

		if( isset($_GET['url']) ){
			//cleam and split url

			//explode breaks up the url on the '/' character
			//filter var removes all illegal url characters
			//rtrim removing trailing slashes
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}