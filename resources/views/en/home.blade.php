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
        <img src="/image/3357.jpg" alt="Savannah FX">
      </div>
    </div>


    <div class="panel panel-default">
     <div class="panel-heading">News</div>
     <div class="panel-body">
      <div class="news-column">
        <small>2018/09/02</small>
        <h2>tiger has been updated.</h2>
      </div>
      <div class="news-column">
        <small>2018/03/16</small>
        <h2>turtle has been updated.</h2>
      </div>
      <div class="news-column">
        <small>2018/03/16</small>
        <h2>shark has been updated.</h2>
      </div>
      <div class="news-column">
        <small>2018/03/16</small>
        <h2>eagle has been updated.</h2>
      </div>
      <div class="news-column">
        <small>2017/10/23</small>
        <h2>cobla has been updated.</h2>
      </div>
    </div>
    <a class="btn btn-primary" href="{{route('news')}}">Read More</a>
  </div>
  <div class="panel panel-default">
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
