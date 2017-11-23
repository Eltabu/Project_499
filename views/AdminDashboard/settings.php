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
                <div class="panel-heading">Manage Admins</div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Create Admin</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form" action="<?php echo URL ?>AdminDashboard/createAdmin" method="post">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="firstname">First name:</label>
                                                <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">Last name:</label>
                                                <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username:</label>
                                                <input id="username" name="username" type="text" class="form-control" placeholder="Enter ...">
                                            </div>
                                            <div class="form-group">
                                                <label for="userpassword">Password:</label>
                                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Password">
                                            </div>
                                            <div class="form-group ">
                                                <input  type="submit" class="btn btn-primary" value="Create">
                                            </div>
                                        </div><!-- /.box-body -->
                                    </form>
                                </div><!-- /.box-body -->
                            </div>
                        </div>   


                        <div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header">
                                <h3 class="box-title">Update Admin Credential</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form" action="<?php echo URL ?>AdminDashboard/updateAdminCredential" method="post">
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
            
            
            <!--<div class="row">
                <div class="panel panel-default">
                <div class="panel-heading">Manage Elements</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                </div>           
            </div>  -->   

        </div>
      </div>
    </section>
</div>