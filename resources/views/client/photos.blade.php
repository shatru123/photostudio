
@extends('client.layouts.layouts')

@section('content')



<div class="container-fluid">
    <div class="page-content__header">

              @if($photos)

                <div class="row">
                  @foreach($photos as $photo)

                    <div class="col-md-4">

                     <img height="350" width="400" src="{{$photo->photo_path ? asset('images')."/".$photo->photo_path : 'http://placehold.it/400x400'}}" alt="" >

                 </div>




                    @endforeach
            </div>

                @endif

</div></div>



@endsection