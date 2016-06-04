<?php
  //TO CHANGE
  $merchant_id	= "MOLWallet_Dev1";
  $verifykey	= "c6c5cdaabf772a366e1b5ba8a512afac";
  $orderid		= "TEAM_NAME".rand(1,9999999);
  $returnurl	= "http://molpay-sample.frankie.wiki/return.php";
  $callbackurl	= "http://molpay-sample.frankie.wiki/callback.php";
  
  //DO NOT CHANGE
  $Payment_URL = "https://pay.molpay.com/MOLPay/pay/";
  $amount		= $_REQUEST['amount'];
  $bill_name	= $_REQUEST['name'];
  $bill_email	= $_REQUEST['email'];
  $bill_mobile	= $_REQUEST['contact'];
  $bill_desc	= $_REQUEST['desc'];
  $country		= "MY";
  $currency		= "MYR";
  $channel		= "MOLWallet";
  $langcode		= "en";
  $vcode			= md5($amount.$merchant_id.$orderid.$verifykey); 
  
  $param	=	[
         'orderid'    => $orderid,
         'channel'    => $channel,
         'currency'   => $currency,
         'amount'   => $amount,
         'bill_name'  => $bill_name,
         'bill_email' => $bill_email,
         'bill_mobile'  => $bill_mobile,
         'bill_desc'  => $bill_desc,
         'returnurl'  => $returnurl,
         'callbackurl'  => $callbackurl,
         'vcode'    => $vcode,
         'country'    => $country,
         'langcode'   => $langcode,
				];
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MOLPAY SAMPLE SOURCE CODE</title>
    <!-- Google Font Open Sans (CDN) -->
    <link rel="stylesheet" type='text/css' href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Bootstrap Core CSS v3.3.5 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- JQuery v1.12.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    <div class="container" style="max-width:800px;">
      <div class="row" style="margin-top:20px;">
        <div class="col-sm-12">
          <pre>
<?php print_r($_POST); echo 'MerchantId: '.$merchant_id.'<br>VerifyKey: '.$verifykey; ?>
          </pre>
        </div>
        <div class="col-sm-12">
          <form action="<?php echo $Payment_URL.$merchant_id.'/'; ?>" method="POST" class="form-horizontal">
            <?php
              foreach($param as $key => $value) {
              echo "<div class='form-group form-group-sm'>";
                echo "<label for='".$key."' class='col-sm-2 control-label'>".$key."</label>";
                echo "<div class='col-sm-10'>";
                  echo "<input type='text' class='form-control' id='".$key." 'name='".$key."' value='".$value."'>";
                echo "</div>";
              echo "</div>";
              }
              ?>
            <hr class="short alt">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10 text-right">
                <button type="submit" class="btn btn-success btn-sm">Continue</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>