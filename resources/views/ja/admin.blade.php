@extends('ja.layouts.app')

@section('content')
<div class="content">
  <div class="col-md-12">
    <p>
      <a class="btn btn-success" href="{{route('get.csv')}}">
        ユーザーCSV取得
      </a>
      <a class="btn btn-default" href="{{route('get.csv.prepend')}}">
        未発注ユーザー
      </a>
    </p>
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">氏名</th>
              <th scope="col">アドレス</th>
              <th scope="col">代理店</th>
              <th scope="col">管理者権限</th>
              <th scope="col">住所</th>
              <th scope="col">電話番号</th>
              <th scope="col">性別</th>
              <th scope="col">編集</th>
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
                @if($user->auth >= 0)
                <select name="{{$user->id}}_auth">
                 <option value="0" @if($user->auth == 0) selected @endif>0:管理者</option>
                 <option value="1" @if($user->auth == 1) selected @endif>1:仮登録</option>
                 <option value="2" @if($user->auth == 2) selected @endif>2:一般ユーザー</option>
               </select>
               @else
               最高管理者
               @endif
             </td>
             <td>{{$user->address}}</td>
             <td>{{$user->tel}}</td>
             <td>{{$user->gender}}</td>
             <td>
               <a href="{{$user->editPath()}}">編集</a>
             </td>
           </tr>

           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div>
</div>

<div id="modal">

</div>


<script>
 $(function(){
   $('select').change(function() {
    $('#modal').text('保存中...');
    var value = $(this).val();
    var temp = $(this).attr('name').split('_');
    var user_id = temp[0];
    var key = temp[1];
    $.ajax({
      type : "POST",
      　　　data: {
        value : value,
        user_id : user_id,
        key : key
      　　　},
      　　　url : "{{url('/usersetter')}}",
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      　　　success : function(data) {
        $('#modal').text('保存しました。');
      　　　},
      　　　error : function(data) {
        　$('#modal').text('保存に失敗しました。');
      　　}　
    });
  });
 });
</script>
@endsection
