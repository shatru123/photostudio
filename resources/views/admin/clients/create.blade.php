
@extends('admin.layouts.layouts')

@section('content')

    <div class="container-fluid">
        <div class="page-content__header">
            <div>
                <h2 class="page-content__header-heading">Dashboard</h2>
                <div class="page-content__header-description">Fill Clients Details</div>
            </div>
            <div class="page-content__header-meta">
                <a href="" class="btn btn-info icon-left">
                    Add  <span class="btn-icon mdi mdi-plus-circle"></span>
                </a>
            </div>
        </div>
    {!! Form::open(['method'=>'POST', 'action'=> 'AdminClientController@store', 'files'=>true]) !!}


          <div class="form-group">
                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name', null, ['class'=>'form-control'])!!}
           </div>


           <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control'])!!}
           </div>


        {{--<div class="form-group">--}}
                {{--{!! Form::label('photo_id', 'Photo:') !!}--}}
                {{--{!! Form::file('photo_id', null, ['class'=>'form-control dropzone','id'=>'image-upload'])!!}--}}
        {{--<div class="fallback">--}}
                {{--<input name="photo_id" type="file" multiple />--}}
            {{--</div>--}}
            {{--<script src="{{asset('js/backend/js/dropzone.js')}}"></script>--}}

            {{--<script type="text/javascript">--}}
                {{--Dropzone.options.imageUpload = {--}}
                    {{--maxFilesize         :       1,--}}
                    {{--paramName: "photo_id",--}}
                    {{--acceptedFiles: ".jpeg,.jpg,.png,.gif"--}}
                {{--};--}}
            {{--</script>--}}

      {{--</div>--}}


        {{--</div>--}}

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
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
        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>
     {!! Form::close() !!}
    </div>





@endsection