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
       <div class="panel-heading">What Binary option?</div>
       <div class="panel-body">
        <a class="btn btn-primary" href="{{url('/download/binary.pdf')}}">Downloads</a>
        <p></p>
        <p class="download-text">First of all, please refer to this article.</p>
      </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading">How to open account in Highlow Australia</div>
     <div class="panel-body">
      <a class="btn btn-primary" href="{{url('/download/highlow.pdf')}}">Downloads</a>
      <p></p>
      <p class="download-text">First of all, please refer to this article.</p>
      <p class="download-text">Register URL ⇨ <a href="http://tonedoge.site/13-2/" target="_blank">http://tonedoge.site/13-2/</a></p>
    </div>
  </div>


  <div class="panel panel-default">
   <div class="panel-heading">Delivery Option 1</div>
   <div class="panel-body">
     @if(Auth::user()->delivary >= 2)
     <a class="btn btn-danger" href="{{url('/download/deliveryoption1.ex4')}}">Downloads</a>
     @else
     <a class="btn btn-gray">Downloads</a>
     @endif
     <p></p>
     <p class="download-text">Corresponding to all the currency and the entire foot.</p>
   </div>
 </div>
</div>
</div>
</div>
@endsection
