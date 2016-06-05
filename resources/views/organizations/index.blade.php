@extends('layouts.app')

@section('header')
@if(Session::has('message'))
<style>
    .card{
        height:400px;
        width: 420px;
    }
    
    .activator{
        display: block;
        margin-left: auto;
        margin-right: auto;
        height:250px;
        width: 420px;
    }
    
    
</style>

<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Organizations
            <a class="btn btn-success pull-right" href="{{ route('organizations.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
<style>
    .card{
        height:400px;
        width: 420px;
    }
    
    img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        height:250px;
        width: 420px;
    }
    
    
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if($organizations->count())
            @foreach($organizations as $organization)
             <!-- <div class="col s12 m6">
                          <div class="card">
                            
                            <div class="card-content">
                            <div class="card-image">
                              <img  style="opacity:0.7;width:200px;" src="{{$organization->image_url}}" class="text-right">
                              <span style="color:black; font-weight:bold"class="card-title">{{$organization->name}}</span>
                            </div>
                              <p>{{$organization->description}}</p>
                            </div>
                            <div class="card-action">
                              <a href="{{ URL::route('organizations.donates.create', $organization->id) }}" class='waves-effect waves-light btn right'>Donate</a>
                            </div>
                          </div>
            </div> -->

            <div class="card col s12 m6">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="{{$organization->image_url}}">
                        </div>
                        <div class="card-content" style="margin-bottom:50px;">
                          <span class="card-title activator grey-text text-darken-4">{{$organization->name}}<i class="material-icons right" style="font-size: 40px;">info_outline</i></span>

                            <hr>

                          <p><a href="{{ URL::route('organizations.donates.create', $organization->id) }}" class="waves-effect waves-light btn right" style="background-color:#ee6e73; margin-top:10px;">Donate</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">{{$organization->description}}<i class="material-icons right">close</i></span>
                          <p>Kepong, Malaysia.</p>
                        </div>
            </div>
             @endforeach

                <!--<table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                        <th>IMAGE_URL</th>
                        <th>DESCRIPTION</th>
                         @foreach($organizations as $organization)
                           
                            
                        </tr>
                    </thead>

                    <tbody>
                       
                            <tr>
                                <td>{{$organization->id}}</td>
                                <td>{{$organization->name}}</td>
                    <td>{{$organization->image_url}}</td>
                    <td>{{$organization->description}}</td>
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('organizations.show', $organization->id) }}"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('organizations.edit', $organization->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                    <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> -->s
                {!! $organizations->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>
</div>
@endsection