@extends('front.layout')

@section('title')
    {{$post->title}}
@endsection

@section('content')


    <div class="container">
        <div class="row">
            <div class="col m8 offset-m2 s12">
                <h1 class="title">{{$post->title}}</h1>
                <div>
                    @foreach($post->tags as $tag)
                        <div class="chip z-depth-1 blue hoverable ">
                            <a href="{{route('tag.show',$tag->id)}}" class="white-text">{{$tag->tag}}</a>
                        </div>

                    @endforeach
                </div>
                <p>{!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($post->body) !!}</p>

                <form action="{{route('comment.store').'?id='.$post->id}}" method="post" class="discuss">
                    {{csrf_field()}}
                    <div class="input-field">
                        <input id="username" type="text" class="validate" name="name">
                        <label for="username">名字</label>
                    </div>
                    <div class="input-field">
                        <input id="url" type="text" class="validate" name="url">
                        <label for="url">网址(可选)</label>
                    </div>
                    <div class="input-field">
                        <textarea id="textarea1" class="materialize-textarea" name="comment"></textarea>
                        <label for="textarea1">评论框</label>
                    </div>
                    <div class="input-field">
                        <input type="submit" class="btn blue paginator">
                    </div>
                </form>

                <div class="comments">
                    @foreach($post->comments as $comment)
                        <a href="{{$comment->url}}">{{$comment->name}}</a>
                        <p>{{$comment->comment}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection

