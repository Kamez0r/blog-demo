


@foreach($posts as $post)
    <a href="{{ URL::to("/post/" . $post->id) }}">
        <h1>{{$post->title}}</h1>
    </a>

    <div>
        {{ $post->excerpt }}
    </div>

@endforeach

