@extends('en.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Onetime Key Error</div>

                <div class="panel-body">
                    <p>{{$email}}</p>
                    <p>Your account is suspended</p>
                    <p>please contact us.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
