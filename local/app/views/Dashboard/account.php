<div class="home">
<section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-3">
            <div class="list-group">
              <a href="<?php echo URL ?>Dashboard/Reservations" class="list-group-item"><span class="fa fa-car" aria-hidden="true"></span> My Reservations</a>
              <a href="<?php echo URL ?>rDashboard/Account" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account Settings</a>
              <a href="<?php echo URL ?>Dashboard/Transactions" class="list-group-item"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Transactions</a>
              <a href="<?php echo URL ?>Dashboard/Support" class="list-group-item"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Support</a>
              <!-- <a href="<?php echo URL ?>CustomerDashboard/paymentHistory" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> My Transactions </a>
              <a href="<?php echo URL ?>CustomerDashboard/support" class="list-group-item"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Support </a>
              <a href="<?php echo URL ?>CustomerDashboard/settings" class="list-group-item"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Settings </a> -->
            </div>
          </div>

          <div class="col-md-9">               
            <div class="panel panel-default">

              <div class="panel-heading main-color-bg">
                
              </div>

              <div class="panel-body col-lg-6 col-md-12">

                <form class="col-md-6" method="post" action="<?php echo URL ?>Dashboard/updateBasic">
                    <h1>Basic Info</h1>
                    <br>
                    <div class="form-group">
                        <label for="username" class="control-label">User name:</label>
                        <input name="username" type="text" id="username" value ="<?php echo $this->user[0]->username; ?>" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="firstnametname" class="control-label">First name:</label>
                        <input name="firstname" type="text" id="firstname" value ="<?php echo $this->user[0]->firstname; ?>" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="lastname" class="control-label">Last name:</label>
                        <input name="lastname" type="text" id="lastname" value ="<?php echo $this->user[0]->lastname; ?>" class="form-control" required="required">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">E-mail:</label>
                        <input name="email" id="email" class="form-control" value ="<?php echo $this->user[0]->email; ?>" type="email" required="required">
                    </div>

                    <div class="form-group">
                        <label for="phone" class="control-label">Phone:</label>
                        <input name="phone" id="phone" class="form-control"  value ="<?php echo $this->user[0]->phone; ?>" type="tel" required="required">
                    </div>
                                
                    <button type="submit" class="btn btn-lg btn-danger">Update</button>

                </form>  
              </div>

              <div class="panel-body col-lg-6 col-md-12">

                <form class="col-md-6" method="post" action="<?php echo URL ?>Dashboard/updatePassword">
                    <h1>Password</h1>
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

