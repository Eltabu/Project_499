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
              <a href=<?php echo URL ?>Admin/locations" class="list-group-item"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Locations </a>
              <a href="<?php echo URL ?>Admin/vehicles" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> Vehicles </a>
                
                <?php include("config/inquirymenu.php"); ?>
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
                                        <li class="active"><a href="#"> Inbox <span class="pull-right">2h</span></a></li>
                                        <li><a href="#"> Sent <span class="pull-right">5h</span></a></li>
                                        <li><a href="#"> Drafts <span class="pull-right">5d</span></a></li>
                                        <li><a href="#"> Junk <span class="pull-right">5h</span></a></li>
                                        <li><a href="#"> Trash <span class="pull-right">5h</span></a></li>
                                        <li><a href="#"> Inbox </a></li>
                                        <li><a href="#"> Sent</a></li>
                                        <li><a href="#"> Drafts</a></li>
                                        <li><a href="#"> Junk </a></li>
                                        <li><a href="#"> Trash</a></li>
                                        <li><a href="#"> Inbox </a></li>
                                        <li><a href="#"> Sent</a></li>
                                        <li><a href="#"> Drafts</a></li>
                                        <li><a href="#"> Junk </a></li>
                                        <li><a href="#"> Trash</a></li>
                                        <li><a href="#"> Inbox </a></li>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div>

                        </div>
                        <div class="col-md-8">
                             
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Login Issue (2017-11-24)
                                </div>

                                <div class="panel-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Customer Message:</label>
                                            <textarea disabled class="form-control" rows="7" id="comment">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Replay Message</label>
                                            <textarea id="compose-textarea" class="form-control" style="height: 300px">
                                                <h1><u>Heading Of Message</u></h1>
                                                <h4>Subheading</h4>
                                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee</p>
                                                <ul>
                                                    <li>List item one</li>
                                                    <li>List item two</li>
                                                    <li>List item three</li>
                                                    <li>List item four</li>
                                                </ul>
                                                <p>Thank you,</p>
                                                <p>John Doe</p>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                                            </div>
                                        </div>
                                    </form>

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
