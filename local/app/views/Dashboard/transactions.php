<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>Dashboard/Reservations" class="list-group-item active main-color-bg"><span class="fa fa-car" aria-hidden="true"></span> My Reservations</a>
              <a href="<?php echo URL ?>Dashboard/Account" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account Settings</a>
              <a href="<?php echo URL ?>Dashboard/Transactions" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Transactions</a>
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
                                <th>Card Number</th>
                                <th>Card Type</th>
                                <th>Total</th> 
                                <th>Date</th>
                              </tr>



                            <?php
                               foreach ($this->reservations as $reservation) 
                              {

                                $cardNumber = substr($reservation->cardnum, -4);;

                                if($reservation->card_id == 1)
                                {
                                  $cardType = "Mastercard";
                                }
                                else if($reservation->card_id == 2)
                                {
                                  $cardType = "Visa";
                                } 
                                else
                                {
                                  $cardType = "American Express";
                                }

                                echo "<tr><td> **** **** **** ".$cardNumber."</td><td>".$cardType."</td><td>".$reservation->total."</td><td>".$reservation->date_made."</td></tr>";

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