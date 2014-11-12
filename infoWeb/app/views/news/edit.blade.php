@extends('_layouts.default')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <h1>Uprav novinku</h1>
        {{Form::open(['route'=>['news.update',$item->id],'method'=>'PUT'])}}
            <div class="form-group">
               <label for="title">Title</label>
               <input type="text" value="{{ $item->title }}" name="title" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="body">Text</label>
                @include('_partials.wysiwyg')
            </div>
            <div class="form-group">
                <label for="theme">Téma</label>
                <input type="text" value="{{ $item->theme }}" class="form-control" name="theme"/>
            </div>
            <button class="btn btn-success" type="submit">Uprav</button>
        {{Form::close()}}
    </div>
</div>
</div>

@stop