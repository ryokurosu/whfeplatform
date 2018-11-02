@extends('en.layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
       <div class="panel-heading">Application completed</div>
       <div class="panel-body">
        <p class="text-center">
          <img src="/image/Savannah-FX.gif" alt="Savannah-FX">
        </p>
        <p>We have received application for use.</p>
        <p>Please confirm that you have sent an e-mail to the registered e-mail address. (If it does not arrive it may be in the junk mail folder.)</p>
        <p></p>
        <p>The contents of the attached e-mail are as follows.</p>
        <p>· URL to account opening page</p>
        <p>· Account opening manual</p>
        <p>· Operation management manual</p>
        <p>· MT4 application download URL</p>
        <p></p>
        <p>① Please refer to "Account opening manual" and open your account from "URL to account opening page".</p>
        <p>② After the opening procedure is completed, "MT 4 ID" and "password" will be sent from the securities company to the registered e-mail address.</p>
        <p>③ Please deposit the margin on your account.</p>
        <p>(Because automatic transaction, operation is automatically started when payment is reflected.)</p>
        <p>④ By referring to "Operation management manual", you can manage your own operation from "MT4 application download URL".</p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
