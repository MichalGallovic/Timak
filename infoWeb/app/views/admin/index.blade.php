@extends('_layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('news.create') }}" class="btn btn-success space-top">Vytvor novinku</a></li>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            @if(Session::has('message'))
                @include('_partials.alerts.success')
            @endif
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($news as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{$item->author}}</td>
                    <td>{{localizedDate($item->created_at)}}</td>
                    <td><a class="btn btn-primary" href="{{route('news.edit',$item->id)}}">Edit</a></td>
                    <td>
                    {{Form::open(['route' => ['news.delete',$item->id],'method' => 'delete']) }}
                        <button class="btn btn-danger" type="submit">Delete</button>
                    {{Form::close()}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@stop