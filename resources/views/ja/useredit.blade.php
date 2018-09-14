@extends('ja.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if(Auth::user()->auth <= 0)
      <div class="container">
        <a href="{{route('admin')}}">
          管理者ページへ
        </a>
      </div>
      @endif
      @if (session('status'))
      <div class="alert alert-danger">
        <p>{{ session('status') }}</p>
        <p>{{ session('tel') }}</p>
      </div>
      @endif
      <div class="panel panel-default">
        <div class="panel-heading">ユーザー編集[{{$user->name}}]</div>
        <div class="panel-body">
          <form method="POST" action="{{ $user->editPath() }}">
           {{ csrf_field() }}
           <div class="form-group">
            <label for="">口座番号</label>
            <input class="form-control" name="account" type="text" placeholder="FX口座番号" value="{{$user->account}}" readonly>
            <a href="{{$user->accountDefaultPath()}}" onclick="return confirm('口座番号を初期化します。よろしいですか？')">初期化</a>
          </div>
          <div class="form-group">
            <p>
              <label for="">現在の代理店：{{$user->affiliater->name}}</label>
            </p>
            <select name="affiliater_id" id="affiliater">
             @foreach(\App\Affiliater::all() as $affiliater)
             <option value="{{$affiliater->id}}">{{$affiliater->name}}</option>
             @endforeach
           </select>
         </div>
         <div class="form-group">
           <label for="email">メールアドレス</label>
           <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
         </div>
         <div class="form-group">
           <label for="zipcode">郵便番号</label>
           <small>例）123-4567</small>
           <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{$user->zipcode}}">
         </div>
         <div class="form-group">
           <label for="address">住所</label>
           <input id="address" type="text" class="form-control" name="address" value="{{$user->address}}">
         </div>
         <div class="form-group">
           <label for="tel">電話番号</label>
           <small>例）090-1234-5678</small>
           <input id="tel" type="tel" class="form-control" name="tel" value="{{$user->tel}}">
         </div>
         <div class="form-group">
           <label for="gender">性別</label>
           <div class="form-control">
             <input id="male" type="radio" name="gender" value="男" {{$user->gender != "女" ? "checked" : ""}}> <label for="male">男性</label>
             <input id="female" type="radio" name="gender" value="女" {{$user->gender == "女" ? "checked" : ""}}> <label for="female">女性</label>
           </div>
         </div>
          <div class="form-group">
           <label for="birthday">生年月日</label>
           <input id="birthday" type="date" class="form-control" name="birthday" value="{{$user->birthday}}">
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-success">
            更新
          </button>
        </div>
      </form>
    </div>
  </div>

</div>
</div>
</div>
@endsection
