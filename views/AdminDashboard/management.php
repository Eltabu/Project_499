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
            
            <!-- Create -->
            <div class="row">
                <div class="panel panel-default">
                <div class="panel-heading">Create Elements</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                <h3 class="box-title">Add Country</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form" action="<?php echo URL ?>AdminDashboard/addCompanyName" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="countryName">Country Name:</label>
                                                <input id="countryName" name="countryName" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group ">
                                                <input  type="submit" class="btn btn-primary" value="Add">
                                            </div>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                <h3 class="box-title">Add Fleet Size</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form" action="<?php echo URL ?>AdminDashboard/addFleetSize" method="post">
                                        <div class="box-body">
                                             <div class="form-group">
                                                <label for="fleetname">Fleet Name:</label>
                                                <input id="fleetname" name="fleetname" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label for="fleetSize">Fleet Size:</label>
                                                <input id="fleetSize" name="fleetSize" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group ">
                                                <input  type="submit" class="btn btn-primary" value="Add">
                                            </div>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>      
                    </div>
                </div>
                </div>
            </div>
            
            <!-- Manage-->
            <!--<div class="row">
                <div class="panel panel-default">
                <div class="panel-heading">Create Product</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <label for="fleetSize">Name:</label>
                                    <input id="fleetSize" type="text" class="form-control" placeholder="Peoduct Name">
                                </div>
                                <label for="initialFees">Initial Fees:</label>  
                                <div class="input-group">                                                                      
                                    <span  id="initialFees" name="initialFees" class="input-group-addon">$</span>
                                    <input id="initialFees" name="initialFees" type="text" class="form-control">
                                </div>
                                <br/>
                                <label for="monthlyFees">Monthly Fees:</label>  
                                <div class="input-group">                                                                      
                                    <span  id="monthlyFees" name="monthlyFees" class="input-group-addon">$</span>
                                    <input id="monthlyFees" name="monthlyFees" type="text" class="form-control">
                                </div>
                                 <br/>
                                <div class="form-group">
                                    <label>Select Features</label>
                                    <select multiple="" class="form-control select-meanu">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                </div>           
            </div> -->    

        </div>
      </div>
    </section>
</div>