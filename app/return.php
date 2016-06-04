<?php
  $vkey ="c6c5cdaabf772a366e1b5ba8a512afac"; //Replace xxxxxxxxxx with your MOLPay Verify Key
  
  /********************************
  *Don't change below parameters
  ********************************/
  $tranID 	=	isset($_POST['tranID']) ? $_POST['tranID'] : '';
  $orderid 	=	isset($_POST['orderid']) ? $_POST['orderid'] : '';
  $status 	=	isset($_POST['status']) ? $_POST['status'] : '';
  $merchant	=	isset($_POST['domain']) ? $_POST['domain'] : '';
  $amount 	=	isset($_POST['amount']) ? $_POST['amount'] : '';
  $currency	=	isset($_POST['currency']) ? $_POST['currency'] : '';
  $appcode 	=	isset($_POST['appcode']) ? $_POST['appcode'] : '';
  $paydate 	=	isset($_POST['paydate']) ? $_POST['paydate'] : '';
  $skey		=	isset($_POST['skey']) ? $_POST['skey'] : ''; //Security key return by MOLPay
  
  /***********************************************************
  * To verify the data integrity sending by MOLPay
  ************************************************************/
  $key0 = md5($tranID.$orderid.$status.$merchant.$amount.$currency);
  $key1 = md5($paydate.$merchant.$key0.$appcode.$vkey);
  //key1 : Security key generated on Merchant system
  
  $verify_hash = false;
  if($skey === $key1) {
    $verify_hash = true;
  } else if($skey != $key1) {
    $verify_hash = false;
  }
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
          Return data !
          <pre>
<?php print_r($_POST); ?>
          </pre>
        </div>
        <div class="col-sm-12">
        <?php
          if(($verify_hash) && ($status=="00")) {
          	echo '<div class="alert alert-success" role="alert">Payment successful.</div>';
          } else {
          	echo '<div class="alert alert-danger" role="alert">Payment Unsuccessful</div>';
          }
        ?>
        </div>
      </div>
    </div>
    <!-- Scripts -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>