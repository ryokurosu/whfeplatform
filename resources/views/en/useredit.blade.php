@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if(Auth::user()->auth <= 0)
      <div class="container">
        <a href="{{route('admin')}}">
          Admin Page
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
        <div class="panel-heading">User edit [{{$user->name}}]</div>
        <div class="panel-body">
          <form method="POST" action="{{ $user->editPath() }}">
           {{ csrf_field() }}
           <div class="form-group">
            <label for="">Account number</label>
            <input class="form-control" name="account" type="text" placeholder="FX ACCOUNT NUMBER" value="{{$user->account}}" readonly>
            <a href="{{$user->accountDefaultPath()}}" onclick="return confirm('Account number initialize')">Initialize</a>
          </div>
          <div class="form-group">
            <p>
              <label for="">Affiliater：{{$user->affiliater->name}}</label>
            </p>
            <select name="affiliater_id" id="affiliater">
             @foreach(\App\Affiliater::all() as $affiliater)
             <option value="{{$affiliater->id}}">{{$affiliater->name}}</option>
             @endforeach
           </select>
         </div>
         <div class="form-group">
           <label for="email">E-Mail</label>
           <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
         </div>
         <div class="form-group">
           <label for="zipcode">Zipcode</label>
           <small>例）123-4567</small>
           <input id="zipcode" type="text" class="form-control" name="zipcode" value="{{$user->zipcode}}">
         </div>
         <div class="form-group">
           <label for="address">Address</label>
           <input id="address" type="text" class="form-control" name="address" value="{{$user->address}}">
         </div>
         <div class="form-group">
           <label for="tel">TEL</label>
           <small>例）090-1234-5678</small>
           <input id="tel" type="tel" class="form-control" name="tel" value="{{$user->tel}}">
         </div>
         <div class="form-group">
           <label for="gender">Gender</label>
           <div class="form-control">
             <input id="male" type="radio" name="gender" value="男" {{$user->gender != "女" ? "checked" : ""}}> <label for="male">Male</label>
             <input id="female" type="radio" name="gender" value="女" {{$user->gender == "女" ? "checked" : ""}}> <label for="female">Female</label>
           </div>
         </div>
          <div class="form-group">
           <label for="birthday">Birthday</label>
           <input id="birthday" type="date" class="form-control" name="birthday" value="{{$user->birthday}}">
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-success">
            Update
          </button>
        </div>
      </form>
    </div>
  </div>

</div>
</div>
</div>
@endsection
