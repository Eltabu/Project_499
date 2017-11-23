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
                <h3 class="panel-title">Inquiries</h3>
              </div>
              <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">                            

                            <div class="box box-solid ">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Customers Inquiries:</h3>
                                </div>
                                <div class="box-body no-padding customers-inquiries-list">
                                    <ul class="nav nav-pills nav-stacked">
                                        <?php //loop through the tickets 
                                            foreach ($this->tickets as $item) 
                                            { 
                                                echo "<li onclick=\"display_message('$item->message','$item->replay','$item->id', '$item->subject', '$item->issue_date' );\">$item->subject</li>";
                                            }
                                        ?>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div>

                        </div>
                        <div class="col-md-8">
                             
                            <div class="panel panel-default">
                                <div class="panel-heading" id="message-title">
                                </div>

                                <div class="panel-body">
                                    <div>
                                        <div class="form-group">
                                            <label>Customer Message:</label>
                                            <textarea disabled class="form-control" rows="7" id="customer-message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Replay Message</label>
                                            <textarea id="compose-textarea" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="pull-right">
                                                <input type="hidden" id="hidden-id" value="">
                                                <button type="submit" onclick="send_replay();"  class="btn btn-primary" ><i class="fa fa-envelope-o"></i> Send</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<form class="form-horizontal" action="/action_page.php">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Message:</label>
                                            <div class="col-sm-10">
                                                <textarea disabled class="form-control" rows="7" id="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="pwd">Replay:</label>
                                            <div class="col-sm-10">          
                                                <textarea class="form-control" rows="7" id="comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">        
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>-->


                                </div>

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


