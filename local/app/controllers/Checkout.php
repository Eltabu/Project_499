<?php

class Checkout extends Controller
{
    public function index()
    {
      $this->view('Checkout/index', ['viewName' => 'Checkout']);
    }

    public function checkout()
    {
    		  $reservationModel = $this->model('Reservation');

          $reservationModel->checkout($_POST);

          header('location: '.URL.'Dashboard/index');  
    }
}