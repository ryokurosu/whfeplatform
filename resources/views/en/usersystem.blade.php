@extends('ja.layouts.app')

@section('content')
<div class="content">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">氏名</th>
              <th scope="col">アドレス</th>
              <th scope="col">代理店</th>
              <th scope="col">利用システム</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr style="height:50px">
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->affiliater->name}}</td>
             <td>
              {{$user->systems->pluck('name')}}
             </td>
           </tr>

           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>
@endsection
