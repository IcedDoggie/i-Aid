@extends('layout')

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Organizations / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('organizations.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image_url')) has-error @endif">
                       <label for="image_url-field">Image_url</label>
                    <textarea class="form-control" id="image_url-field" rows="3" name="image_url">{{ old("image_url") }}</textarea>
                       @if($errors->has("image_url"))
                        <span class="help-block">{{ $errors->first("image_url") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <input type="text" id="description-field" name="description" class="form-control" value="{{ old("description") }}"/>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('/donates') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection