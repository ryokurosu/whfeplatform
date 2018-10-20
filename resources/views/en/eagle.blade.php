@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default eagle">
       <div class="panel-heading">Eagle</div>
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
            <p>Currency pair: EURUSD</p>
            <p>Transaction style: Scalping · Nampin Martin</p>
            <p>Initial margin amount: 100,000 yen</p>
            <p>Maximum number of positions: 16</p>
            <p>Usage time Foot: 1 minute</p>
            <p>Maximum stop loss: 155 Pips</p>
            <p>Maximum drawdown: 43%</p>
            <p>Both houses: yes</p>
            <p>Product line: MT4</p>
            <p>Fundamental stop: Yes (FOMC, Draghi, Employment Statistics, Powell FB, Policy Interest Rate, Weekly Saturdays and Sundays)</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>Evidence</h3>
            <p>Margin: 100,000 yen</p>
            <p>Revenue: 177,455.88 yen</p>
            <p>Account balance: 377,455.88 yen</p>
            <p>Operation period: 2016/01/01 to 2017/12/30</p>
            <p>Total return: 174.44%</p>
            <p>Annual rate of return: 87.22%</p>
            <p>Monthly rate of return: 7.93%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/eagle.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/eagle.pdf')}}">Detail (PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('eagle.open')}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
