<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>


<nav class="white">
    <div class="nav-wrapper container">
        <a href="{{url('home')}}" class="brand-logo">Crap</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url('home')}}">首页</a></li>
            <li><a  href="#" onclick="contact()">联系</a></li>
            <li><a href="#" onclick="about()">关于</a></li>
            <li><a class="btn blue accent-2" href="{{url('subscribe')}}">订阅我</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="{{url('home')}}">首页</a></li>
            <li><a onclick="contact()" href="#">联系</a></li>
            <li><a href="#" onclick="about()">关于</a></li>
            <li><a href="{{url('subscribe')}}">订阅我</a></li>
        </ul>
    </div>
</nav>

@yield('content')



<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script>
    $(".button-collapse").sideNav();
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    @if(Session::exists('toast'))
           Materialize.toast('{{Session::get('toast')}}', 3000)
    @endif

    function contact() {
           Materialize.toast('不要尝试联系我', 3000)
    }
    function about() {
        Materialize.toast('啥都没有', 3000)

    }
</script>
</body>
</html>