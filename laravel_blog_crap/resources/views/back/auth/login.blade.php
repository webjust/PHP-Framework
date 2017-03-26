@extends('back.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col m3 login">
                <form action="{{route('login')}}" method="post">
                    {{csrf_field()}}


                    <div class="input-field">
                        <input id="username" type="email" class="validate" name="email">
                        <label for="username">用户名</label>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">密码</label>
                    </div>
                    <div class="input-field">
                        <input class="btn" type="submit" value="登录">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
