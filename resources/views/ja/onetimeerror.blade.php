@extends('ja.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Onetime Key Error</div>

                <div class="panel-body">
                    <p>{{$email}}</p>
                    <p>あなたのアカウントは同時接続されています。</p>
                    <p>不正行為の疑いがありますので、運営にお問い合わせください。</p>
                    <p>※現在、あなたのアカウントは「監視対象アカウント」となっております。運営からご連絡がいく可能性がありますので、ご了承下さい。</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
