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

    #forgotpassword:hover{
        color:#0033ff; 
    }
    
    #forgotpassword{

        color:grey;
        margin-bottom:20px;
    }

</style>

<body style="background-color:#1e434d;">
<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 m6 offset-m3" style="text-align:center; margin-top:20px; background-color:white;border-radius:20%" >
            <div class="panel panel-default" style="text-align:center; margin-top:20px;">
                <div class="panel-heading"><h1><span style="color: #ee6e73;">Login</span></h1></div>
                <div class="separator"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                             <div class="input-field col m6 offset-m3 s8 offset-s2" >
                                <input placeholder="Email Adress"id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                             <div class="input-field col m6 offset-m3 s8 offset-s2" >
                                <input  placeholder="Password" id="password" type="password" class="form-control" name="password">
                                
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif 
                            </div>
                        </div>

                        <div class="form-group">
                             <div class="input-field col m6 offset-m3 s8 offset-s2" style="padding-left:0px;" >
                                  <input type="checkbox" id="remembercb" name="remember" />
                                  <label for="remembercb">Remember Me</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field col m12 s12" style="padding-top:10px;">
                                <button style="color:#ee6e73; background-color:white;margin-bottom: 15px;" type="submit" class="btn">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-group" style="margin-bottom:20px;">
                             <div class="input-field col m12 s12" style="margin-bottom:20px;" >
                                  <a id="forgotpassword" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
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
