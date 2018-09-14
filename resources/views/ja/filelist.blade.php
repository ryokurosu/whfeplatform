@extends('ja.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">[管理者]ファイル管理</div>

                <div class="panel-body">
                 <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">ファイル名</th>
                        <th scope="col">削除</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($files as $file)
                    @php
                    $temp = explode('/',$file);
                    $filename = $temp[count($temp) - 1];
                    @endphp
                    <tr>
                        <td>{{$filename}}</td>
                        <td><a class="btn btn-danger" href="{{url('file/delete/'.$filename)}}" onclick="return confirm('ファイルを削除します。よろしいですか？')">このファイルを削除</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
@endsection
