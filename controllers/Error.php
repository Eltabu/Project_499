<?php

class Home extends Controller
{        
    private function test()
    {     
      $this->view('Error/index', ['viewName' => 'Error', 'message' => 'test']);
    }
}