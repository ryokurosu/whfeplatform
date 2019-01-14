@extends('en.layouts.app')

@section('content')
<div class="container" id="fx">
  <div class="row">
    <div class="col-md-12">
      @if(Auth::user()->auth <= 0)
      <p>
        <a class="btn btn-primary" href="{{route('admin')}}">
          Admin page
        </a>
      </p>
      @endif
      <!-- <div class="panel panel-default">
       <div class="panel-heading">FX</div> -->

       @foreach($systems as $system)

       @php
       
       switch($system->name){
       case 'alps':
       $fontcolor = "#ffa128";
       $bordercolor = "#fff684";
       $profit = "??";
       break;
       case 'opera':
       $fontcolor = "#ffffff";
       $bordercolor = "#006619";
       $profit = "??";
       break;
       case 'barrier':
       $fontcolor = "#01045e";
       $bordercolor = "#0d106d";
       $profit = "??";
       break;
       default:
       $fontcolor = $system->colorcode;
       $bordercolor = $system->colorcode;
       $profit = "14.28%";
       break;
     }

     @endphp
     <a href="{{route('system.detail',$system->name)}}">
       <div id="{{$system->name}}" class="fx-card">
        <img src="{{url('/image/'.$system->name.'.jpg')}}" alt="{{$system->name}}">
        <div class="fx-card-border" style="border-color:{{$bordercolor}};">
          <h2 style="color:{{$fontcolor}};">{{$system->lname}}</h2>
          <p style="text-align:center;color:{{$fontcolor}};">Monthly Profit：{{$profit}}</p>
        </div>
      </div>
    </a>
    @endforeach

<!--   </div>
</div> -->
</div>
</div>
@endsection
