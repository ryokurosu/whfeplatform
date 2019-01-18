@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
       <div class="panel-heading">Application completed</div>
       <div class="panel-body">
        <p class="text-center">
          <img src="{{url('image/top.jpg')}}" alt="{{config('app.name')}}">
        </p>
        <p>Thank you for applying.</p>
        <p>The procedure up to operation start is as follows.</p>
        <p>① Please send "USL" message to "LINE @" linked with the WHFE platform.</p>
        <p></p>
        <p>② We will send you account opening URL from LINE @ support.</p>
        <p></p>
        <p>③ Please access the account opening URL and open an account based on the manual sent at LINE @ registration.</p>
        <p></p>
        <p>④ Please complete the identity verification based on the manual as well. (Principal confirmation may take about 2 business days to approve.)</p>
        <p></p>
        <p>⑤ Please make payment. ※ Please use bonus campaign by all means. For details, we will send you a message when registering LINE @.</p>
        <p></p>
        <p>⑥ Please operate USL based on the manual as well.</p>
        <p></p>
        <p>Operation starts with this.</p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
