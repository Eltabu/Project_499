
<section id="checkout-info">
    
    <div class="container center">

<form>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <input type="text" class="home-select" placeholder="Name On Card">
      </div>  
    </div>

    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <input type="text" class="home-select" placeholder="Card Number">
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input style="float:right" type="text" class="home-select" placeholder="Expiry MM">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <input style="float:left" type="text" class="home-select" placeholder="Expiry YY">
      </div>
    </div>
    
    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-12">
        <select style="float:right;padding:8px" type="text" class="home-select">
          <option selected disabled>Card Type</option>
          <option>Mastercard</option>
          <option>VISA</option>
          <option>American Express</option>
        </select>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12">
        <input style="float:left" type="text" class="home-select" placeholder="CVC">
      </div>

    </div>
    <br>

    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12 center">
      <textarea id="data_6" readonly="" name="data_6" class="agreements" rows="14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?

      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?

    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?

  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</textarea>

</div>
    </div>
      <div class="row">
        <input type="checkbox" name="terms" id="terms" required> I have read and accepted these terms and conditions</input>
      </div>
      <br>
      <div class="row">
      <input type="submit" value="Checkout" class="btn btn-danger btn-lg">
    </div>
  </form>
      </div>
</section>

<?php
print_r($_POST);
?>