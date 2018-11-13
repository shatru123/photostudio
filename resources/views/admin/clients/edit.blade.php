
@extends('admin.layouts.layouts')

@section('content')

    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Dashboard</h2>
                <div class="page-content__header-description">Welcome to Agile CRM Sales Dashboard</div>
            </div>
            <div class="page-content__header-meta">
                <a href="" class="btn btn-info icon-left">
                    Add  <span class="btn-icon mdi mdi-plus-circle"></span>
                </a>
            </div>
        </div>

        {!! Form::model($client, ['method'=>'PATCH', 'action'=> ['AdminClientController@update', $client->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">

            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update Client', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminClientController@destroy', $client->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete Client', ['class'=>'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection