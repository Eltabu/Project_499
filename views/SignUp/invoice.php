    <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Vehicle Rental Solutions, Inc.
                <small class="pull-right">Date: <?php echo date('d/m/Y'); ?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>Admin, Inc.</strong><br>
                401 Sunset Ave, Lambton Tower <br>
                Windsor, ON N9B 3P4<br>
                Phone: (519) 253-3000<br>
                Email: 	info@vrs.myweb.cs.uwindsor.ca
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>Mr. John Doe</strong><br>
                Phone: (555) 539-1037<br>
                Email: john.doe@example.com
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice #007612</b><br>
              <br>
              <b>Order ID:</b> 4F3S8J<br>
              <b>Next Payment Due:</b> <?php $date = new DateTime("+1 months"); echo $date->format("d/m/Y"); ?><br>
              <b>Account:</b> 968-34567
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Qty</th>
                    <th>Feature</th>
                    <th>Description</th>
                    <th>Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Call of Duty</td>
                    <td>El snort testosterone trophy driving gloves handsome</td>
                    <td>$64.50</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Need for Speed IV</td>
                    <td>Wes Anderson umami biodiesel</td>
                    <td>$50.00</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Monsters DVD</td>
                    <td>Terry Richardson helvetica tousled street art master</td>
                    <td>$10.70</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Grown Ups Blue Ray</td>
                    <td>Tousled lomo letterpress</td>
                    <td>$25.99</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead">Payment Methods:</p>
              <img src="<?php echo URL ?>assets/img/credit/visa.png" alt="Visa">
              <img src="<?php echo URL ?>assets/img/credit/mastercard.png" alt="Mastercard">
              <img src="<?php echo URL ?>assets/img/credit/american-express.png" alt="American Express">
              <img src="<?php echo URL ?>assets/img/credit/paypal2.png" alt="Paypal">
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Charage will be colleccted form card **********4526.
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">First Payment <?php $date = new DateTime("+1 months"); echo $date->format("d/m/Y"); ?></p>
              <div class="table-responsive">
                <table class="table">
                  <tbody><tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$250.30</td>
                  </tr>
                  <tr>
                    <th>Tax (13.00%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>Shipping:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </tbody></table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Finish </button>
            </div>
          </div>
        </section>