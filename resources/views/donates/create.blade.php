@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Donates / Create </h1>
    </div>
@endsection
<?php 

//TO CHANGE
  //$merchant_id  = "MOLWallet_Dev1";
  //$verifykey    = "c6c5cdaabf772a366e1b5ba8a512afac";
  $merchant_id  = (string)env('MER_ID','development');
  $verifykey    = (string)env('VER_KEY','development');

  $orderid      = "TEAM_NAME".rand(1,9999999);
  $returnurl    = "http://localhost:8000/home";
  $callbackurl  = "";
  
  //DO NOT CHANGE
  $Payment_URL = "https://pay.molpay.com/MOLPay/pay/";
  $amount       = '1.10';
  $bill_name    = 'donation';
  $bill_name    = Auth::user()->name;
              $bill_email   = Auth::user()->email;
              $bill_mobile  = (string)env('MOBILE','development');
              $bill_desc    = 'donation';
  $country      = "MY";
  $currency     = "MYR";
  $channel      = "MOLWallet";
  $langcode     = "en";
  $vcode            = md5($amount.$merchant_id.$orderid.$verifykey); 
  
  $param    =   [
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

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('organizations.donates.store', $organization->id)}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('amount')) has-error @endif">
                       <label for="amount-field">Amount</label>
                    <input type="text" id="amount-field" name="amount" class="form-control" value="1.10"/>
                       @if($errors->has("amount"))
                        <span class="help-block">{{ $errors->first("amount") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary" style="display:none">Create</button>
                    
                </div>
            </form>

            <form action="https://pay.molpay.com/MOLPay/pay/MOLWallet_Dev1/" method="POST" class="form-horizontal">
   <div class="form-group form-group-sm" style="display:none;">
      <label for="orderid" class="col-sm-2 control-label">orderid</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="orderid " name="orderid" value="{{$orderid}}"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="channel" class="col-sm-2 control-label">channel</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="channel " name="channel" value="{{$channel}}"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="currency" class="col-sm-2 control-label">currency</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="currency " name="currency" value="MYR"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="amount" class="col-sm-2 control-label">amount</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="amount " name="amount" value="1.10"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="bill_name" class="col-sm-2 control-label">bill_name</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="bill_name " name="bill_name" value="jack"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="bill_email" class="col-sm-2 control-label">bill_email</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="bill_email " name="bill_email" value="jackgoh0@gmail.com"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="bill_mobile" class="col-sm-2 control-label">bill_mobile</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="bill_mobile " name="bill_mobile" value="0163218880"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="bill_desc" class="col-sm-2 control-label">bill_desc</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="bill_desc " name="bill_desc" value="donation"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="returnurl" class="col-sm-2 control-label">returnurl</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="returnurl " name="returnurl" value="http://localhost:8000/home"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="callbackurl" class="col-sm-2 control-label">callbackurl</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="callbackurl " name="callbackurl" value=""></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="vcode" class="col-sm-2 control-label">vcode</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="vcode " name="vcode" value="{{$vcode}}"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="country" class="col-sm-2 control-label">country</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="country " name="country" value="MY"></div>
   </div>
   <div class="form-group form-group-sm" style="display:none;>
      <label for="langcode" class="col-sm-2 control-label">langcode</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="langcode " name="langcode" value="en"></div>
   </div>
   <hr class="short alt">
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10 text-right">
         <button type="submit" class="btn btn-success btn-sm">Continue</button>
      </div>
   </div>
</form>



            

        </div>
    </div>
@endsection
