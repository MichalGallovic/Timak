@extends('_layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-11">
                <h1>{{ $item->title }}</h1>
                <p class="text-muted">Publikoval {{ $item->author }} - {{ localizedDate($item->created_at) }}</p>
                <p>
                <span class="label label-primary">{{ $item->theme }}</span>
                </p>
                <p style="font-size: 20px;">{{ $item->body }}</p>
            </div>
        </div>
    </div>
@stop