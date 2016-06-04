<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;	

class CheckoutController extends Controller
{
   public function pay(){
   	  //TO CHANGE
	  $merchant_id	= "MOLWallet_Dev1";
	  $verifykey	= "c6c5cdaabf772a366e1b5ba8a512afac";
	  $orderid		= "TEAM_NAME".rand(1,9999999);
	  $returnurl	= "http://molpay-sample.frankie.wiki/return.php";
	  $callbackurl	= "http://molpay-sample.frankie.wiki/callback.php";
	  
	  //DO NOT CHANGE
	  $Payment_URL = "https://pay.molpay.com/MOLPay/pay/";
	  $amount		= $_REQUEST['amount'];
	  $bill_name	= Auth::user()->name;
	  $bill_email	= Auth::user()->email;
	  $bill_mobile	= '0102994432';
	  $bill_desc	= 'donation';
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
   } //

   	public function callback(){

   	}
}
