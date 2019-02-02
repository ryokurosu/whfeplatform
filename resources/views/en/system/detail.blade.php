@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default shark">
       <div class="panel-heading" style="color:{{$system->colorcode}}">{{$system->name}}</div>
       <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="nav-item active">
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
          @if($system->name == 'usl')
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair : EURUSD, GBPUSD</p>
            <p>Transaction style  : Day</p>
            <p>Initial margin amount : 1,000,000JPY <small>*avarable 100,000JPY or more</small></p>
            <p>Maximum number of positions  : 10</p>
            <p>Usage time Foot : </p>
            <p>Maximum stop loss  : 150pips</p>
            <p>Maximum drawdown : 27%</p>
            <p>Both houses : on</p>
            <p>Product line : MT4</p>
            <p>Fundamental stop：off</p>
            <p>Notice : Depending on the market price, currency pair, lot number will be selected</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operating margin : 5,000,000JPY</p>
            <p>Revenue : 11,413,721JPY</p>
            <small>※Deduct 5,000,000 JPY in June</small>
            <p>Operation period : 58 weeks</p>
            <p>Total return : 339.67％</p>
            <p>Monthly rate of return :14.28%</p>
          </div>
          @elseif($system->name == 'poseidon')

          @elseif($system->name == 'athena')

          @elseif($system->name == 'apollon')

          @elseif($system->name == 'ares')

          @elseif($system->name == 'hermes')

          @else
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair:</p>
            <p>Transaction style: </p>
            <p>Initial margin amount: </p>
            <p>Maximum number of positions: </p>
            <p>Usage time Foot: </p>
            <p>Maximum stop loss:</p>
            <p>Maximum drawdown: </p>
            <p>Both houses:</p>
            <p>Product line: </p>
            <p>Fundamental stop: </p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operating margin:</p>
            <p>Revenue:</p>
            <p>Account balance:</p>
            <p>Operation period:</p>
            <p>Total return:</p>
            <p>Annual rate of return:</p>
            <p>Monthly rate of return:</p>
          </div>
          @endif
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/'.$system->name.'.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/'.$system->name.'.pdf')}}">Detail (PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('system.open',$system->name)}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
