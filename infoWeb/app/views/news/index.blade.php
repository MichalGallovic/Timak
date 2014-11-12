@extends('_layouts.default')

@section('content')
<div class="container space-top">
    @foreach($news as $item)
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">
                <a href="{{ route('news.detail', $item->id) }}" class="h2">{{ $item->title }}</a>
                <div class="text-muted">Publikoval {{ $item->author }} - {{ localizedDate($item->created_at) }}</div>
                                <span class="label label-primary">{{ $item->theme }}</span>
                {{--<p>{{ dotdotdot($item->body) }} <a href="{{ route('news.detail',$item->id) }}">Čítajte viac</a></p>--}}
                <hr/>
            </div>
        </div>
    @endforeach
</div>
@stop