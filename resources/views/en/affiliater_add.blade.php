@extends('en.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">[管理者]代理店追加</div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('affiliater.add') }}">
                       {{ csrf_field() }}
                       <div class="form-group">
                        <label for="">代理店名</label>
                        <input class="form-control" name="name" type="text" placeholder="代理店名">
                    </div>
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary">
                        追加
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
