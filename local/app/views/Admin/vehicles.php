<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span aria-hidden="true"></span>
              </a>
              <a href="<?php echo URL ?>Admin/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customers </a>
              <a href="<?php echo URL ?>Admin/locations" class="list-group-item"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Locations </a>
              <a href="<?php echo URL ?>Admin/vehicles" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> Vehicles </a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"></h3>
              </div>

              <div class="panel-body">

                <div class="col-md-3 admin-boxes clickable" id="all-vehicles">
                  <div class="well dash-box">
                    <h2><span class="fa fa-car" aria-hidden="true"></span></h2>
                    <h4>All Vehicles</h4>
                  </div>
                </div>
               
                <div class="col-md-3 admin-boxes clickable" id="add-vehicle">
                  <div class="well dash-box">
                    <h2><span class="fa fa-plus-circle" aria-hidden="true"></span></h2>
                    <h4>Add a Vehicle</h4>
                  </div>
                </div>

              </div>

        <div class="panel-body">
            <div class=="col-md-12" style="font-size:20px" id="form-space">
                  
                <table style="width:100%">
                  <tr>
                    <th>Make</th>
                    <th>Model</th> 
                    <th>Year</th>
                    <th>Mileage</th>
                  </tr>
                  
                <?php
                   foreach ($this->vehicles as $vehicle) 
                  {
                    echo "<tr><td>".$vehicle->company."</td><td>".$vehicle->model_name."</td> <td>".$vehicle->year."</td><td>".$vehicle->mileage."</td></tr>";
                  }
               ?>

                </table>

              </div>
            </div>

              </div>
          </div>
        </div>
      </div>
    </section>
</div>

<script>
$(document).ready(function(){       
    $("#add-vehicle").click(function() {
        $("#form-space").html('<form method="post" action="<?php echo URL ?>Admin/addVehicle" onsubmit="">Make:<input class="form-admin" type="text" name="make"><br>Model:<input type="text" name="model"><br>Year:<input type="text" name="year"><br><button type="submit">Add Vehicle</button></form>');

    });
     
      $("#all-vehicles").click(function() {
        $("#form-space").html("<?php echo '<table style=\"width:100%\"><tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th></tr>';

           foreach ($this->vehicles as $vehicle) 
                  {
                    echo "<tr><td>".$vehicle->company."</td><td>".$vehicle->model_name."</td> <td>".$vehicle->year."</td><td>".$vehicle->mileage."</td></tr>";
                  }

           echo "</table>";

         ?>");

    });
});
</script>