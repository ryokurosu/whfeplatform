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
      <div class="panel">
        <a href="{{route('fx')}}">
          <img src="{{url('/image/top.jpg')}}" alt="{{config('app.name')}}">
        </a>
      </div>
    </div>
    <div class="clear"></div>
    <div class="col-md-12">
      <div class="panel panel-default">
       <div class="clear"></div>
       <div class="panel-heading">News</div>
       <div class="panel-body">
         <div class="news-column">
          <small>2019/01/01</small>
          <h2>USL has been updated.</h2>
        </div>
        <a class="btn btn-primary" href="{{route('news')}}">Read More</a>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="panel">
    <div class="panel-body">
      <div class="user-information">
        <span class="user-information-th">Name</span>
        <span class="user-information-td">{{Auth::user()->name}}</span>
      </div>
      <div class="user-information">
        <span class="user-information-th">E-mail</span>
        <span class="user-information-td">{{Auth::user()->email}}</span>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
