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
             <!--  <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Agreements </a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Finanaces </a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Settings </a> -->
              <?php include("config/inquirymenu.php"); ?>
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
                    45%
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
                <div class="col-md-3">
                  <div class="well dash-box admin-boxes" >
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                    <h4>Users</h4>
                  </div>
                </div>
               
                <div class="col-md-3">
                  <div class="well dash-box admin-boxes">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>
</div>