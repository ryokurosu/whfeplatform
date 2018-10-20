@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(Auth::user()->auth <= 0)
      <p>
        <a class="btn btn-primary" href="{{route('admin')}}">
          Admin page
        </a>
      </p>
      @endif
      <div class="panel panel-default">
       <div class="panel-heading">FX</div>

       <a href="{{route('tiger')}}">
         <div id="tiger" class="fx-card">
          <div class="fx-icon"></div>
          <h2>Tiger</h2>
<!--           <p>sample sample sample sample sample sample sample sample sample sample</p>
 -->        </div>
      </a>

      <a href="{{route('elephant')}}">
        <div id="elephant" class="fx-card">
          <div class="fx-icon"></div>
          <h2>Elephant</h2>
<!--           <p>sample sample sample sample sample sample sample sample sample sample</p>
 -->        </div>
      </a>

      <a href="{{route('turtle')}}">
        <div id="turtle" class="fx-card">
          <div class="fx-icon"></div>
          <h2>Turtle</h2>
<!--           <p>sample sample sample sample sample sample sample sample sample sample</p>
 -->        </div>
      </a>

      <a href="{{route('shark')}}">
        <div id="shark" class="fx-card">
          <div class="fx-icon"></div>
          <h2>Shark</h2>
<!--           <p>sample sample sample sample sample sample sample sample sample sample</p>
 -->        </div>
      </a>

      <a href="{{route('cobra')}}">
        <div id="cobra" class="fx-card">
          <div class="fx-icon"></div>
          <h2>Cobra</h2>
<!--           <p>sample sample sample sample sample sample sample sample sample sample</p>
 -->        </div>
      </a>

      <a href="{{route('eagle')}}">
        <div id="eagle" class="fx-card">
          <div class="fx-icon"></div>
          <h2>Eagle</h2>
<!--           <p>sample sample sample sample sample sample sample sample sample sample</p>
 -->        </div>
      </a>
      
    </div>
  </div>
</div>
</div>
@endsection
