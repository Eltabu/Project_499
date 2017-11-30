<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>CustomerDashboard" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard   
              </a>
              <a href="<?php echo URL ?>CustomerDashboard/myProduct" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Product</a>
              <a href="<?php echo URL ?>CustomerDashboard/availableFeatures" class="list-group-item"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Available Features </a>
              <a href="<?php echo URL ?>CustomerDashboard/upgrade" class="list-group-item"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Upgrade </a>
              <a href="<?php echo URL ?>CustomerDashboard/paymentHistory" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Payment History </a>
              <a href="<?php echo URL ?>CustomerDashboard/support" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Support </a>
              <a href="<?php echo URL ?>CustomerDashboard/settings" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Settings </a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                    25%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;">
                    15%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
                      <?php  
                        $d1 = new DateTime($this->info[0]->date); 
                        $d2 = new DateTime('NOW'); 
                        $diff=$d2->diff($d1); 
                        echo $diff->format('%a'); 
                      ?>
                    </h2>
                    <h4> Days to next payment</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <?php echo $this->info[0]->tickets ?></h2>
                    <h4>Open tickets </h4>
                  </div>
                </div>
                <!--<div class="col-md-4">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>29.99</h2>
                    <h4>Unpaid Fees</h4>
                  </div>
                </div>-->
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Features</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                      </tr>
                      <tr>
                        <td>Vertical inspection</td>
                        <td>$1.5</td>
                        <td>Free Trial</td>
                      </tr>
                      <tr>
                        <td>Online payment</td>
                        <td>$2.5</td>
                        <td>Standard</td>
                      </tr>
                      <tr>
                        <td>Reporting System</td>
                        <td>$5.3</td>
                        <td>Untimate</td>
                      </tr>
                      <tr>
                        <td>Recognize account types</td>
                        <td>$3.6</td>
                        <td>Free Trial</td>
                      </tr>
                      <tr>
                        <td>Inventory Report</td>
                        <td>$0.99</td>
                        <td>Free Trial</td>
                      </tr>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
</div>