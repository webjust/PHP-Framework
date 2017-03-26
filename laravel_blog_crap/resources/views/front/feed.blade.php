<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>{{ 'Xblog' }}</title>
        <description>{{ $description or 'Description' }}</description>
        <link>{{ url('/') }}</link>
        <atom:link href="{{ url('/subscribe') }}" rel="self" type="application/rss+xml"/>
        <?php
        $date = !empty($posts) ? $posts[0]->updated_at->format('D, d M Y H:i:s O') : date("D, d M Y H:i:s O", time())
        ?>
        <pubDate>{{ $date }}</pubDate>
        <lastBuildDate>{{ $date }}</lastBuildDate>
        @foreach ($posts as $post)
            <item>
                <title>{{ $post->title }}</title>
                <link>{{ route('post.show',$post->id) }}</link>
                <description>{{ $post->title }}</description>
                <pubDate>{{ $post->created_at->format('D, d M Y H:i:s T') }}</pubDate>
                {{--<guid>{{ route('post.show',$post->slug) }}</guid>--}}
                {{--<category>{{ $post->category->name }}</category>--}}
            </item>
        @endforeach
    </channel>
</rss>