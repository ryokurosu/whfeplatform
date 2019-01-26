@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
       <div class="panel-heading">利用申請を承りました</div>
       <div class="panel-body">
         <p class="text-center">
          <img src="{{secure_url('image/top.jpg')}}" alt="{{config('app.name')}}">    
        </p>
        <p>ご利用申請ありがとうございます。</p>
        <p>運用開始までの手順は以下になります。</p>
        <p>①WHFEプラットフォームと連動している「LINE@」に「USL」とメッセージを送ってください。</p>
        <p></p>
        <p>②LINE@サポートから口座開設URLをお送り致します。</p>
        <p></p>
        <p>③口座開設URLにアクセスし、LINE@登録時に送らせていただいたマニュアルを元に口座開設をしてください。</p>
        <p></p>
        <p>④同じくマニュアルを元に本人確認を完了させてください。（本人確認は承認まで通常2営業日ほどかかる場合がございます。）</p>
        <p></p>
        <p>⑤入金を行なってください。</p>
        <p>※ぜひボーナスキャンペーンをご利用ください。詳しくはLINE@登録時にメッセージで送らせていただいております。</p>
        <p></p>
        <p>⑥同じくマニュアルを元にUSLを稼働させてください。</p>
        <p></p>
        <p>これで運用が開始されます</p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
