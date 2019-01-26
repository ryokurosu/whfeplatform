@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default shark">
       <div class="panel-heading" style="color:{{$system->colorcode}}">{{$system->name}}</div>
       <div class="panel-body">
         <ul class="nav nav-tabs">
           <li class="nav-item active">
            <a href="#tab1" class="nav-link active" data-toggle="tab">概要</a>
          </li>
          <li class="nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">エビデンス</a>
          </li>
          <li class="nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">バックテスト</a>
          </li>
        </ul>
        <div class="tab-content">
          @if($system->name == 'usl')
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア : EURUSD, GBPUSD</p>
            <p>取引スタイル  : スイング・ナンピン マーチン</p>
            <p>初期証拠金金額 : 1,000,000JPY</p>
            <p>最大ポジション数  : 30</p>
            <p>使用時間足 : </p>
            <p>最大ストップロス  : 200pips</p>
            <p>最大ドローダウン : 23%</p>
            <p>両建て : あり</p>
            <p>取扱商品 : MT4</p>
            <p>ファンダメンタル止め：あり</p>
            <p>注意点: 相場に合わせて、通貨ペア、lot数を選択していきます</p>
          </div>
          <div id="tab2" class="tab-pane">
            <p>運用証拠金 : 5,000,000JPY</p>
            <p>収益 : 11,413,721JPY</p>
            <small>※6月5,000,000JPY出金</small>
            <p>運用期間 : 58週</p>
            <p>総収益率 : 339.67％</p>
            <p>月間収益率 :14.28%</p>
          </div>
          @elseif($system->name == 'poseidon')

          @elseif($system->name == 'athena')

          @elseif($system->name == 'apollon')

          @elseif($system->name == 'ares')

          @elseif($system->name == 'hermes')

          @else
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア :</p>
            <p>取引スタイル  : </p>
            <p>初期証拠金金額 : </p>
            <p>最大ポジション数  : </p>
            <p>使用時間足 : </p>
            <p>最大ストップロス  :</p>
            <p>最大ドローダウン :</p>
            <p>両建て : </p>
            <p>取扱商品 : </p>
          </div>
          <div id="tab2" class="tab-pane">
            <p>運用証拠金 : </p>
            <p>収益 : </p>
            <p>口座残高 : </p>
            <p>運用期間 : </p>
            <p>総収益率 : </p>
            <p>年間収益率 :</p>
            <p>月間収益率 :</p>
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
