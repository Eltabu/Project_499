<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>CustomerDashboard" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard   
              </a>
              <a href="<?php echo URL ?>CustomerDashboard/myProduct" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Reservations</a>
              <!-- <a href="<?php echo URL ?>CustomerDashboard/paymentHistory" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> My Transactions </a>
              <a href="<?php echo URL ?>CustomerDashboard/support" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Support </a>
              <a href="<?php echo URL ?>CustomerDashboard/settings" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Settings </a> -->
            </div>


            </div>

                        <div class="col-md-9">
                        
                        <div class="panel panel-default">
                          <div class="panel-heading main-color-bg">

                            <table style="width:100%">
                              <tr>
                                <th>Code</th>
                                <th>Car</th> 
                                <th>Pick Up</th>
                                <th>Dropoff</th>
                              </tr>
                              
                            <?php
                               foreach ($this->reservations as $reservation) 
                              {
                                echo "<tr><td>".$reservation->resid."</td><td>".$reservation->year." ".$reservation->make." ".$reservation->model."</td> <td>".$reservation->pickup." ".$reservation->pickdate." ".$reservation->picktime."</td><td>".$reservation->dropoff." ".$reservation->dropdate." ".$reservation->droptime."</td><td><h1 style=\"margin:0px;padding-left:5px\"><span class=\"fa fa-trash-o clickable\" aria-hidden=\"true\"></span></h1></td></tr>";
                              }
                           ?>

                            </table>

                          </div>

                        </div>

                      </div>
           
          </div>
            </div>
          </div>
         
            
      </div>
    </section>
</div>