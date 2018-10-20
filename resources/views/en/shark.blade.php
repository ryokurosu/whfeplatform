@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default shark">
       <div class="panel-heading">Shark</div>
       <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a href="#tab1" class="nav-link active" data-toggle="tab">Overview</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">Evidence</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">Platform</a>
          </li>
        </ul>
        <div class="tab-content">
          <div id="tab1" class="tab-pane active">
            <h3>Overview</h3>
            <p>Currency pair: AUDNZD</p>
            <p>Transaction style: Swing · Nanping Martin</p>
            <p>Initial margin amount: 100,000 yen</p>
            <p>Maximum number of positions: 8</p>
            <p>Usage time Foot: 1 minute</p>
            <p>Maximum stop loss: 320 pips</p>
            <p>Maximum drawdown: 94.7% (excluding compulsory loss cut [2018.8.10])</p>
            <p>Both houses: yes</p>
            <p>Product line: MT4</p>
            <p>Fundamental stop: None</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Operating margin: 10,000 yen</p>
            <p>Revenue: 975,683 yen</p>
            <p>Account balance: 1,075,683 yen</p>
            <p>Operation period: 2008.1 to 2018.8.16</p>
            <p>Total return: 975.7%</p>
            <p>Annual rate of return: 81.3%</p>
            <p>Monthly rate of return: 6.78%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/shark.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/shark.pdf')}}">Detail (PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('shark.open')}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
