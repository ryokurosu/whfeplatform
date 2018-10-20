@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default cobra">
       <div class="panel-heading">Cobra</div>
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
            <p>通貨ペア :EURUSD</p>
            <p>取引スタイル: スキャルピング・ナンピン マーチン</p>
            <p>初期証拠金金額 :20万円</p>
            <p>最大ポジション数  :20</p>
            <p>使用時間足 :１分足</p>
            <p>最大ストップロス :180pips</p>
            <p>最大ドローダウン :22%</p>
            <p>両建て :あり</p>
            <p>取扱商品 :MT4</p>
            <p>ファンダメンタル止め：有り（FOMC、ドラギ、雇用統計、パウエルFRB、政策金利、毎週土日）</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用期間:2016/01/01～2017/12/30</p>
            <p>証拠金:200,000円</p>
            <p>収益:177,455.88円</p>
            <p>口座残高:377,455.88円</p>
            <p>総収益率:87.22%</p>
            <p>年間収益率:43.61%</p>
            <p>月間収益率:3.96%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/cobra.pdf')}}" width="100%" height="375">
               <a href="{{url('/backtest/cobra.pdf')}}">詳細(PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('cobra.open')}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
