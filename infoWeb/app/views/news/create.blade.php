@extends('_layouts.default')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <h1>Nová novinka</h1>
        <form action="{{ route('news.store') }}" method="POST">
            <div class="form-group">
               <label for="title">Title</label>
               <input type="text" name="title" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="body">Text</label>
               @include('_partials.wysiwyg')
            </div>
            <div class="form-group">
                <label for="theme">Téma</label>
                <input type="text" class="form-control" name="theme"/>
            </div>
            <button class="btn btn-success" type="submit">Pridaj</button>
        </form>
    </div>
</div>
</div>

@stop

