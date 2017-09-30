<?php

/**
 * Pricing class display the different type of products offered
**/
class Pricing extends Controller
{
    public function index()
    {
      $this->view('Pricing/index', ['viewName' => 'Pricing']);
    }
}