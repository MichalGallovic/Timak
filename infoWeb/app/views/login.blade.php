@extends('_layouts.default')
@section('content')
<div class="container space-top">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <div class="well">
                <form method="POST" action="{{ route('login.post') }}">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop