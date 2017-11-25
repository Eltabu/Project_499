<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span aria-hidden="true"></span>
              </a>
              <a href="<?php echo URL ?>Admin/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customers </a>
              <a href="<?php echo URL ?>Admin/locations" class="list-group-item"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Locations </a>
              <a href="<?php echo URL ?>Admin/vehicles" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> Vehicles </a>
              <a href="<?php echo URL ?>Admin/account" class="list-group-item"><span class="fa fa-user" aria-hidden="true"></span> Account </a>
                

                <?php include("inquirymenu.php"); ?>
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
                                        <?php 
                                            foreach ($this->tickets as $item) 
                                            { 
                                                echo "<li class=\"inquiry-box\" onclick=\"display_message('$item->message','$item->replay','$item->id', '$item->subject', '$item->issue_date' );\">$item->subject</li>";
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


