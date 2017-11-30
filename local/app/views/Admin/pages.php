<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span aria-hidden="true"></span>
              </a>
              <a href="<?php echo URL ?>Admin/index" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users </a>
              <a href="<?php echo URL ?>Admin/pages" class="list-group-item"><span class="fa fa-file-text" aria-hidden="true"></span> Pages </a>
              <a href="<?php echo URL ?>Admin/locations" class="list-group-item"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Locations </a>
              <a href="<?php echo URL ?>Admin/vehicles" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> Vehicles </a>
              <a href="<?php echo URL ?>Admin/pages" class="list-group-item"><span class="fa fa-file-text" aria-hidden="true"></span> Pages </a>
              <?php include("inquirymenu.php"); ?>
              <a href="<?php echo URL ?>Admin/account" class="list-group-item"><span class="fa fa-cog" aria-hidden="true"></span> Settings </a>
            </div>

          
          </div>
          <div class="col-md-9">               
            <div class="panel panel-default">

              <div class="panel-heading main-color-bg">
                
              </div>

              <div class="panel-body col-lg-6 col-md-12">

                <form class="col-md-6" method="post" action="<?php echo URL ?>Admin/updateStrings">
                    <h2>About Us</h2>
                    <br>
                    <div class="form-group">
                        <label for="address" class="control-label">Address:</label>
                        <input name="address" value="<?php echo ADDRESS; ?>" type="text" id="address" class="form-control" required="required">
                         <label for="email" class="control-label">Email:</label>
                        <input name="email" value="<?php echo EMAIL; ?>" type="text" id="email" class="form-control" required="required">
                         <label for="phone" class="control-label">Phone:</label>
                        <input name="phone" value="<?php echo PHONE; ?>" type="text" id="phone" class="form-control" required="required">
                         <label for="aboutUs" class="control-label">About Us:</label>
                        <textarea name="aboutUs" type="text" rows="5" cols="15" id="aboutUs" class="form-control" required="required"><?php echo ABOUTUS ?> 
                        </textarea>
                    </div>
                    
              </div>

               <div class="panel-body col-lg-6 col-md-12">

               
                    <h2>Social Media</h2>
                    <br>
                    <div class="form-group">
                        <label for="Facebook" class="control-label">Facebook:</label>
                        <input name="Facebook" value="<?php echo FACEBOOK; ?>" type="text" id="Facebook" class="form-control" required="required">
                         <label for="Twitter" class="control-label">Twitter:</label>
                        <input name="Twitter" value="<?php echo TWITTER; ?>" type="text" id="Twitter" class="form-control" required="required">
                         <label for="LinkedIn" class="control-label">LinkedIn:</label>
                        <input name="LinkedIn" value="<?php echo LINKEDIN; ?>" type="text" id="LinkedIn" class="form-control" required="required">
                         <label for="Instagram" class="control-label">Instagram:</label>
                        <input name="Instagram" value="<?php echo INSTAGRAM; ?>" type="text" id="Instagram" class="form-control" required="required">
                    </div>
                  

                   </div>

                    <button type="submit" class="btn btn-lg btn-danger">Update</button>

                </form>  
       

             </div>
            </div>
          </div>
           
        </div>
      </div>

    </section>
</div>