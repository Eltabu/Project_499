<div class="contact-us">


   <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Question or Concern?</h2>
                <p class="lead">Send it our way and we'll get back to you as soon a possible</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo URL ?>SendEmail/send">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                             
                    </div>

                    <div class="col-sm-5">

                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                                               
                    </div>
                    <br>

                   <div class="form-group col-lg-10 col-lg-offset-1">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" style="overflow:hidden" rows="8"></textarea>
                    </div> 

                     <div class="form-group center col-lg-10 col-lg-offest-2">
                            <button type="submit" name="submit" class="btn btn-danger btn-lg" required="required">Submit Message</button>
                        </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
</div>
