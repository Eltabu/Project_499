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
                <strong><?php echo $data['customerName']; ?></strong><br>
                Phone: <?php echo $data['phone']; ?><br>
                Email: <?php echo $data['email']; ?><br>
                Company Name: <?php echo $data['companyName']; ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice #<?php echo $data['InvoiceNumber']; ?></b><br>
              <b>Order ID:</b> 4F3S8J<br>
              <b>Next Payment Due:</b> <?php $date = new DateTime("+1 months"); echo $date->format("d/m/Y"); ?><br>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Feature</th>
                    <th>Description</th>
                    <th>Monthly Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Call of Duty</td>
                    <td>El snort testosterone trophy driving gloves handsome</td>
                    <td>$64.50</td>
                  </tr>
                  <tr>
                    <td>Need for Speed IV</td>
                    <td>Wes Anderson umami biodiesel</td>
                    <td>$50.00</td>
                  </tr>
                  <tr>
                    <td>Monsters DVD</td>
                    <td>Terry Richardson helvetica tousled street art master</td>
                    <td>$10.70</td>
                  </tr>
                  <tr>
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
                Charage will be colleccted form card **********<?php echo $data['cardLastDigit']; ?>
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead">Next Payment due: <?php $date = new DateTime("+1 months"); echo $date->format("d/m/Y"); ?></p>
              <div class="table-responsive">
                <table class="table">
                  <tbody><tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$<?php echo $data['subtotal']; ?></td>
                  </tr>
                  <tr>
                    <th>Tax (13.00%)</th>
                    <td>$<?php echo $data['subtotal'] * 0.13; ?></td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$<?php echo $data['subtotal'] * 1.13; ?></td>
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