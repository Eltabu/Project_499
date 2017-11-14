<?php

class Checkout extends Controller
{
    public function index()
    {
      $this->view('Checkout/index', ['viewName' => 'Checkout']);
    }

}