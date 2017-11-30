<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span aria-hidden="true"></span>
              </a>
              <a href="<?php echo URL ?>Admin/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users </a>
              <a href="<?php echo URL ?>Admin/locations" class="list-group-item"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Locations </a>
              <a href="<?php echo URL ?>Admin/vehicles" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> Vehicles </a>
              <a href="<?php echo URL ?>Admin/pages" class="list-group-item"><span class="fa fa-file-text" aria-hidden="true"></span> Pages </a>

             <?php include("inquirymenu.php"); ?>

              <a href="<?php echo URL ?>Admin/account" class="list-group-item"><span class="fa fa-cog" aria-hidden="true"></span> Settings </a>

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
            <div class=="col-md-12" id="form-space">

                 <table  id="customerTable" class="table table-striped table-bordered">
                  <thead>
                  <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Mileage<p style="font-size:0.7em;font-style: italic;">(km)</p></th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                <?php
                   foreach ($this->vehicles as $vehicle)
                  {
                    echo "<tr><td>".$vehicle->make."</td><td>".$vehicle->model."</td> <td>".$vehicle->year."</td><td>".$vehicle->mileage."</td><td><h1 style=\"margin:0px;padding-left:5px\"><a style=\"color:black;font-size:inherit\"href=\"".URL."Admin/deleteVehicle/".$vehicle->vid."\"><span class=\"fa fa-trash-o clickable\" aria-hidden=\"true\"></span></a></h1></td></tr>";
                  }
               ?>
</tbody>
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
        $("#form-space").html('<form method="POST" action="<?php echo URL ?>Admin/addVehicle" enctype="multipart/form-data" onsubmit=""><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="form-admin" placeholder="Make" type="text" name="make"><br><input class="form-admin"  placeholder="Model" type="text" name="model"><br><input class="form-admin"  placeholder="Year" type="text" name="year"></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><input class="form-admin"  placeholder="Mileage" type="text" name="mileage"><br><input class="form-admin"  placeholder="# of Seats" type="text" name="seats"><br><input class="form-admin" id="image" name="image" type="file" accept="image/*"></div><br><div class="admin-btn-div"><button class="admin-btn btn btn-danger btn-lg" type="submit">Add Vehicle</button></div></form>');

    });

      $("#all-vehicles").click(function() {
        $("#form-space").html("<?php echo '<table style=\"width:100%\"><tr><th>Make</th><th>Model</th><th>Year</th><th>Mileage</th></tr>';

           foreach ($this->vehicles as $vehicle)
                  {
                    echo "<tr><td>".$vehicle->make."</td><td>".$vehicle->model."</td> <td>".$vehicle->year."</td><td>".$vehicle->mileage."</td></tr>";
                  }

           echo "</table>";

         ?>");

    });
});
</script>
