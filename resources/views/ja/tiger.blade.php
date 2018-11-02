@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <img src="/image/yellowtiger.png" alt="Yellow Tiger">
      </div>
      <div class="panel panel-default tiger">
       <div class="panel-heading">Tiger</div>
       <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="nav-item">
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
          <div id="tab1" class="tab-pane active">
            <h3>概要</h3>
            <p>通貨ペア: AUDCAD</p>
            <p>取引スタイル: スイング・ナンピン マーチン</p>
            <p>初期証拠金金額: 15万円</p>
            <p>最大ポジション数 : 20</p>
            <p>使用時間足: １分足</p>
            <p>最大ストップロス: 120pips</p>
            <p>最大ドローダウン: 21%</p>
            <p>両建て: あり</p>
            <p>取扱商品: MT4</p>
            <p>ファンダメンタル止め：有り</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用期間: 2016.1～2017.12</p>
            <p>証拠金: 150,000円</p>
            <p>収益: 115,200円</p>
            <p>口座残高: 265,200円</p>
            <p>総収益率: 76.8%</p>
            <p>年間収益率: 38.4%</p>
            <p>月間収益率: 3.2%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/tiger.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/tiger.pdf')}}">詳細(PDF)</a>
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
