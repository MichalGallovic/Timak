<div class="container space-top">
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
              	    <li class="space-right {{ set_active('/') }}"><a href="{{ url('/') }}">Projekt</a></li>
              		<li class="space-right {{ set_active('team') }}"><a href="{{ url('team') }}">Tím</a></li>
              		<li class="space-right {{ set_active('news') }}"><a href="{{ url('news') }}">Novinky</a></li>
              		<li class="space-right {{ set_active('documents') }}"><a href="{{ url('documents') }}">Dokumenty</a></li>
              		@if(Auth::check())
              		    <li class="space-right {{ set_active('admin') }}"><a href="{{ route('admin') }}">Admin Dashboard</a></li>
              		    <a class="btn btn-danger pull-right" href="{{ route('logout') }}">Logout</a>
                        <li class="text-muted pull-right space-right" style="margin-top:10px;">{{ currentUserFullname() }}</li>
              		@else
              		    <li class="space-right {{ set_active('login') }}"><a href="{{ route('login') }}">Login</a></li>
              		@endif


            </ul>
        </div>
    </div>
</div>