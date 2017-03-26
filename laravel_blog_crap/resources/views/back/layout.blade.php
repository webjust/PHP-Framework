<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    @yield('css')
</head>
<body>
<nav class="white">
    <div class="nav-wrapper container">
        <a href="#!" class="brand-logo">Crap</a>
        @if(Auth::check()==true)
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/post">文章</a></li>
                <li><a href="/tag">标签</a></li>
                <li><a href="collapsible.html">评论</a></li>
                <li><a href="mobile.html">友链</a></li>
                <li><a href="/home">前台</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="/post">文章</a></li>
                <li><a href="/tag">标签</a></li>
                <li><a href="collapsible.html">评论</a></li>
                <li><a href="mobile.html">友链</a></li>
                <li><a href="/home">前台</a></li>
            </ul>
        @endif
    </div>
</nav>

@yield('content')


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
@yield('js')
<script>
    $(".button-collapse").sideNav();
    @if(Session::exists('toast'))
        Materialize.toast('{{Session::get('toast')}}', 3000)
    @endif
</script>
</body>
</html>