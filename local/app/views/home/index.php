<ul class="nav nav-tabs" style="margin-top:10%">
  <li class="nav-item">
    <a class="nav-link vehicle-categories" href="#">Sedans</a>
  </li>
  <li class="nav-item">
    <a class="nav-link vehicle-categories" href="#">Sport</a>
  </li>
  <li class="nav-item">
    <a class="nav-link vehicle-categories" href="#">Trucks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link vehicle-categories" href="#">SUVS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link vehicle-categories" href="#">All</a>
  </li>
<li class="nav-item" style="margin-left:53%">
  <input id="text" class="input" name="vehicle" placeholder="Search for vehicle" type="text" value=""/>
  <button class="vehicle-categories" type="submit"><span class="fa fa-search fa-icon"></span></button>
  </li>
</ul>


<div class="row text-center text-lg-left" style="background-color:white;border:4px solid #343a40;padding:10px">

  <?php
    for ($i=0; $i < 8; $i++) { 

      echo '<div class="col-lg-3 col-md-4 col-xs-6">
              <h5>Bentley Continental</h5>
              <a href='.URL.'vehicle/Bentley/Continental class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="'. URL .'app/images/bentley-continental.png" alt="">
              </a>
            </div>';
    }
    ?>
</div>

<div class="pagination" style="margin-left: 35%">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  <a class="active" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>




