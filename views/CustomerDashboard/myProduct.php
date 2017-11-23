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
                <h3 class="panel-title">Product Information</h3>
              </div>
              <div class="panel-body">
                <br/>
                <form>
                    <div class="form-group form-inline">
                      <label>Product Name: </label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                    </div>
                    <div class="form-group form-inline">
                      <label>Monthly Fees</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Features:</label>
                        <select multiple="" class="form-control select-meanu">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                        </select>
                    </div>
                </form>

              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
</div>