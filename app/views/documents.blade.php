@extends('_layouts.default')
@section('content')
   <div class="container">
   			<div class="row">
   			<div class="col-md-1"></div>
   			<div class="col-md-11">
   				<h1>Dokumenty</h1>
   			</div>


   			</div>

   			<div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-11">
               <h4>Ponuka</h4>
               <a href="{{ asset('assets/pdf/Ponuka.pdf') }}">Ponuka</a>
            </div>
   			</div>

            <div class="row">
               <div class="col-md-1"></div>
               <div class="col-md-11">
                  <h4>Zápisnice</h4>
                  <a href="{{ asset('assets/pdf/zapis1.pdf') }}">Zápisnica 1</a><br>
                  <a href="{{ asset('assets/pdf/zapis2.pdf') }}">Zápisnica 2</a><br>
                  <a href="{{ asset('assets/pdf/zapis3.pdf') }}">Zápisnica 3</a><br>
                  <a href="{{ asset('assets/pdf/zapis4.pdf') }}">Zápisnica 4</a><br>
                  <a href="{{ asset('assets/pdf/zapis5.pdf') }}">Zápisnica 5</a><br>
                  <a href="{{ asset('assets/pdf/zapis6.pdf') }}">Zápisnica 6</a><br>
                  <a href="{{ asset('assets/pdf/zapis7.pdf') }}">Zápisnica 7</a>
               </div>
            </div>

   		</div>

@stop