@extends('layouts.app')

@section('content')

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<style>

.separator{
        border:0;
        width: 90%;
        margin-left:5%;
        margin-bottom: 0px;
        height:1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}

</style>
<body style="background-color:#1e434d;">
<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 m6 offset-m3" style="text-align:center;background-color:white;border-radius:20%">
            <div class="panel panel-default">
                <div class="panel-heading"><h1><span style="color: #ee6e73">Register</span></h1></div>
                <div class="separator"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            <div class="input-field col m6 offset-m3 s8 offset-s2" >
                                <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                 ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                             <div class="input-field col m6 offset-m3 s8 offset-s2" >
                                <input placeholder="Email Address" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="input-field col m6 offset-m3 s8 offset-s2" >
                                <input placeholder="Password" id="password" type="password" class="form-control" name="password">

                               @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                            <div class="input-field col m6 offset-m3 s8 offset-s2" >
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field col m6 offset-m3 s8 offset-s2" style="margin-bottom: 20px;">
                                <button style="color:#ee6e73; background-color:white;" type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
