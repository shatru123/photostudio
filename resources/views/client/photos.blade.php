
@extends('client.layouts.layouts')

@section('content')



<div class="container-fluid">
    <div class="page-content__header">
        <div>
            <h2 class="page-content__header-heading">Dashboard</h2>
            <div class="page-content__header-description">All Photos</div>
        </div>
        <div class="page-content__header-meta">
            <a href="" class="btn btn-info icon-left">
                Download Zip  <span class="btn-icon mdi mdi-folder-download"></span>
            </a>
        </div>
    </div>
    <div class="row">
              @if($photos)



                  @foreach($photos as $photo)
                     <?php $imagepath='public/images/'.$photo->photo_path; ?>
                <div class="row col-xl-3">
                        <div class="col-xl-3 col-lg-3 col-md-8">
                                <img height="250" width="300" src="{{$photo->photo_path ? asset('images')."/".$photo->photo_path : 'http://placehold.it/400x400'}}" alt="" >
                            <a href="{{asset('images')."/".$photo->photo_path}}" download>Download</a>

                        </div>
                </div>
                    <hr>
                    @endforeach


                @endif

</div>
</div>




@endsection