@extends('layouts.app')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Inesert Donations Amount </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('donations.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('body')) has-error @endif">
                       <label for="body-field">Body</label>
                    <textarea class="form-control" id="body-field" rows="3" name="body">{{ old("body") }}</textarea>
                       @if($errors->has("body"))
                        <span class="help-block">{{ $errors->first("body") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('donations.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>

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
@endsection