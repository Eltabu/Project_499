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
            <div class="row">
                <div class="panel panel-default">
                <div class="panel-heading">Manage Admins</div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Credit Card</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form" action="<?php echo URL ?>CustomerDashboard/updateCreditCard" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Holder Name:</label>
                                                <input type="text" name="holdername" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label>Card Number:</label>
                                                <input type="text" name="cardnumber" class="form-control" placeholder="Enter ...">
                                            </div>                                            
                                            <div class="form-group">
                                                <label>Security Code</label>
                                                <input type="text" name="securitycode" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label>Expired Year:</label>
                                                <input type="text" name="year" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                                            </div>
                                            <div class="form-group">
                                                <label>Expired Month:</label>
                                                <input type="text" name="month" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                                            </div>
                                            <div class="form-group ">
                                                <input  type="submit" class="btn btn-primary" value="Update">                                            
                                            </div>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                <h3 class="box-title">Update Customer Information</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form"  action="<?php echo URL ?>CustomerDashboard/updateCustomerInfo" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input type="text" name="fname" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control" placeholder="Enter ...">
                                            </div>                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email Address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label>Suffix</label>
                                                <input type="text" name="suffix" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone Number:</label>
                                                <input type="text" name="phone" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group ">
                                                <input  type="submit" class="btn btn-primary" value="Update">
                                            </div>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>

                             
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Customer Credentials</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form"  action="<?php echo URL ?>CustomerDashboard/updateCredentials" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="username">Username:</label>
                                                <input id="username" name="username" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label for="userpassword">Password:</label>
                                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Password">
                                            </div>
                                            <div class="form-group ">
                                                <input  type="submit" class="btn btn-primary" value="Update">
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
            </div>
      </div>
    </section>
</div>