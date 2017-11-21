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
                <h3 class="panel-title">Customers Overview</h3>
              </div>
              <div class="panel-body">


              <table id="customerTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Company name</th>
                        <th>Website URL</th>
                        <th>Customer phone</th>
                        <th>Customer email</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Company name</th>
                        <th>Website URL</th>
                        <th>Customer phone</th>
                        <th>Customer email</th>
                        <th>Function</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php //loop through the products
                    foreach ($this->customers as $item) 
                    { 

                    $linkDisable =  URL.'AdminDashboard/disablecustoemr'.'?customer_id='.$item->id;
                    $linkEnable = URL.'AdminDashboard/enablecustoemr'.'?customer_id='.$item->id;
                        echo "<tr>
                                <td>$item->customer_name </td>
                                <td>$item->product_name </td>
                                <td>$item->name </td>
                                <td>$item->WebsiteURL </td>
                                <td>$item->phone </td>
                                <td>$item->email </td>
                              ";
                              if ($item->status == 1)
                              {
                                echo "
                                      <td><a class=\"btn btn-danger\" href=\"$linkDisable\">Disable</a></td>
                                      </tr>";
                              }
                              else
                              {
                                  echo "
                                       <td><a class=\"btn btn-danger\" href=\"$linkEnable\">Enable</a></td>
                                       </tr>";
                              }  
                               
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