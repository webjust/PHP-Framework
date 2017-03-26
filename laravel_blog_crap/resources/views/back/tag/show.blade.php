@extends('front.layout')



@section('content')




    <div class="carousel carousel-slider center" data-indicators="true">

        <div class="carousel-item green white-text" href="#one!">
            <h2>我年华虚度</h2>
            <p class="white-text">空有一身疲倦</p>
        </div>

        <div class="carousel-item red white-text" href="#three!">
            <h2>看得越多</h2>
            <p class="white-text">越想看更多</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>停下来</h2>
            <p class="white-text">享受美</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col m7 ">
                @foreach($posts as $post)

                    <div class="post">
                        <h2 class="title"><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h2>
                        <div>
                            <div class="chip z-depth-1  blue  white-text">
                                {{date("M j Y",strtotime($post->created_at))}}
                            </div>
                            @foreach($post->tags as $tag)

                                <div class="chip z-depth-1 blue  ">
                                    <a href="{{route('tag.show',$tag->id)}}" class="white-text">{{$tag->tag}}</a>
                                </div>

                            @endforeach

                        </div>
                        <p>{{strlen($post->body)>100?mb_substr($post->body,0,100)."...":$post->body}}</p>
                    </div>
                @endforeach



            </div>
            <div class="col m3 s12 offset-m1">
                <div class="panel">
                    <ul>
                        <li class="side-title">热门文章</li>

                        @foreach($hot_posts as $hot_post)
                            <li><a id="hot-post-text" href="{{route('post.show',$hot_post->id)}}">{{$hot_post->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel">
                    <ul>
                        <li class="side-title">标签</li>
                        @foreach(\App\Tag::all() as $tag)
                            <a href="{{route('tag.show',$tag->id)}}" class="chip blue white-text">{{$tag->tag}}</a>
                        @endforeach
                    </ul>
                </div>
                <div class="panel">
                    <ul>
                        <li class="side-title">最新评论</li>
                        @foreach(\App\Comment::orderBy('created_at')->get()->slice(0,8) as $comment)
                            <li id="comment-text">{{strlen($comment->comment)>16?mb_substr($comment->comment,0,16)."...":$comment->comment}}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <footer class="page-footer grey darken-4 ">
        <div class="container">
            <div class="row" id="footer">
                <div class="col l6 s12">
                    <h5 class="white-text">Crap</h5>
                    <p class="grey-text text-lighten-4">大抵来说，浅薄的人是很多的。</p>
                </div>
                <div class="col l4 offset-l2 s12 friend-links">
                    <h5 class="white-text">友情链接</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">百度搜索</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">新浪博客</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">天涯论坛</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">中关村在线</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--<div class="footer-copyright">--}}
        {{--<div class="container">--}}
        {{--© 2017 copyright--}}
        {{--<a class="grey-text text-lighten-4 right" href="#!"></a>--}}
        {{--</div>--}}
        {{--</div>--}}
    </footer>





@endsection