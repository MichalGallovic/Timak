@extends('_layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="well space-top">
                {{Form::open(['files'=>'true','route'=>['admin.image.upload']])}}
                    <div class="form-group">
                        <label for="image">Obrazok</label>
                        <input type="file" name="image"/>
                    </div>
                    <button type="submit" class="btn btn-success">Upload Image</button>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@stop