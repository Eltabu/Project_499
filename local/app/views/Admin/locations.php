<div class="home">
<section id="main">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span aria-hidden="true"></span>
              </a>
              <a href="<?php echo URL ?>Admin/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customers </a>
              <a href=<?php echo URL ?>Admin/locations" class="list-group-item"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Locations </a>
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
                <div class="col-md-3 admin-boxes clickable" id="all-locations">
                  <div class="well dash-box">
                    <h2><span class="fa fa-map-marker" aria-hidden="true"></span></h2>
                    <h4>All Locations</h4>
                  </div>
                </div>
               

                <div class="col-md-3 admin-boxes clickable" id="add-location">
                  <div class="well dash-box">
                    <h2><span class="fa fa-plus-circle" aria-hidden="true"></span></h2>
                    <h4>Add a Location</h4>
                  </div>
                </div>

              </div>

        <div class="panel-body">
            <div class=="col-md-12" style="font-size:20px" id="form-space">
                  
                <table style="width:100%">
                  <tr>
                    <th>City</th>
                    <th>Province</th> 
                    <th>Name</th>
                  </tr>
                  
                <?php
                   foreach ($this->locations as $location) 
                  {
                    echo "<tr><td>".$location->city."</td><td>".$location->province."</td> <td>".$location->name."</td></tr>";
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
    $("#add-location").click(function() {
        $("#form-space").html('<form method="post" action="<?php echo URL ?>Admin/addLocation" onsubmit="">Name:<input type="text" name="name"><br>Province:<input type="text" name="province"><br>City:<input type="text" name="city"><br>Postal Code:<input type="text" name="postal"><br>Address:<input type="text" name="address"><br>Phone:<input type="text" name="phone"><br>Latitude:<input type="text" name="latitude"><br>Longitude:<input type="text" name="longitude"><br><button type="submit">Add Location</button></form>');

    });
     
    $("#all-locations").click(function() {
        $("#form-space").html("<?php echo '<table style=\"width:100%\"><tr><th>City</th><th>Province</th><th>Name</th></tr>';

           foreach ($this->locations as $location) 
                  {
                    echo "<tr><td>".$location->city."</td><td>".$location->province."</td><td>".$location->name."</td></tr>";
                  }

           echo "</table>";

         ?>");

    });
});
</script>