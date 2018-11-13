<!DOCTYPE html>
<html lang="en">
<head>

@extends('admin.layouts.head')


    <script src="{{asset('js/backend/js/ie.assign.fix.min.js')}}"></script>
</head>
<body class="js-loading "> <!-- add for rounded corners: form-controls-rounded -->



{{--<div class="page-preloader js-page-preloader">--}}
    {{--<div class="page-preloader__logo">--}}
        {{--<img src="{{asset('images/backend/img/logo-black-lg.png')}}" alt="" class="page-preloader__logo-image">--}}
    {{--</div>--}}
    {{--<div class="page-preloader__desc">Photo Studio</div>--}}
    {{--<div class="page-preloader__loader">--}}
        {{--<div class="page-preloader__loader-heading">System Loading</div>--}}
        {{--<div class="page-preloader__loader-desc">Widgets update</div>--}}
        {{--<div class="progress progress-rounded page-preloader__loader-progress">--}}
            {{--<div id="page-loader-progress-bar" class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="page-preloader__copyright">Mastar.co, 2018</div>--}}
{{--</div>--}}




   @extends('admin.layouts.header')






<div class="page-wrap">


     @extends('admin.layouts.sidebar')


    <div class="page-content">
        @yield('content')
    </div>
</div>


@extends('admin.layouts.footer')



</body>
</html>
