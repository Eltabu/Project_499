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

                <form class="col-md-6" method="post" action="<?php echo URL ?>Admin/addAdmin">
                    <h2>Add Admin</h2>
                    <br>
                    <div class="form-group">
                        <label for="username" class="control-label">User name:</label>
                        <input name="username" type="text" id="username" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">E-mail:</label>
                        <input name="email" id="email" class="form-control" type="email" required="required">
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input name="password" id="password" class="form-control" type="password" required="required">
                    </div>

                    <div class="form-group">
                        <label for="re-password" class="control-label">Re-Enter Password:</label>
                        <input name="re-password" id="re-password" class="form-control" type="password" required="required">
                    </div>  

                    <div id="response1"></div>
                    <div id="response2"></div>

                   
                                
                    <button type="submit" class="btn btn-lg btn-danger">Add Admin</button>

                </form>  
              </div>

              <div class="panel-body col-lg-6 col-md-12">

                <form class="col-md-6" method="post" action="<?php echo URL ?>Admin/updatePassword">
                    <h2>Update Your Password</h2>
                    <br>
                    <div class="form-group">
                        <label for="email" class="control-label">Password:</label>
                        <input name="password" id="password" class="form-control" type="password" required="required">
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label">Re-Enter Password:</label>
                        <input name="re-password" id="re-password" class="form-control" type="password" required="required">
                    </div>  

                    <div id="response1"></div>
                    <div id="response2"></div>
                                
                    <button type="submit" class="btn btn-lg btn-danger">Update</button>

                </form>  
              </div>

             </div>
            </div>
          </div>
           
        </div>
      </div>

    </section>
</div>

    <script>
        $(document).ready(function () {

        //client-side password restrictions atleast 6 characters long
            $("#password").on("keyup", function(){

                if($("#password").val().length < 6){
                    $("#response1").html("Password should be atleast 6 characters long");
                    
                } else if($("#password").val().length >= 6){
                    $("#response1").html("");
                }
            });//end password length

        // client-side check if both passwords match
        $("#re-password").on("keyup", function () { 
                var matched,
                    password = $("#password").val(),
                    confirm = $("#re-password").val();
                matched = (password === confirm) ? true : false;

                if(matched) { 
                    //Shows success message and prevents submission.  In production, comment out the next 2 lines.
                    $("#response2").html("Match<br>");
                    $("#response2").css("color", "green");
                }
                else { 
                    $("#response2").html("Re-Enter Your Password<br>");    
                    $("#response2").css("color", "red");
                }
            });//end password match
        });//end ready
    </script>