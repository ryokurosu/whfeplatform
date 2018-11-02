@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default tiger">
       <div class="panel-heading">Tiger</div>
       <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="#tab1" class="nav-link active" data-toggle="tab">Overview</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">Evidence</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">Backtest</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair :  AUDCAD</p>
            <p>Trading Style : Swin・Nan Ping Martin</p>
            <p>Initial margin amount : 150,000 yen</p>
            <p>Maximum number of positions : 20</p>
            <p>Use time Foot : 1 minute</p>
            <p>Maximum stop loss : 120 pips</p>
            <p>Maximum drawdown :21%</p>
            <p>Both : houses</p>
            <p>Product line : MT4</p>
            <p>Fundamental stop: Yes</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operation period : 2016.1 to 2017.12</p>
            <p>Margin : 150,000 yen</p>
            <p>Revenue : 115,200 yen</p>
            <p>Account balance : 265,200 yen</p>
            <p>Total rate of return : 76.8%</p>
            <p>Annual rate of return : 38.4%</p>
            <p>Monthly rate of return : 3.2%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/tiger.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/tiger.pdf')}}">Detail (PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('tiger.open')}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
