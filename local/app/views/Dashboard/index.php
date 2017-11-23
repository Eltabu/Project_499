<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>Dashboard/Reservations" class="list-group-item active main-color-bg"><span class="fa fa-car" aria-hidden="true"></span> My Reservations</a>
              <a href="<?php echo URL ?>Dashboard/Account" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account Settings</a>
              <a href="<?php echo URL ?>Dashboard/Transcations" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Transcations</a>
              <a href="<?php echo URL ?>Dashboard/Support" class="list-group-item"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Support</a>
              <!-- <a href="<?php echo URL ?>CustomerDashboard/paymentHistory" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> My Transactions </a>
              <a href="<?php echo URL ?>CustomerDashboard/support" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Support </a>
              <a href="<?php echo URL ?>CustomerDashboard/settings" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Settings </a> -->
            </div>
          </div>

          <div class="col-md-9">               
            <div class="panel panel-default">

              <div class="panel-heading main-color-bg">
                
              </div>

              <div class="panel-body">

                            <table style="width:100%">
                              <tr>
                                <th>Code</th>
                                <th>Car</th> 
                                <th>Pick Up</th>
                                <th>Dropoff</th>
                                <th>Cancel</th>
                              </tr>



                            <?php
                               foreach ($this->reservations as $reservation) 
                              {

                                echo "<tr><td>".$reservation->resid."</td><td>".$reservation->year." ".$reservation->make." ".$reservation->model."</td> <td>".$reservation->pickup." ".$reservation->pickdate." ".str_replace(":00.00",  "", $reservation->picktime)."</td><td>".$reservation->dropoff." ".$reservation->dropdate." ".str_replace(":00.00",  "", $reservation->droptime)."</td><td><h2 style=\"margin:0px;padding-left:5px\"><a href=\"".URL."Dashboard/cancelReservation/".$reservation->resid."\"><span class=\"fa fa-remove clickable\" aria-hidden=\"true\"></span></a></h2></td></tr>";

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