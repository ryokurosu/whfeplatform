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
      <!-- <div class="panel panel-default">
       <div class="panel-heading">FXとは</div>
       <div class="panel-body">
        <a class="btn btn-primary" href="{{url('/download/binary.pdf')}}">Downloads</a>
        <p></p>
        <p class="download-text">まずはこちらの資料を確認ください。</p>
      </div>
    </div> -->

    <div class="panel panel-default">
     <div class="panel-heading">FX口座開設方法</div>
     <div class="panel-body">
      <a class="btn btn-primary" href="{{url('/download/8max.pdf')}}">Downloads</a>
      <p></p>
      <p class="download-text">まずはこちらの資料を確認ください。</p>
    </div>
  </div>


  <div class="panel panel-default">
   <div class="panel-heading">FX System 1</div>
   <div class="panel-body">

     <form method="POST" action="{{ route('user.set.account') }}">
       {{ csrf_field() }}
       <div class="form-group">
        @if(Auth::user()->fx >= 1 && is_null(Auth::user()->account) )
        <input class="form-control" name="account" type="text" placeholder="FX口座番号" value="{{Auth::user()->account}}">
        @else
        <input class="form-control" name="account" type="text" placeholder="FX口座番号" value="{{Auth::user()->account}}" readonly>
        @endif
      </div>
      <div class="form-group">
       @if(Auth::user()->fx >= 1 && is_null(Auth::user()->account) )
       <button type="submit" class="btn btn-success">
        EA受取申請
      </button>
      @else
      <button type="submit" class="btn btn-success" disabled>
        EA受取申請
      </button>
      @endif
    </div>
  </form>
  @if(!is_null(Auth::user()->account) && \File::exists(storage_path() . "/app/downloads/" . Auth::user()->account."_Tiger_v1.0.ex4"))
  <div class="form-group">
    <a class="btn btn-danger" href="{{url('/download/'.Auth::user()->account.'_Tiger_v1.0.ex4')}}">EAファイルダウンロード</a>
  </div>
  @elseif(!is_null(Auth::user()->account))
  <p>EAファイルは現在準備中です。</p>
  @endif
</div>
</div>
 <!-- <div class="panel panel-default">
  <div class="panel-heading">Delivery Option 2</div>
  <div class="panel-body">
    @if(Auth::user()->auth >= 3 || Auth::user()->auth <= 0)
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
