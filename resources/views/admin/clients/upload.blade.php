
@extends('admin.layouts.layouts')

@section('content')

    <div class="container-fluid m-file-manager">
        <div class="main-container m-file-manager__container">
            <div class="m-file-manager__nav">
                <div>
                    <a href="#" class="m-file-manager__upload-btn"><span class="ua-icon-fm-upload"></span></a>
                    <h6 class="m-file-manager__nav-heading">Main</h6>
                    <ul class="m-file-manager__menu">
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-files"></span>
                            <a href="#" class="m-file-manager__link">Files</a>
                        </li>
                        <li class="m-file-manager__item is-active">
                            <span class="m-file-manager__icon ua-icon-fm-photos"></span>
                            <a href="#" class="m-file-manager__link">Photos</a>
                        </li>
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-sharing"></span>
                            <a href="#" class="m-file-manager__link">Sharing</a>
                        </li>
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-links"></span>
                            <a href="#" class="m-file-manager__link">Links</a>
                        </li>
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-events"></span>
                            <a href="#" class="m-file-manager__link">Events</a>
                        </li>
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-get-started"></span>
                            <a href="#" class="m-file-manager__link">Get Started</a>
                        </li>
                    </ul>
                    <h6 class="m-file-manager__nav-heading">Labels <a href="#"><span class="ua-icon-plus m-file-manager__nav-add"></span></a></h6>
                    <ul class="m-file-manager__menu">
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-label"></span>
                            <a href="#" class="m-file-manager__link">Web</a>
                        </li>
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-label"></span>
                            <a href="#" class="m-file-manager__link">Mobile</a>
                        </li>
                        <li class="m-file-manager__item">
                            <span class="m-file-manager__icon ua-icon-fm-label"></span>
                            <a href="#" class="m-file-manager__link">Illustration</a>
                        </li>
                    </ul>
                </div>
                <div class="m-file-manager__usage">
                    <div class="m-file-manager__usage-desc">
                        <span>728 MB / 2 GB</span>
                        <a href="#"><span class="ua-icon-plus m-file-manager__nav-add"></span></a>
                    </div>
                    <div class="progress progress-rounded progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%;"></div>
                    </div>
                </div>
            </div>
            <div class="m-file-manager__content">
                <div class="m-file-manager__content-header">
                    <div class="m-file-manager__content-heading">Home</div>
                    <div class="m-file-manager__content-controls">
                        <div class="m-file-manager__content-files-controls">
                            <span class="ua-icon-fm-upload-circle m-file-manager__content-files-control" data-toggle="tooltip" data-placement="top" title="Upload" data-delay="500"></span>
                            <span class="ua-icon-fm-new-folder m-file-manager__content-files-control" data-toggle="tooltip" data-placement="top" title="New Folder" data-delay="500"></span>
                            <span class="ua-icon-fm-copy m-file-manager__content-files-control is-inactive" data-toggle="tooltip" data-placement="top" title="Copy" data-delay="500"></span>
                            <span class="ua-icon-fm-remove m-file-manager__content-files-control is-inactive" data-toggle="tooltip" data-placement="top" title="Remove" data-delay="500"></span>
                        </div>
                        <div class="m-file-manager__content-view-controls">
                            <span class="ua-icon-fm-grid m-file-manager__content-view-control is-active" data-view="grid"></span>
                            <span class="ua-icon-fm-list m-file-manager__content-view-control" data-view="list"></span>
                        </div>
                    </div>
                </div>
                <div class="m-file-manager__content-body">

                    @if($clients)
                    <div class="m-file-manager__content-body-files">
                        <div class="m-file-manager__content-files-scrollpane js-scrollable">
                            <div class="m-file-manager__content-files">
                                {{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}

                                {{--<textarea name="content" class="form-control my-editor"></textarea>--}}
                         {{--<iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>--}}
                         <iframe src="http://localhost/photostudio/public/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
                                {{--@foreach ($folders as $folder)--}}

                                {{--{{$directories = array_map('basename', File::directories($folder))}}--}}
                                <div class="m-file-manager__content-file m-file-manager__content-file-folder">
                                    <div class="m-file-manager__content-file-preview">
                                        <img src="{{asset('images/backend/img/file-manager/folder.png')}}" alt="">
                                    </div>
                                    {{--<div class="m-file-manager__content-file-name"><a href="{{ str_replace('-', ' ', $folders) }}">{{$folders}}</a></div>--}}
                                    <div class="m-file-manager__content-file-upload-time">&nbsp;</div>
                                </div>
                                {{--@endforeach--}}
                           {{--//    @endif--}}
                            @foreach($photos as $img)

                                <div class="m-file-manager__content-file m-file-manager__content-file-image is-selected">
                                    <div class="m-file-manager__content-file-preview">
                                        {{--<img src="img/file-manager/01.png" alt="">--}}
                                      <img src="{{$img->photo_path ? asset('images')."/client_photos/".$img->client_id."/".$img->photo_path : 'http://placehold.it/400x400'}}" height="150" width="160" alt="">
                                    </div>
                                    <div class="m-file-manager__content-file-name">{{$img->photo_path}}</div>
                                    <div class="m-file-manager__content-file-upload-time">1 min ago</div>

                                </div>
                            @endforeach

                            </div>
                        </div>
                    </div>

                    @endif
                    <div class="m-file-manager__content-info">
                        <div class="m-file-manager__content-info-preview">
                            <img src="img/file-manager/preview.png" alt="" class="m-file-manager__content-info-preview-image embed-responsive">
                            <div class="m-file-manager__content-info-preview-name">Habits.png</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>







@endsection