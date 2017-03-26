@extends('back.layout')


@section('content')


    <div class="container">
        <div class="row">
            <div class="col m8 s12 admin-tag">
                <a href="{{route('tag.create')}}" class="btn">新建</a>

                <table>
                    <thead>
                    <tr>
                        <th >#</th>
                        <th >标签</th>
                        <th >操作</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($tags as $tag)

                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->tag}}</td>
                            <td>
                                <a href="{{route('tag.edit',$tag->id)}}" class="btn">编辑</a>
                                <form action="{{route('tag.destroy',$tag->id)}}" method="post" class="form-to-a">

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