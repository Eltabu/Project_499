<?php

class Home extends Controller
{        

  public $locations,$vehicles;

    public function index()
    {   
      $this->getVehicles();
      $this->getLocations();
      $this->getClasses();
      $this->view('Home/index', ['viewName' => 'Home']);
    }


    public function getLocations()
    {
      $locationsModel = $this->model('Location');
      $this->locations = $locationsModel->getLocations();
    }

    public function getClasses()
    {
      $vehiclesModel = $this->model('Vehicle');
      $this->classes = $vehiclesModel->getClasses();
    }

    public function getVehicles()
    {
      $vehiclesModel = $this->model('Vehicle');
      $this->vehicles = $vehiclesModel->getVehicles();
    }

}
