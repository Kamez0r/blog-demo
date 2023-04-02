
<h1>{{$title}}</h1>

{{--@dd($publish_date)--}}

<i>by {{$author['name']}}</i>

<span> / </span>

<i>{{ Carbon\Carbon::parse($publish_date)->format("Y-m-d H:i:s") }}</i>



@foreach(explode("\n", $body) as $paragraph)
    <p>{{$paragraph}}</p>
@endforeach
