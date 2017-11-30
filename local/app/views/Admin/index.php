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
                
                 <table  id="customerTable" class="table table-striped table-bordered" style="width:100%;">
                  <thead>
                      <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password Hash</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                   foreach ($this->users as $user)
                  {
                    echo "<tr><td>".$user->username."</td><td>".$user->firstname." ".$user->lastname."</td> <td>".$user->email."</td><td>".$user->phone."</td><td>".$user->password."</td></tr>";
                  }
               ?>
             </tbody>
             </table>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>
</div>