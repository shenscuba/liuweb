<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="a website created to my wife 'liuxiuwei'" />
  <meta name="keywords" content="Liuweb,laravel" />
  <meta name="author" content="Scuba Shen" />
  <title>@yield('title', 'liuweb')</title>
  <script src="{{ url('http://cdn.bootcss.com/respond.js/1.4.2/respond.js') }}"></script>
  <script src="{{ url('http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
  <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />

  @section('css')
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('/css/icomoon.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  @show

</head>
<body>
  @include('layouts._header', ['header' => $header])
  @if($header == 'backstage')
    @include('layouts._sidebar')
    <div class="panel-right">
      @include('layouts._inner_sidebar')
      <div class="inner-right">
        <div class="col-md-offset-1 col-md-10" style="margin-top: 15px;">
          <div class="row">
            <div class="col-md-offset-2 col-md-8">
              @include('shared._messages')
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  @else
    <div class="container">
      @include('shared._messages')
    </div>
    @yield('content')
    @include('layouts._footer')
  @endif


  @section('js')
    <script src="{{ url('https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
  @show

</body>
</html>