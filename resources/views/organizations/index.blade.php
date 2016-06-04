@extends('layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Organizations
            <a class="btn btn-success pull-right" href="{{ route('organizations.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($organizations->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                        <th>IMAGE_URL</th>
                        <th>DESCRIPTION</th>
                         @foreach($organizations as $organization)
                            <th class="text-right">OPTIONS</th>
                            <th><a href="{{ URL::route('organizations.donates.create', [$organization->id]) }}" 
                    class='btn btn-primary'>Create a task</a></th>
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
                </table>
                {!! $organizations->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection