    <div class="login">
        <section id="main">
        <div class="container">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form id="login" action="<?php echo URL ?>login/isUser" method="post" class="well">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter User Name">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Login</button>
                </form>
            </div>
            </div>
        </div>
        </section>
    </div>