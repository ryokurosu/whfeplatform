@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
       <div class="panel-heading">利用申請を承りました</div>
       <div class="panel-body">
         <p class="text-center">
          <img src="{{url('image/top.jpg')}}" alt="{{config('app.name')}}">    
        </p>
        <p>登録いただいたメールアドレスにメールを送らせていただきましたのでご確認ください。（届かない場合は迷惑メールフォルダに入っている可能性があります。）</p>
        <p></p>
        <p>添付したメールの内容は以下の通りです。</p>
        <p>・口座開設ページへのURL</p>
        <p>・口座開設マニュアル</p>
        <p>・運用管理マニュアル</p>
        <p>・MT4アプリダウンロードURL</p>
        <p></p>
        <p>①「口座開設マニュアル」をご参照の上、「口座開設ページへのURL」からご自分の口座を開設してください。</p>
        <p>②開設手続きが終わると登録いただいたメールアドレスに証券会社から「MT4ID」と「パスワード」が届きます。</p>
        <p>③ご自分の口座に証拠金を入金してください。</p>
        <p>（自動取引のため、入金が反映された時点で運用が自動的に開始されます。）</p>
        <p>④「運用管理マニュアル」をご参照の上、「MT4アプリダウンロードURL」からご自身の運用の管理することができます。</p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
