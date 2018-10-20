@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(Auth::user()->auth <= 0)
      <p>
        <a class="btn btn-default" href="{{route('admin')}}">
          Admin page
        </a>
      </p>
      @endif
      <div class="panel panel-default">
       <div class="panel-heading">How to open account in FX</div>
       <div class="panel-body">
        <a class="btn btn-primary" href="{{url('/download/8max.pdf')}}">Downloads</a>
        <p></p>
        <p class="download-text">First of all, please refer to this article.</p>
      </div>
    </div>


    <div class="panel panel-default">
     <div class="panel-heading">FX System 1</div>
     <div class="panel-body">

       <form method="POST" action="{{ route('user.set.account') }}">
         {{ csrf_field() }}
         <div class="form-group">
          @if(Auth::user()->fx >= 1 && is_null(Auth::user()->account) )
          <input class="form-control" name="account" type="text" placeholder="FX ACCOUNT NUMBER" value="{{Auth::user()->account}}">
          @else
          <input class="form-control" name="account" type="text" placeholder="FX ACCOUNT NUMBER" value="{{Auth::user()->account}}" readonly>
          @endif
        </div>
        <div class="form-group">
         @if(Auth::user()->fx >= 1 && is_null(Auth::user()->account) )
         <button type="submit" class="btn btn-success">
          EA receiving application
        </button>
        @else
        <button type="submit" class="btn btn-success" disabled>
         EA receiving application
       </button>
       @endif
     </div>
   </form>
   @if(!is_null(Auth::user()->account) && \File::exists(storage_path() . "/app/downloads/" . Auth::user()->account."_Tiger_v1.0.ex4"))
   <div class="form-group">
    <a class="btn btn-danger" href="{{url('/download/'.Auth::user()->account.'_Tiger_v1.0.ex4')}}">EA file download</a>
  </div>
  @elseif(!is_null(Auth::user()->account))
  <p>EA file is now preparation</p>
  @endif
</div>
</div>
</div>
</div>
</div>
@endsection
