@extends('back.layout')



@section('content')


    <div class="container">
        <div class="row">
            <div class="col m12 s12 admin-post">
                <a href="{{route('post.create')}}" class="btn">新建</a>
                <table>
                    <thead>
                    <tr>
                        <th >#</th>
                        <th >标题</th>
                        <th >标签</th>
                        <th >内容</th>
                        <th >操作</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{strlen($post->title)>7?mb_substr($post->title,0,7)."...":$post->title}}</td>
                            <td>
                                @foreach($post->tags as $tag)
                                    <span class="chip">{{$tag->tag}}</span>
                                @endforeach
                            </td>
                            <td>{{strlen($post->body)>7?mb_substr($post->body,0,7)."...":$post->body}}</td>
                            <td>
                                <a href="{{route('post.edit',$post->id)}}" class="btn">编辑</a>
                                <form action="{{route('post.destroy',$post->id)}}" method="post" class="form-to-a">

                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input type="submit" value="删除" class="btn">
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

