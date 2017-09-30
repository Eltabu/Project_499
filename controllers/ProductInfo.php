<?php

/**
 * ProductInfo class display information about the rental system
**/
class ProductInfo extends Controller
{
    public function index()
    {
      $this->view('ProductInfo/index', ['viewName' => 'Product Information']);
    }
}