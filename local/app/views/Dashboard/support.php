<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>Dashboard/Reservations" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> My Reservations</a>
              <a href="<?php echo URL ?>Dashboard/Account" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account Settings</a>
              <a href="<?php echo URL ?>Dashboard/Transactions" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Transactions</a>
              <a href="<?php echo URL ?>Dashboard/Support" class="list-group-item  active main-color-bg"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Support</a>
              <!-- <a href="<?php echo URL ?>CustomerDashboard/paymentHistory" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> My Transactions </a>
              <a href="<?php echo URL ?>CustomerDashboard/support" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Support </a>
              <a href="<?php echo URL ?>CustomerDashboard/settings" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Settings </a> -->
            </div>
          </div>

<div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                
              </div>
              <div class="panel-body">

                <div class="row">
                    <div class="col-md-4">                            
                        <div class="box box-solid ">
                            <div class="box-header with-border">
                                <h3 class="box-title">My Messages:</h3>
                            </div>
                            <div class="box-body no-padding customers-inquiries-list">
                                <ul class="nav nav-pills nav-stacked">
                                        <?php //loop through the tickets 
                                            foreach ($this->ticket as $item) 
                                            { 
                                                echo "<li class=\"inquiry-box\" onclick=\"display_message('$item->message','$item->replay','$item->id', '$item->subject', '$item->issue_date' );\">$item->subject</li>";
                                            }
                                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                             
                        <div class="panel panel-default">
                                <div class="panel-heading" id="message-title">
                                </div>
                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                            <label>My Message:</label>
                                            <textarea disabled class="form-control" rows="7" id="customer-message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Reply Message:</label>
                                            <textarea disabled class="form-control" rows="7" id="compose-textarea"></textarea>
                                        </div>
                                    </form>    
                                </div>
                            </div>

                        <div class="box box-danger">
                            <div class="box-header">
                            <h3 class="box-title">New Ticket</h3>
                            </div>
                            <div class="box-body">
                                <div> 
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="Subject" class="control-label">Subject:</label>
                                            <input name="Subject" type="text" id="message-subject" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea id="customer-isssue" class="form-control" style="height: 300px"></textarea>
                                        </div>                                      
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">
                                        <button type="submit" onclick="send_message();" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
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