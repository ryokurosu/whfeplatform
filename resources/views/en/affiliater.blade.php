@extends('en.layouts.app')

@section('content')
<div class="content">
  <div class="col-md-12">
    <p>
      <a class="btn btn-success" href="{{route('affiliater.add')}}">
        Add Affiliater
      </a>
    </p>
    <div class="panel panel-default">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Affiliater code</th>
            <th scope="col">Name</th>
            <th scope="col">Affiliate URL</th>
          </tr>
        </thead>
        <tbody>
          @foreach($affiliaters as $affiliater)

          <tr style="height:50px">
            <th scope="row">{{$affiliater->id}}</th>
            <td>{{$affiliater->code}}</td>
            <td>{{$affiliater->name}}</td>
            <td>
              {{$affiliater->registerPath()}}
            </td>
          </tr>
          
          @endforeach
        </tbody>
      </table>
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
