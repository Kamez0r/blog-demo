
<h1>{{$title}}</h1>

{{--@dd($publish_date)--}}

<i>by
    <a href="{{ URL::to("/author/" . $author['id']) }}">
        {{$author['name']}}
    </a>
</i>

<span> / </span>

<i>{{ Carbon\Carbon::parse($publish_date)->format("Y-m-d H:i:s") }}</i>

<span> / </span>



<span> Category:
    <a href="{{URL::to("/category/" . $category['id'])}}">
        {{$category['title']}}
    </a>
</span>


@foreach(explode("\n", $body) as $paragraph)
    <p>{{$paragraph}}</p>
@endforeach
