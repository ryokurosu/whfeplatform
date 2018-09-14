@extends('ja.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Onetime Key</div>

                <div class="panel-body">
                 <p>please set your onetime key on your indicator.</p>
                 <p>{{$key}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
