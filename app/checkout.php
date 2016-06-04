<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>MOLPAY SAMPLE SOURCE CODE</title>
      <!-- Google Font Open Sans (CDN) -->
      <link rel="stylesheet" type='text/css' href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <!-- Bootstrap Core CSS v3.3.6 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <!-- Font-Awesome CSS v4.6.3 -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <!-- JQuery v1.12.4 -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   </head>
   <body>
      <div class="container" style="max-width:800px;">
         <div class="row" style="margin-top:20px;">
            <!--<div class="col-sm-12"><img src="https://www.onlinepayment.com.my/MOLPay/pay/molpaytech/molpaytech_logo.gif"/></div>-->
            <div class="col-sm-12">
               <i class="fa fa-usd fa-2x"></i><span style="font-size:25px; font-weight:bold; margin-left:10px;">Bill Payment</span>
            </div>
         </div>
         <hr>
         <form method="POST" action="/confirmation.php" id="form_payment" class="form-horizontal">
            <h3 style="font-size:14px;">Payable Information</h3>
            <hr class="short alt">
            <div class="form-group form-group-sm">
               <label for="inputCurrency" class="col-sm-2 control-label">Currency</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="currency" name="currency" value="MYR" placeholder="MYR">
               </div>
            </div>
            <div class="form-group form-group-sm">
               <label for="inputAmount" class="col-sm-2 control-label">Amount</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="amount" name="amount" value="1.10" placeholder="eg. 1.10">
               </div>
            </div>
            <div class="form-group form-group-sm">
               <label for="inputDescription" class="col-sm-2 control-label">Description</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="desc" name="desc" value="Utilities bill" placeholder="Utilities bill">
               </div>
            </div>
            <hr class="short alt">
            <h3 style="font-size:14px;">Payer Information</h3>
            <hr class="short alt">
            <div class="form-group form-group-sm">
               <label for="inputName" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="Frankie" placeholder="eg. John Doe">
               </div>
            </div>
            <div class="form-group form-group-sm">
               <label for="inputEmail" class="col-sm-2 control-label">Email</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" value="frankie@molpay.com" placeholder="eg. frankie@molpay.com">
               </div>
            </div>
            <div class="form-group form-group-sm">
               <label for="inputContact" class="col-sm-2 control-label">Contact</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact" name="contact" value="0163218880" placeholder="+0163218880">
               </div>
            </div>
            <hr class="short alt">
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10 text-right">
                  <button type="submit" class="btn btn-success btn-sm">Continue</button>
               </div>
            </div>
         </form>
      </div>
      <!-- Scripts -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
   </body>
</html>