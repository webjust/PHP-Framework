@extends('back.layout')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col m5 s12 admin-tag">
                <form action="{{route('tag.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="input-field">
                        <input id="tag" type="text" class="validate" name="tag">
                        <label for="tag">标签</label>
                    </div>


                    <div class="input-field">
                        <input class="btn" type="submit" value="创建">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection