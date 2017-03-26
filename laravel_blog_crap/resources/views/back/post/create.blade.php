@extends('back.layout')
@section('css')

    <link rel="stylesheet" href="{{asset('css/simplemde.min.css')}}">

@endsection

@section('content')


    <div class="container">
        <div class="row">
            <div class="col m5 s12 admin-post">
                <form action="{{route('post.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="input-field">
                        <input id="title" type="text" class="validate" name="title">
                        <label for="title">标题</label>
                    </div>
                    <div class="input-field">
                        <select multiple name="tags[]">
                            <option value="" disabled selected>Choose your option</option>
                            @foreach(\App\Tag::all() as $tag)
                                <option value="{{$tag->id}}">{{$tag->tag}}</option>
                            @endforeach
                        </select>
                        <label>标签</label>
                    </div>

                    <div class="input-field">
                        <textarea name="body"></textarea>
                    </div>
                    <div class="input-field">
                        <input class="btn" type="submit" value="发布">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script src="{{asset('js/simplemde.min.js')}}"></script>
    <script>

        $(document).ready(function() {
            $('select').material_select();
            var simplemde = new SimpleMDE();
        });
    </script>
@endsection