@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default turtle">
       <div class="panel-heading">Turtle</div>
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
            <p>通貨ペア : AUDNZD</p>
            <p>取引スタイル  : スイング・ナンピン マーチン</p>
            <p>初期証拠金金額 : 10万円</p>
            <p>最大ポジション数  : 20</p>
            <p>使用時間足 : １分足</p>
            <p>最大ストップロス  : 320pips</p>
            <p>最大ドローダウン: 94.7%(強制ロスカット【2018.8.10】を除く)</p>
            <p>両建て : あり</p>
            <p>取扱商品 : MT4</p>
            <p>ファンダメンタル止め：無し</p>
          </div>
          <div id="tab2" class="tab-pane">
            <h3>エビデンス</h3>
            <p>運用期間 : 2008.1～2018.8.16</p>
            <p>運用証拠金 : 10,000円</p>
            <p>収益 : 975,683円</p>
            <p>口座残高 : 1,075,683円</p>
            <p>総収益率 : 975.7%</p>
            <p>年間収益率 : 81.3%</p>
            <p>月間収益率 : 6.78%</p>
          </div>
          <div id="tab3" class="tab-pane">
            <embed src="{{url('/backtest/turtle.pdf')}}" width="100%" height="375">
              <a href="{{url('/backtest/turtle.pdf')}}">詳細(PDF)</a>
            </div>
          </div>
          <div class="open-account-container">
            <a class="btn btn-primary big" href="{{route('turtle.open')}}">Open an account</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
