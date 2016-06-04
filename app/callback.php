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
  $key1 = md5($paydate.$domain.$key0.$appcode.$vkey);
  //key1 : Security key generated on Merchant system
  
if( $skey === $key1 ){
  // If matched, perform another extra checking before approved order

} elseif( $skey != $key1 ){
  // If unmatched, reject the order or merchant might send query to
  // MOLPay using Merchant requery to double check payment status
  // for that particular order.
}
?>