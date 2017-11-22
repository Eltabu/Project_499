<div class="container ProductInfo">
	
    <div class="row setup-content">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                
                <form class="col-md-6" method="post" action="<?php echo URL ?>SignUp/register">
                    <h1>Sign Up</h1>
                    <br>
                    <div class="form-group">
                        <label for="username" class="control-label">User name:</label>
                        <input name="username" type="text" id="username" class="form-control" required="required">
                    </div>

                    <div class="form-group">
						<label for="firstnametname" class="control-label">First name:</label>
						<input name="firstname" type="text" id="firstname" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="lastname" class="control-label">Last name:</label>
						<input name="lastname" type="text" id="lastname" class="form-control" required="required">
					</div>

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


					<div class="form-group">
						<label for="email" class="control-label">E-mail:</label>
						<input name="email" id="email" class="form-control" type="email" required="required">
					</div>

					<div class="form-group">
						<label for="phone" class="control-label">Phone:</label>
						<input name="phone" id="phone" class="form-control" type="tel" required="required">
					</div>
                    
                     <button type="submit" class="btn btn-lg btn-danger">Sign Up</button>

                </form>                
            </div>
            
        </div>
    </div>
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
