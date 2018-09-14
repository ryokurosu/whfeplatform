@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if(Auth::user()->auth <= 0)
      <p>
        <a class="btn btn-default" href="{{route('admin')}}">
          管理者ページ
        </a>
      </p>
      @endif
      <div class="panel panel-default">
       <div class="panel-heading">バイナリーオプションとは</div>
       <div class="panel-body">
        <a class="btn btn-primary" href="{{url('/download/binary.pdf')}}">Downloads</a>
        <p></p>
        <p class="download-text">まずはこちらの資料を確認ください。</p>
      </div>
    </div>

    <div class="panel panel-default">
     <div class="panel-heading">ハイローオーストラリア開設方法</div>
     <div class="panel-body">
      <a class="btn btn-primary" href="{{url('/download/highlow.pdf')}}">Downloads</a>
      <p></p>
      <p class="download-text">まずはこちらの資料を確認ください。</p>
      <p class="download-text">登録用URL ⇨ <a href="http://tonedoge.site/13-2/" target="_blank">http://tonedoge.site/13-2/</a></p>
    </div>
  </div>


  <div class="panel panel-default">
   <div class="panel-heading">Delivery Option 1</div>
   <div class="panel-body">
     @if(Auth::user()->delivary >= 2)
     <a class="btn btn-danger" href="{{url('/download/deliveryoption1.ex4')}}">Downloads</a>
     @else
     <a class="btn btn-gray">Downloads</a>
     @endif
     <p></p>
     <p class="download-text">全通貨・全足に対応です。</p>
     <p class="download-text">前後12本分の足の高値低値を読み取り、サインの自動更新があるのでトレンドによる相場の読み違いによる負けを減少することができます。</p>
   </div>
 </div>
<!--  <div class="panel panel-default">
  <div class="panel-heading">Delivery Option 2</div>
  <div class="panel-body">
    @if(Auth::user()->delivary >= 3)
    <a class="btn btn-warning" href="{{url('/download/deliveryoption2.ex4')}}">Downloads</a>
    @else
    <a class="btn btn-gray">Downloads</a>
    @endif
    <p></p>
    <p class="download-text">全通貨・全足に対応です(主に1分・5分の取引にご利用ください)。</p>
    <p class="download-text">前後12本分の足の高値低値を読み取り、サインの自動更新があるのでトレンドによる相場の読み違いによる負けを減少することができます。</p>
  </div>
</div> -->
</div>
</div>
</div>
@endsection
