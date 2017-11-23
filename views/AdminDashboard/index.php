<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>AdminDashboard" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="<?php echo URL ?>AdminDashboard/customers" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customers </a>
              <a href="<?php echo URL ?>AdminDashboard/inquiries" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Inquiries </a>
              <a href="<?php echo URL ?>AdminDashboard/products" class="list-group-item"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> Products </a>
              <a href="<?php echo URL ?>AdminDashboard/features" class="list-group-item"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Features </a>
              <a href="<?php echo URL ?>AdminDashboard/financial" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Financial </a>
              <a href="<?php echo URL ?>AdminDashboard/management" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Management </a>
              <a href="<?php echo URL ?>AdminDashboard/settings" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Settings </a>
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
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $this->totalCustomers[0]->total;?></h2>
                    <h4>Customers</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> <?php echo $this->totalInquiries[0]->total;?> </h2>
                    <h4>Inquiries </h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> 33</h2>
                    <h4>Unpaid Fees</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Companies</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Product</th>
                      </tr>
                      <?php //print_r($this->countries); 
                        foreach ($this->latestCompanies as $item) 
                        {
                          echo "<tr> 
                                  <td> $item->name </td>  
                                  <td> $item->country </td>  
                                  <td> $item->product </td> 
                                </tr>";
                        }
                      ?>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
</div>