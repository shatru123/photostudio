
@extends('client.layouts.layouts')

@section('content')



<div class="container-fluid">
    <div class="page-content__header">
        <div>
            <h2 class="page-content__header-heading">Dashboard</h2>
            <div class="page-content__header-description">All Photos</div>
        </div>

        @if($photos)
        {!! Form::open(array('url' => action('ClientController@download_sel'),'files'=>true,'method'=>'post') ) !!}
        <div class="page-content__header-meta">
            <a href="{{url('/client/download_all')}}" class="btn btn-info icon-left">
                Download All Zip  <span class="btn-icon mdi mdi-folder-download"></span>
            </a>
            {!! Form::submit('Download Selected Zip', ['class'=>'btn btn-info icon-left ']) !!}
        </div>
    </div>
    <div class="row">
                  @foreach($photos as $photo)
                     <?php //$imagepath='public/images/'.$photo->photo_path; ?>
                <div class="row col-xl-3">
                        <div class="col-xl-3 col-lg-3 col-md-8">
                            <img height="250" width="300" src="{{$photo->photo_path ? asset('images')."/client_photos/".$photo->client_id."/".$photo->photo_path : 'http://placehold.it/400x400'}}" alt="">
                            <div class="row ">
                                <div class="col-xl-8 col-lg-8 col-md-8"> <input type="checkbox" name="img[]" value="{{$photo->photo_path}}" class="form-control"></div>
                               <div class="col-xl-3 col-lg-3 col-md-8"> <a href="{{asset('images')."/".$photo->photo_path}}" download>Download</a></div>
                            </div>
                        </div>
                </div>
                    <hr>
                    @endforeach

         {!! Form::close() !!}

   @endif
</div>
</div>

@endsection