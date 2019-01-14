@extends('en.layouts.app')

@section('content')
<div class="content">
  <div class="col-md-12">
    <p>
      <a class="btn btn-success" href="{{route('get.csv')}}">
        User CSV export
      </a>
      <a class="btn btn-default" href="{{route('get.csv.prepend')}}">
        Not ordering user
      </a>
    </p>
    <div class="panel panel-default">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Affiliater</th>
              <th scope="col">Auth</th>
              <th scope="col">Address</th>
              <th scope="col">Tel</th>
              <th scope="col">Gender</th>
              <th scope="col">Edit</th>
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
                 <option value="0" @if($user->auth == 0) selected @endif>0:Admin</option>
                 <option value="1" @if($user->auth == 1) selected @endif>1:register</option>
                 <option value="2" @if($user->auth == 2) selected @endif>2:User</option>
               </select>
               @else
               最高管理者
               @endif
             </td>
             <td>{{$user->address}}</td>
             <td>{{$user->tel}}</td>
             <td>{{$user->gender}}</td>
             <td>
               <a href="{{$user->editPath()}}">Edit</a>
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
    $('#modal').text('Saving...');
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
        $('#modal').text('Saved!');
      　　　},
      　　　error : function(data) {
        　$('#modal').text('Error...');
      　　}　
    });
  });
 });
</script>
@endsection
